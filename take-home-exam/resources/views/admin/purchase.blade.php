
<table class="table table-striped table-bordered mt-4">
	<thead class="thead-dark">
		<tr>
			<th>ITEM ID</th>
			<th>ITEM</th>
			<th>CATEGORY</th>
			<th>QUANTITY</th>
			<th>CUSTOMER</th>
		</tr>
	</thead>

	<tbody>
		@foreach($purchases as $purchase)
			<tr>
				<td>{{$purchase->id}}</td>
				<td>{{$purchase->item}}</td>
				<td>{{$purchase->category}}</td>
				<td>{{$purchase->quantity}}</td>
				<th>
					@foreach($users as $user)
						@if($purchase->customer_id == $user->id)
						{{$user->name}}
						@endif
					@endforeach
				</th>
			</tr>
			
		@endforeach
	</tbody>
</table>