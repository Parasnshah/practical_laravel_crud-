@extends('layouts.default')
@section('content')
<div class="container">
    <div class="table-wrapper">
        <div class="table-title">
            <div class="row">
                <div class="col-sm-5">
                    <h2><b>{{ucfirst($data->firstname)}} {{($data->lastname)}}</b></h2>
                </div>
                
            </div>
        </div>
        <table class="table table-striped table-hover">
            <thead>
                <tr>
                    <th>Id</th>
                    <th>Firstname</th>
                    <th>Lastname</th> 
                    <th>Email</th>                       
                    <th>phone</th>
                    <th>Company</th>
                    <th>Created at</th>
                    <th colspan="3">Action</th>
                </tr>
            </thead>
            <tbody>
               
                <tr>
                    <td>{{$data->id}}</td>
                    <td>{{ucfirst($data->firstname)}}</td>
                    <td>{{ucfirst($data->lastname)}}</td>              
                    <td><a href="mailto:{{$data->email}}">{{$data->email}}</a></td>
                    <td>{{$data->phone}}</td>
                    <td>{{ucfirst($data->companies->name)}}</td>
                    
                    <td>{{$data->created_at->diffForHumans()}}</td>
                    <td><a href="{{route('employees.index')}}" class="btn btn-info">Back</a></td>
                    
                </tr>
            </tbody>
        </table>
    </div>
</div>     
@endsection                                                                 