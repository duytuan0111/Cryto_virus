$(document).ready(function() {
	// start
	$("#form-forgot").validate({
		rules: {
			email: {
				required: true, 
				email: true
			}
		},
		messages: {
			email: {
				required: "The email field is required.",
				email: "The email field is not valid."
			} 
		}
	});
});