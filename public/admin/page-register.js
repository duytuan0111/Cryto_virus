$(document).ready(function() {
	// start
	$("#page-register").validate({
		rules: {
			email: {
				required: true, 
				email: true
			},
			username: "required",
			password: {
				required: true,
				minlength: 8
			},
			password_confirm: {
				required: true,
				minlength: 8,
				equalTo: "#password"
			},
			ref_code:{
				required: true
			}

		},
		messages: {
			email: {
				required: "The email field is required.",
				email: "The email field is not valid."
			},
			username: "The username field is required.",
			password: {
				required: "The password field is required.",
				minlength: "Please fill out a minimum of 8 characters."
			},
			password_confirm: {
				required: "The confirm password field is required.",
				minlength: "Please fill out a minimum of 8 characters.",
				equalTo : "The password confirm field does not match."
			},
			ref_code: {
				required: "The referral code field is required."
			}
		}
	});
});