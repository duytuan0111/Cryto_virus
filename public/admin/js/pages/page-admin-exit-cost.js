$(document).ready(function() {
	// start
	$("#form_cost").validate({
		rules: {
			current_price:{
				required:true
			},
			time: {
				required: true
			},


		},
		messages: {
			current_price:
			{
				required: "The current price is required."
			},
			time: {
				required: "The time field is required."
			},
		}
	});
});
