$(document).ready(function() {
	// start
	$("#exit_news").validate({
		rules: {
			title:{
				required:true
			},
			time: {
				required: true
			}

		},
		messages: {
			title:
			{
				required: "The title field is required."
			},
			time: {
				required: "The time created field is required."
			} 
		}
	});
});
