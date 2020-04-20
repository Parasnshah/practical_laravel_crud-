<?php

namespace App\Http\Controllers;

use App\Employee;
use App\Company;
use Illuminate\Http\Request;
use App\Http\Requests\employeeRequest;

class EmployeesController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {


        $data = Employee::with('companies')->latest()->paginate(10);
       // dd($data->toArray());
        return view('employees.index',compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $company = Company::latest()->get();
        return view('employees.create',compact('company'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(employeeRequest $request)
    {
        $data = new Employee;
        $data->firstname = $request->input('firstname');
        $data->lastname = $request->input('lastname');
        $data->email = $request->input('email');
        $data->phone = $request->input('phone');
        $data->company = $request->input('company');
        $data->save();

       return redirect()->route('employees.index')->with('success','Employee is successfully inserted');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Employees  $employees
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
       // $data = Employee::findOrFail($id);

        $data =  Employee::with('companies')->findOrFail($id);
        return view('employees.show',compact('data'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Employees  $employees
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {   
        $company = Company::latest()->get();
        $data = Employee::findOrFail($id);
        return view('employees.edit',compact('data','company'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Employees  $employees
     * @return \Illuminate\Http\Response
     */
    public function update(employeeRequest $request,$id)
    {
        $data = Employee::findOrFail($id);
        $data->firstname = $request->input('firstname');
        $data->lastname = $request->input('lastname');
        $data->email = $request->input('email');
        $data->phone = $request->input('phone');
        $data->company = $request->input('company');
        $data->save();

        return redirect()->route('employees.index')->with('success','Employee is successfully updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Employees  $employees
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data = Employee::findOrFail($id);
        $data->delete();

        return redirect('employees');
    }
}
