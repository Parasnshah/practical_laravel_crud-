@extends('layouts.default')
@section('content')
<div class="container">
    <div class="table-wrapper">
          <div class="table-title">
              <div class="row">
                  <div class="col-sm-5">
          <h2><b>Add Company</b></h2>
        </div>
        <div class="col-sm-7">
          <a href="{{route('companies.index')}}" class="btn btn-primary"><i class="fa fa-arrow-left" aria-hidden="true"></i><span>Back</span></a>
        </div>
              </div>
          </div>
          <form method="post" action="{{route('companies.store')}}" autocomplete="off" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
              <label for="name">Name:</label>
              <input type="text" class="form-control" id="name" placeholder="Enter Name" name="name" value="{{old('name')}}">
              <div class="text-danger">{{$errors->first('name')}}</div>
            </div>
            <div class="form-group">
              <label for="email">Email:</label>
              <input type="text" class="form-control" id="email" placeholder="Enter Email" name="email" value="{{old('email')}}">
              <div class="text-danger">{{$errors->first('email')}}</div>
            </div>
            <div class="form-group">
              <label for="website">Website:</label>
              <input type="text" class="form-control" id="website" placeholder="Enter Mobile" name="website" value="{{old('website')}}">
              <div class="text-danger">{{$errors->first('website')}}</div>
            </div>
            <div class="form-group">
              <label for="password">Logo:</label>
              <input type="file" class="form-control" id="logo" name="logo">
              <div class="text-danger">{{$errors->first('logo')}}</div>
            </div>
            <button type="submit" name="submit" class="btn btn-primary">Submit</button>
          </form>
    </div>
</div>     
@endsection                                                              