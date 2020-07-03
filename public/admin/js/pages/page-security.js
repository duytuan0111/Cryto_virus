$(document).ready(function() {
	// start
	$("#form_security").validate({
		rules: {
			old_password: {
				required: true, 
				minlength: 8
			},
			new_password:{
				required: true, 
				minlength: 8
			},
			re_password: {
				required: true,
				minlength: 8,
				equalTo: "#new_password"
			}

		},
		messages: {
			old_password: {
				required: "The old password field is required.",
				minlength: "Please fill out a minimum of 8 characters."
			},
			new_password: {
				required: "The new password field is required.",
				minlength: "Please fill out a minimum of 8 characters."
			},
			re_password: {
				required: "The confirm new password confirm field is required.",
				minlength: "Please fill out a minimum of 8 characters.",
				equalTo: "The new password confirm field does not match."
			} 
		}
	});
});