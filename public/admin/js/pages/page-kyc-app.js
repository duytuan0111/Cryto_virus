$(document).ready(function() {
	// start
	$("#form-kyc").validate({
		rules: {
			first_name: {
				required: true
			}, 
			last_name: {
				required: true
			},
			email_address: {
				required : true,
				email: true
			},
			phone_number: {
				required: true,
				minlength: 8,
				maxlength: 13,
				digits: true
			},
			date_of_birth: {
				required: true
			},
			address_line_1: {
				required: true
			},
			email_address: {
				required: true,
			},
			city:{
				required: true
			},
			zip_code: {
				required: true
			},
			token_address: {
				required: true
			},
			fontside_img: {
				required: true,
				extension: "jpg|jpeg|png"
			},
			backside_img: {
				required: true,
				extension: "jpg|jpeg|png"
			},
			selfife_img: {
				required: true,
				extension: "jpg|jpeg|png"
			}
		},
		messages: {
			first_name: {
				required: "The first name field is required."
			},
			last_name: {
				required: "The last name field is required."
			},
			email_address: {
				required: "The email address field is required.",
				email: "The email field is not valid."
			},
			phone_number:{
				required: "The phone number field is required.",
				minlength: "Please fill out a minimum of 8 characters.",
				maxlength: "The phone number field can not be more than 13 characters.",
				digits: "Please enter the phone number format correctly."
			},
			date_of_birth: {
				required: "The date of birth field is required."
			},
			address_line_1: {
				required: "The address line 1 field is required."
			},
			city: {
				required: "The city field is required."
			},
			zip_code: {
				required: "The zip code field is required."
			},
			token_address: {
				required: "The address token field is required."
			},
			fontside_img:{
				required: "The fontside image field is required.",
				extension: "Please upload file in these format only (jpg, jpeg, png)."
			},
			backside_img:{
				required: "The fontside image field is required.",
				extension: "Please upload file in these format only (jpg, jpeg, png)."
			},
			selfife_img:{
				required: "The fontside image field is required.",
				extension: "Please upload file in these format only (jpg, jpeg, png)."
			}

		}
	});

});

function checkForm(form)
{
	if(!form.info_currect.checked) {
		alert("Please indicate that all the personal information you have entered is correct.");
		form.info_currect.focus();
		return false;
	}
	return true;
}
function checkRadio(name)
{
	if (name == "a_passport") 
	{
		document.getElementById("kyc_type_pass").checked 	= true;
		document.getElementById("kyc_type_nal").checked		= false;
	}
	else if (name == "a_national_card") 
	{
		document.getElementById("kyc_type_pass").checked	= false;
		document.getElementById("kyc_type_nal").checked		= true;
	}
}