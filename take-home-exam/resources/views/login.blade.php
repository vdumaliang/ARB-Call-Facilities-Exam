@extends('layouts')

@section('content')
<form action="login-user" method="post" class="myform">

<h1>Login Page</h1>


@csrf
	<p>Username <input type="text" name="username" class="form-control"></p>
	<p>Password <input type="password" name="password" class="form-control"></p>
	<input type="submit" name="" class="btn btn-lg btn-primary btn-block" value="Login">
	<p class="pt-4">Create count <a href="register">here</a></p>
</form>



@endsection