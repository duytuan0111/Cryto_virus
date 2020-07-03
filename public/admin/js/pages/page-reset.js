$(document).ready(function() {
	// start
	$("#page-reset").validate({
		rules: {
			password: {
				required: true, 
				minlength: 8
			},
			password_confirm: {
				required: true,
				minlength: 8,
				equalTo: "#password"
			}

		},
		messages: {
			password: {
				required: "The password field is required.",
				minlength: "Please fill out a minimum of 8 characters."
			},
			password_confirm: {
				required: "The password confirm field is required.",
				minlength: "Please fill out a minimum of 8 characters.",
				equalTo: "The password confirm field does not match."
			} 
		}
	});
});