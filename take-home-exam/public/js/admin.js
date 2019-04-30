$(function(){
	adminPurchaseList()
	$('#category').on('change',function(){
		adminPurchaseCategory($(this).val())
	})
})


function adminPurchaseList(){
	$.ajax({
		url:'admin-purchase',
		type:'get',
		success: function(data){
			$('#admin').html(data)
			//console.log(data)
		}
	})
}

function adminPurchaseCategory(category){
	const data = ["category",category]
	//console.log(data)
	$.ajax({
		url:'admin-category/'+category,
		type:'get',
		success: function(data){
			$('#admin').html(data)
			//console.log(data)
		}
	})
}