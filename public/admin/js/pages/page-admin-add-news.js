$(document).ready(function() {
	// start
	$("#add_news").validate({
		rules: {
			title:{
				required:true
			},
			time: {
				required: true
			},
			author: {
				required: true
			},
			description: {
				required: true
			},
			img_url: {
				required: true
			},
			new_url: {
				required: true
			},


		},
		messages: {
			title:
			{
				required: "The title field is required."
			},
			time: {
				required: "The time field is required."
			},
			author: {
				required: "The author field is required."
			},
			description: {
				required: "The description field is required."
			}, 
			img_url: {
				required: "The image url field is required."
			},
			new_url: {
				required: "The new url field is required."
			}
		}
	});
});
