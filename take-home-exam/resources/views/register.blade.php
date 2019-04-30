@extends('layouts')

@section('content')
<form action="register-user" method="post" class="myform">
<h1>Register Page</h1>
@csrf
	<p>Name <input type="text" name="name" class="form-control"></p>
	<p>Username <input type="text" name="username" class="form-control"></p>
	<p>Password <input type="password" name="password" class="form-control"></p>
	<input type="submit" class="btn btn-lg btn-primary btn-block" name="" value="Register">
	<p class="pt-4">Login your count <a href="login">here</a></p>
</form>

@endsection