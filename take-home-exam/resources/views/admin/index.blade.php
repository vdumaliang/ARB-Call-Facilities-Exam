@extends('layouts')

@section('content')

<div class="container" id="mycontent">
	<a id="logout-link" href="userLogout">logout</a>
	<h1>Welcome <?php echo  Auth::user()->name; ?> </h1>
	<hr>
	 <select id="category" class="form-control" name="category" style="width: 300px;">
	 		<option>SELECT CATEGORY</option>
            <option>School Supply</option>
            <option>Shoes</option>
            <option>Shirt</option>
            <option>Jeans</option>
      </select>
  	<div id="admin"></div>
</div>

@include('modal')


@endsection

