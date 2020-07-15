@extends('layout')

@section('content')
<div class="row">
<div class="container">
<h1>Resto List Page</h1>
@if(Session::get('status'))
<div class="alert alert-success alert-dismissible fade show" role="alert">
  <strong>{{ session::get('status') }}</strong>
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>
@endif
<table class="table table-striped table-dark">
    <thead>
        <tr>
            <th>Row</th>
            <th>Name</th>
            <th>Email</th>
            <th>Address</th>
            <th>Created On</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody>
    @foreach($data as $row)
        <tr>
            <td>{{ $row->id }}</td>
            <td>{{ $row->name }}</td>
            <td>{{ $row->email }}</td>
            <td>{{ $row->address }}</td>
            <td>{{ $row->created_at }}</td>
            <td><a href="/delete/{{ $row->id }}" class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></a>
            <a href="/edit/{{ $row->id }}" class="btn btn-info btn-sm"><i class="fa fa-edit"></i></a></td>
        </tr>
    @endforeach          
    </tbody>
</table>
</div>
</div>
@endsection  