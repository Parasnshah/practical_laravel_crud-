@extends('layouts.default')

@section('content')
<div class="container">
    <div class="table-wrapper">
        <div class="table-title">
            <div class="row">
                <div class="card-body">
                    @if (session('success'))
                        <div class="alert alert-success" role="alert">
                            {{ session('success') }}
                        </div>
                    @endif
                </div>
                <div class="col-sm-5">
					<h2><b>Employees</b></h2>
				</div>
				<div class="col-sm-7">
					<a href="{{route('employees.create')}}" class="btn btn-primary"><i class="fa fa-user" aria-hidden="true"></i><span>Add New employee</span></a>					
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
					<th>Phone</th>
                    <th>Company</th>
                    <th>Created at</th>
					<th colspan="3">Action</th>
                </tr>
            </thead>
            <tbody>
                <?php $i = ($data->currentpage()-1)*$data->perpage() + 1;?>
                @if(count($data))
                @foreach($data as $companys)
                <tr>
                    <td>{{$i++}}</td>
                    <td>{{ucfirst($companys->firstname)}}</td>
                    <td>{{ucfirst($companys->lastname)}}</td>              
                    <td><a href="mailto:{{$companys->email}}">{{$companys->email}}</a></td>
                    <td>{{$companys->phone}}</td>
                    <td>{{ucfirst($companys->companies->name)}}</td>
                    <td>{{$companys->created_at->diffForHumans()}}</td>
					<td>
                        <a href="{{route('employees.show', $companys->id)}}"><i class="fa fa-eye"></i></a>
                        <a href="{{route('employees.edit', $companys->id)}}" ><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a>
                        

                        <form action="{{ route('employees.destroy', $companys->id) }}" method="POST" style="display: inline-block;">
                        @csrf
                        @method('DELETE')
                    <a onclick="return confirm('Are you sure?')"  href="{{route('employees.destroy', $companys->id)}}"  >
                        <button type="submit"><i class="fa fa-trash" aria-hidden="true"></i></button>
                    </a>
                    </form>
                    </td>
                </tr>
                @endforeach
                @else
                <tr>
                    <td colspan="10" align="center">No Records Found</td>
                </tr>
                @endif
            </tbody>
        </table>
        @if(count($data))
		<div class="clearfix">
             <div class="hint-text">Showing <b>{{ $data->lastItem() }}</b> out of <b>{{ $data->total() }}</b> entries</div>
                {{$data->links("pagination::bootstrap-4")}}
        </div>
        @endif
    </div>
</div>     
@endsection                              		                            