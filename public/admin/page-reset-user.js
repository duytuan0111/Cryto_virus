$(document).ready(function() {
	// start
	$("#form_user").validate({
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
				required: "The confirm password field is required.",
				minlength: "Please fill out a minimum of 8 characters.",
				equalTo : "The password confirm field does not match."
			}
		}
	});
});