<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class employeeRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        switch ($this->method()) {
            case 'POST': {
                return [
                    'firstname' => 'required',
                    'lastname' => 'required',
                    'email' => 'required|email|unique:employees',
                    'phone' => 'required|numeric|digits:10',
                    'company' => 'required',
                ];
            }
            case 'PUT':
            case 'PATCH': {
                $id = request()->segment(2);
                return [
                    'firstname' => 'required',
                    'lastname' => 'required',
                    'email' => 'required|unique:employees,email,'.$id,
                    'phone' => 'required|numeric|digits:10',
                    'company' => 'required',
                ];
            }
            default:
            break;
        }
    }

    public function messages(){

        return [
                    'firstname.required' => 'Firstname is required',
                    'lastname.required' => 'Lastname is required',
                    'email.required' => 'Email is required',
                    'email.email' => 'Email is not valid',
                    'email.unique' => 'Email has already been taken',
                    'phone.required' => 'Phone number url is required',
                    'phone.digits' => 'Phone number is not valid',
                    'phone.numeric' => 'Phone number must have a numeric value.',
                    'company.required' => 'Please select company',
                ];

    }
}
