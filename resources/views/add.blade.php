@extends('layout')

@section('content')

<div class="container">
<h1>Add Resto Page</h1>
<div class="col-md-6">
<form method="POST" action="">
@csrf
<div class="form-group">
    <label for="exampleInputPassword1">Restaurant Name:</label>
    <input type="text" name="name" class="form-control"  placeholder="Enter Restaurant Name">
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Email address:</label>
    <input type="text" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
    <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
  </div> 
  <div class="form-group">
    <label for="exampleInputPassword1">Address:</label>
    <input type="text" name="address" class="form-control"  placeholder="Enter Address">
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
</div>
</div>
@endsection  