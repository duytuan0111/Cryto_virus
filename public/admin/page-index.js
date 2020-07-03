$(document).ready(function() {
	// start
	$("#form_contact").validate({
		rules: {
			contact_name: "required",
			contact_address: "required",
			contact_email: {
				required: true,
				email: true
			},
			contact_message: "required"
		},
		messages: {
			contact_address: "The contact address field is required.",
			contact_name: "The contact name field is required.",
			contact_email: {
				required: "The contact email field is required.",
				email: "The contact email is not valid."
			},
			contact_message: "The contact message field is required."
		}
	});
	$("#form-sub").validate({
		rules: {
			contact_email: {
				required: true,
				email: true
			}
		},
		messages: {
			contact_email: {
				required: "The contact email field is required.",
				email: "The contact email is not valid."
			}
		}
	});
});