$(document).ready(function() {
	// start
	$("#admin_form_login").validate({
		rules: {
			username: "required",
			password: "required"
		},
		messages: {
			username: "The username field is required.",
			password: "The password field is required."
		}
	});
});