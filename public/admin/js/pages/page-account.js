$(document).ready(function() {
	// start
	$("#form_account").validate({
		rules: {
			firstname: {
				required: true
			},

			lastname: {
				required: true
			},
			email: {
				required: true, 
				email: true
			},
			phone:{
				required: true,
				minlength: 8,
				maxlength: 13,
				digits: true
			}

		},
		messages: {
			firstname: {
				required: "The firstname field is required."
			},
			lastname: {
				required: "The lastname field is required."
			},
			email: {
				required: "The email field is required.",
				email: "The email field is not valid."
			},
			phone:{
				required: "The phone number field is required.",
				minlength: "Please fill out a minimum of 8 characters.",
				maxlength: "The phone number field can not be more than 13 characters.",
				digits: "Please enter the phone number format correctly."
			}
		}
	});
	$("#form_wallet").validate({
		rules: {
			token_address: {
				required: true
			}
			

		},
		messages: {
			token_address: {
				required: "The tokens address field is required."
			}
		}
		
	});
});