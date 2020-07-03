$(document).ready(function() {
	// start
	$("#ppos_exit").validate({
		rules: {
			tokens_amount: "required",
			rep_add: "required"
		},
		messages: {
			tokens_amount: "The Tokens WT field is required.",
			rep_add: "The repcipient addresses field is required."
		}
	});
	

});