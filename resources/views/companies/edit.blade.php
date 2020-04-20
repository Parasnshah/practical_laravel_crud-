@extends('layouts.default')
@section('content')
<div class="container">
    <div class="table-wrapper">
          <div class="table-title">
              <div class="row">
                  <div class="col-sm-5">
          <h2><b>Edit Company</b></h2>
        </div>
        <div class="col-sm-7">
          <a href="{{route('companies.index')}}" class="btn btn-primary"><i class="fa fa-arrow-left" aria-hidden="true"></i><span>Back</span></a>
        </div>
              </div>
          </div>
          <form method="post" action="{{route('companies.update',$data->id)}}" autocomplete="off" enctype="multipart/form-data">
          @method('PUT')
          @csrf
          <div class="form-group">
            <label for="name">Name:</label>
            <input type="text" class="form-control" id="name" placeholder="Enter Name" name="name" value="{{$data->name}}">
            <div class="text-danger">{{$errors->first('name')}}</div>
          </div>
          <div class="form-group">
            <label for="email">Email:</label>
            <input type="text" class="form-control" id="email" placeholder="Enter Email" name="email"  value="{{$data->email}}">
            <div class="text-danger">{{$errors->first('email')}}</div>
          </div>
          <div class="form-group">
            <label for="mobile">Website:</label>
            <input type="text" class="form-control" id="website" placeholder="Enter Website" name="website" value="{{$data->website}}">
            <div class="text-danger">{{$errors->first('website')}}</div>
          </div>
          <div class="form-group">
            <label for="password">Image:</label>
            <input type="file" class="form-control" id="logo" name="logo">
            <a href="javascript:void(0)">
              <img src="{{ asset('storage/'.$data->logo) }}" class="avatar" alt="Avatar" width=60px>
            </a>
            <div class="text-danger">{{$errors->first('logo')}}</div>
          </div>
          <button type="submit" name="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
</div>     
@endsection                                                            