@extends('layouts.default')
@section('content')
<div class="container">
    <div class="table-wrapper">
          <div class="table-title">
              <div class="row">
                  <div class="col-sm-5">
          <h2><b>Add Employee</b></h2>
        </div>
        <div class="col-sm-7">
          <a href="{{route('employees.index')}}" class="btn btn-primary"><i class="fa fa-arrow-left" aria-hidden="true"></i><span>Back</span></a>
        </div>
              </div>
          </div>
          <form method="post" action="{{route('employees.store')}}" autocomplete="off" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
              <label for="name">Firstname:</label>
              <input type="text" class="form-control" id="firstname" placeholder="Enter Name" name="firstname" value="{{old('firstname')}}">
              <div class="text-danger">{{$errors->first('firstname')}}</div>
            </div>
            <div class="form-group">
              <label for="name">Lastname:</label>
              <input type="text" class="form-control" id="lastname" placeholder="Enter Name" name="lastname" value="{{old('lastname')}}">
              <div class="text-danger">{{$errors->first('lastname')}}</div>
            </div>
            <div class="form-group">
              <label for="email">Email:</label>
              <input type="text" class="form-control" id="email" placeholder="Enter Email" name="email" value="{{old('email')}}">
              <div class="text-danger">{{$errors->first('email')}}</div>
            </div>
            <div class="form-group">
              <label for="phone">Phone:</label>
              <input type="text" class="form-control" id="phone" placeholder="Enter Mobile" name="phone" value="{{old('phone')}}">
              <div class="text-danger">{{$errors->first('phone')}}</div>
            </div>
            <div class="form-group">
              <label for="password">Comapny:</label>
              <select id="company" name="company" class="form-control @error('company') is-invalid @enderror">
                <option value="">Select company</option>
                @foreach($company as $companys)
                <option value="{{$companys->id}}" {{ old('company')== $companys->id  ? 'selected' : '' }} >{{ $companys->name }}</option>
                @endforeach
            </select>
              <div class="text-danger">{{$errors->first('company')}}</div>
            </div>
            <button type="submit" name="submit" class="btn btn-primary">Submit</button>
          </form>
    </div>
</div>     
@endsection                                                              