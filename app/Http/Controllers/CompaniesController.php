<?php

namespace App\Http\Controllers;

use App\Company;
use Image;
use App\Employee;
use Illuminate\Http\Request;
use App\Http\Requests\companyRequest;

class CompaniesController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }
    /*
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Company::latest()->paginate(10);
        return view('companies.index',compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
         return view('companies.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(companyRequest $request)
    {
        $data = new Company;
        $data->name = $request->input('name');
        $data->email = $request->input('email');
        $data->website = $request->input('website');
    
        $image = $request->file('logo');
        if($image)
        {
            $photos = $request->file('logo');    
            $imagename = $photos->getClientOriginalName();  
            $destinationPath = storage_path('/app/public');
            $thumb_img = Image::make($photos->getRealPath())->resize(100, 100);
            $thumb_img->save($destinationPath.'/'.$imagename,80);  
           $data->logo = $imagename;  
        }
        $data->save();

       return redirect()->route('companies.index')->with('success','Companie is successfully inserted');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Companies  $companies
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data = Company::findOrFail($id);
        return view('companies.show',compact('data'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Companies  $companies
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data = Company::findOrFail($id);
        return view('companies.edit',compact('data'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Companies  $companies
     * @return \Illuminate\Http\Response
     */
    public function update(companyRequest $request,$id)
    {
    
        $data = Company::findOrFail($id);
        $image = $request->file('logo');
        if($image)
        {
            $data->name = $request->input('name');
            $data->email = $request->input('email');
            $data->website = $request->input('website');
            //img
            $photos = $request->file('logo');    
            $imagename = $photos->getClientOriginalName();  
            $destinationPath = storage_path('/app/public');
            $thumb_img = Image::make($photos->getRealPath())->resize(100, 100);
            $thumb_img->save($destinationPath.'/'.$imagename,80);  
            $data->logo = $imagename;  

        }
        else
        {
            $data->name = $request->input('name');
            $data->email = $request->input('email');
            $data->website = $request->input('website');
        }    
        $data->save();
        return redirect()->route('companies.index')->with('success','Companie is successfully updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Companies  $companies
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data = Company::findOrFail($id);
        $emp = Employee::where('company',$id);
        $filename = storage_path().'/app/public/'.$data->logo;
        //delete img
        if(file_exists($filename)){
            unlink($filename);
        }else{
            dd('File does not exists.');
        }
        $data->delete();
        $emp->delete();

        return redirect()->route('companies.index')->with('success','Companie successfully deleted');
    }
}
