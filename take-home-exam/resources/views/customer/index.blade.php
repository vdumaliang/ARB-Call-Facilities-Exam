@extends('layouts')

@section('content')

<div class="container" id="mycontent">
	<a id="logout-link" href="userLogout">logout</a>
	<h1>Welcome <?php echo  Auth::user()->name; ?> </h1>
	<hr>
	<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#orderItemModal">
  	Order Item</button>

  	<div id="purchase"></div>
</div>

@include('modal')
@endsection

