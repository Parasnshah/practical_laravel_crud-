<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class companyRequest extends FormRequest
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
                    'name' => 'required|unique:companies',
                    'email' => 'required|email|unique:companies',
                    'website' => 'required|url',
                    'logo' => 'required|image|mimes:jpeg,jpg,png,gif',
                ];
            }
            case 'PUT':
            case 'PATCH': {
                $id = request()->segment(2);
                return [
                    'name' => 'required|unique:companies,name,'.$id,
                    'email' => 'required|unique:companies,email,'.$id,
                    'website' => 'required|url',
                    'logo' => 'image|mimes:jpeg,jpg,png,gif',
                ];
            }
            default:
            break;
        }
    }

    public function messages(){

        return [
                    'name.required' => 'Company name is required',
                    'name.unique' => 'Company name has already been taken',
                    'email.required' => 'Email is required',
                    'email.email' => 'Email is not valid',
                    'email.unique' => 'Email has already been taken',
                    'website.required' => 'website url is required',
                    'website.url' => 'Url is not valid',
                    'logo.required' => 'Logo is required',
                ];

    }
}
