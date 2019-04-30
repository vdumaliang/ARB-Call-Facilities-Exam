$(function(){
	purchaseList()
	$('#addPurchase').on('submit',function(e){
		e.preventDefault();
		addPurchase($('#addPurchase').serialize())
	})

})


function purchaseList(){
	$.ajax({
		url:'purchase',
		type:'get',
		success: function(data){
			$('#purchase').html(data)
			//console.log(data)
		}
	})
}

function addPurchase(data){
	$.ajax({
		url:'purchase',
		type:'post',
		data:data,
		success: function(data){
			console.log(data)
			purchaseList()
			$('#addPurchase #item,#addPurchase #quantity').val("")
		}
	})
}

function deletePurchase(id){

	$('#deletePurchaseModal .modal-body').html('<p>Are you sure you want to delete the item #'+id+'</p>')
	$('#deletePurchaseModal').modal('show')

	$('#deletePurhcase').on('submit',function(e){
		e.preventDefault();

		$.ajax({
			url:'purchase/'+id,
			type:'delete',
			data:$('#deletePurhcase').serialize(),
			success: function(data){
				if(data == 1){
					purchaseList()
					$('#deletePurchaseModal').modal('hide')
				}
			}
		})
	})

	
}

