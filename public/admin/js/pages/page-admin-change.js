$(document).ready(function() {
	// start
	$("#admin_change").validate({
		rules: {
			old_password:{
				required:true
			},
			new_password: {
				required: true, 
				minlength: 8
			},
			password_confirm: {
				required: true,
				minlength: 8,
				equalTo: "#new_password"
			}

		},
		messages: {
			old_password:
			{
				required: "The old password is required."
			},
			new_password: {
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
