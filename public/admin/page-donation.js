$(document).ready(function() {
	// start
	$("#form_donation").validate({
		rules: {
			amount: {
				required: true,
				number: true
			},
			fullname: "required",
			email: {
				required: true,
				email: true
			}
		},
		messages: {
			amount: {
				required: "The amount tokens field is required.",
				number: "The amount tokens field is not valid"
			},
			fullname: "The Full Name field is required.",
			email: {
				required: "The email field is required.",
				email: "The email field is not valid."
			}
		}
	});
});