@extends('layout')

@section('content')
<h1>Register New User</h1>
<form method="POST" action="register">
@csrf
<div class="col-md-10">
<div class="form-group">
    <label for="exampleInputPassword1">Full Name:</label>
    <input type="text" name="name" class="form-control"  placeholder="Enter Full Name">
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Email address:</label>
    <input type="text" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
    <small id="emailHelp" class="form-text text-muted ">We'll never share your email with anyone else.</small>
  </div> 
  <div class="form-group">
    <label for="exampleInputPassword1">Password:</label>
    <input type="password" name="password" class="form-control"  placeholder="Enter Password" />
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Contact:</label>
    <input type="tel" name="contact" class="form-control"  placeholder="Enter Contact Number" />
  </div>
  <button type="submit" class="btn btn-primary"><span class="fa fa-save"></span> Register</button>
  </div>
</form>
@endsection  