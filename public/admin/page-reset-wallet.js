$(document).ready(function() {
	// start
	$("#form_wallet").validate({
		rules: {
			address_tokens: {
				required: true
			}

		},
		messages: {
			address_tokens: {
				required: "The email tokens address is required."
			}
		}
	});
});