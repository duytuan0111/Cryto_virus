$(document).ready(function() {
	// start
	$("#page-login").validate({
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