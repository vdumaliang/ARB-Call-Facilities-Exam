
<table class="table table-striped table-bordered mt-4">
	<thead class="thead-dark">
		<tr>
			<th>ITEM ID</th>
			<th>ITEM</th>
			<th>CATEGORY</th>
			<th>QUANTITY</th>
			<th>OPTION</th>
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
				<button class="btn btn-danger" onclick="deletePurchase({{$purchase->id}})">Delete</button>
			</th>
		</tr>
		@endforeach
	</tbody>
</table>