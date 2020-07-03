$(document).ready(function() {
	// start
	$("#form_tokens").validate({
		rules: {
			amount: {
				required: true,
				number: true
			},
			submit_payment: "required"
		},
		messages: {
			amount: {
				required: "The amount tokens field is required.",
				number: "The amount tokens field is not valid"
			},
			submit_payment: "The submit payment proof field is required."
		}
	});
});