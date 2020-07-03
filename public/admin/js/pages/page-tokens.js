$(document).ready(function() {
	// start
	$("#form_tokens").validate({
		rules: {
			paymentGet: {
				required: true, 
				number: true
			},
			payment_proof: {
				required: true
			}
		},
		messages: {
			paymentGet: {
				required: "The tokens to purchace field is required.",
				number: "The tokens to purchace field is not valid."
			},
			payment_proof:{
				required: "The submit payment proof field is required."
			}
		}
	});
});
function submit_eth()
{
	document.getElementById("form_tokens").submit();

}

function click_checked()
{
		document.getElementById("payeth").checked = true;
		// document.getElementById("paylightcoin").checked = false;
		document.getElementById("paybtc").checked = false;
		document.getElementById("payusd").checked = false;

}
function check_tokens()
{
	var paymentGet 		= document.getElementById("paymentGet").value;
	var payment_proof	= document.getElementById("payment_proof").value;
	var checked_1 		= document.getElementById("payeth").checked;
	// var checked_2		= document.getElementById("paylightcoin").checked;
	var checked_3		= document.getElementById("paybtc").checked;
	if ((paymentGet == 0) || (payment_proof == 0))  
	{
		window.alert("Please enter the number of tokens you want to buy and your submit payment proof.");
		$("#tranxETH").modal("hide");
		$("#tranxLTC").modal("hide");
		$("#tranxBTC").modal("hide");
		$("#tranxUSD").modal("hide");


	}
	else if (isNaN(paymentGet)) {
		window.alert("The tokens to purchace field is not valid.");
		$("#tranxETH").modal("hide");
		$("#tranxLTC").modal("hide");
		$("#tranxBTC").modal("hide");
		$("#tranxUSD").modal("hide");

	}
	else
	{
		if (checked_1 = true) 
		{
			$("#tranxETH").modal("hide");
			$("#tranxLTC").modal("hide");
			$("#tranxBTC").modal("hide");
			$("#tranxUSD").modal("hide");
			console.log("eth");
		}
		// else if (checked_2 = true) 
		// {
		// 	$("#tranxLTC").modal("show");
		// 	$("#tranxETH").modal("hide");
		// 	console.log("lte");
		// }
		else if (checked_3 = true) 
		{
			$("#tranxBTC").modal("show");
			console.log("btc");
		}
	}
	
	
}

jQuery(document).ready(function($) {
	$("#payment_proof_").change(function(event) {
		var payment_proof_ = document.getElementById("payment_proof_").value;
		var payment_proof  = document.getElementById("payment_proof").value = payment_proof_;
	});
	$("#payment_proof_1").change(function(event) {
		var payment_proof_1 = document.getElementById("payment_proof_1").value;
		var payment_proof  = document.getElementById("payment_proof").value = payment_proof_1;
	});
	$("#payment_proof_2").change(function(event) {
		var payment_proof_2 = document.getElementById("payment_proof_2").value;
		var payment_proof  = document.getElementById("payment_proof").value = payment_proof_2;
	});

	
	if (document.getElementById("payeth").checked = true) 
	{
		$("#payeth").click(function(event) {
			document.getElementById("paymentGet").value								= 1;
			document.getElementById("paymentFrom").value							= 0.1;
			document.getElementById("final_payment").innerHTML						= 0.1;
		});
		$("#paymentGet").change(function(event) {
			var paymentGet 		= document.getElementById("paymentGet").value;
			var paymentFrom		= document.getElementById("paymentFrom").value 		= paymentGet*0.1;
			var final_payment	= document.getElementById("final_payment").value 	= paymentFrom;
			document.getElementById("final_payment").innerHTML 						= paymentFrom;
			var bonus 			= document.getElementById("bonus").value 			= paymentGet*40/100;
			document.getElementById("bonus").innerHTML 								= bonus;
			var total 			= Number(paymentGet) + Number(bonus);
			document.getElementById("received_total").value						 	= total;
			document.getElementById("received_total").innerHTML 					= total;
			document.getElementById("tranxETH_tokens").innerHTML					= total;	
			document.getElementById("tranxETH_bonus").innerHTML						= bonus;

		});
		$("#paymentFrom").change(function(event) {
			var paymentFrom		= document.getElementById("paymentFrom").value;
			var paymentGet 		= document.getElementById("paymentGet").value  = paymentFrom/0.1;
			var final_payment	= document.getElementById("final_payment").value 	= paymentFrom;
			document.getElementById("final_payment").innerHTML 						= paymentFrom;
			var bonus 			= document.getElementById("bonus").value 			= paymentGet*40/100;
			document.getElementById("bonus").innerHTML 								= bonus;
			var total 			= Number(paymentGet) + Number(bonus);
			document.getElementById("received_total").value						 	= total;
			document.getElementById("received_total").innerHTML 					= total;
			document.getElementById("tranxETH_tokens").innerHTML					= total;	
			document.getElementById("tranxETH_bonus").innerHTML						= bonus;
		});
			

	}
	
});
function convert_paylightcoin()
{
	document.getElementById("paymentGet").value								= 1;
	document.getElementById("paymentFrom").value							= 0.1;
	document.getElementById("final_payment").innerHTML						= 0.1;
	document.getElementById("payeth").checked = false;
	// document.getElementById("paylightcoin").checked = true;
	document.getElementById("paybtc").checked = false;
	document.getElementById("payusd").checked = false;
	$("#paymentGet").change(function(event) {
		var paymentGet 		= document.getElementById("paymentGet").value;
		var paymentFrom		= document.getElementById("paymentFrom").value 		= paymentGet*0.1;
		var final_payment	= document.getElementById("final_payment").value 	= paymentFrom;
		document.getElementById("final_payment").innerHTML 						= paymentFrom;
		var bonus 			= document.getElementById("bonus").value 			= paymentGet*40/100;
		document.getElementById("bonus").innerHTML 								= bonus;
		var total 			= Number(paymentGet) + Number(bonus);
		document.getElementById("received_total").value						 	= total;
		document.getElementById("received_total").innerHTML 					= total;
		document.getElementById("ltc_tokens").innerHTML							= total;	
		document.getElementById("ltc_bonus").innerHTML							= bonus;

	});
	$("#paymentFrom").change(function(event) {
		var paymentFrom		= document.getElementById("paymentFrom").value;
		var paymentGet 		= document.getElementById("paymentGet").value 		= paymentFrom/0.1;
		var final_payment	= document.getElementById("final_payment").value 	= paymentFrom;
		document.getElementById("final_payment").innerHTML 						= paymentFrom;
		var bonus 			= document.getElementById("bonus").value 			= paymentGet*40/100;
		document.getElementById("bonus").innerHTML 								= bonus;
		var total 			= Number(paymentGet) + Number(bonus);
		document.getElementById("received_total").value						 	= total;
		document.getElementById("received_total").innerHTML 					= total;
		document.getElementById("ltc_tokens").innerHTML							= total;	
		document.getElementById("ltc_bonus").innerHTML							= bonus;
	});
	
}

function convert_paybtc()
{
	document.getElementById("paymentGet").value								= 1;
	document.getElementById("paymentFrom").value							= 0.1;
	document.getElementById("final_payment").innerHTML						= 0.1;
	document.getElementById("payeth").checked = false;
	// document.getElementById("paylightcoin").checked = false;
	document.getElementById("paybtc").checked = true;
	document.getElementById("payusd").checked = false;
	$("#paymentGet").change(function(event) {
		var paymentGet 		= document.getElementById("paymentGet").value;
		var paymentFrom		= document.getElementById("paymentFrom").value 		= paymentGet*0.1;
		var final_payment	= document.getElementById("final_payment").value 	= paymentFrom;
		document.getElementById("final_payment").innerHTML 						= paymentFrom;
		var bonus 			= document.getElementById("bonus").value 			= paymentGet*40/100;
		document.getElementById("bonus").innerHTML 								= bonus;
		var total 			= Number(paymentGet) + Number(bonus);
		document.getElementById("received_total").value						 	= total;
		document.getElementById("received_total").innerHTML 					= total;
		document.getElementById("btc_tokens").innerHTML					= total;	
		document.getElementById("btc_bonus").innerHTML						= bonus;

	});
	$("#paymentFrom").change(function(event) {
		var paymentFrom		= document.getElementById("paymentFrom").value;
		var paymentGet 		= document.getElementById("paymentGet").value 		= paymentFrom/0.1;
		var final_payment	= document.getElementById("final_payment").value 	= paymentFrom;
		document.getElementById("final_payment").innerHTML 						= paymentFrom;
		var bonus 			= document.getElementById("bonus").value 			= paymentGet*40/100;
		document.getElementById("bonus").innerHTML 								= bonus;
		var total 			= Number(paymentGet) + Number(bonus);
		document.getElementById("received_total").value						 	= total;
		document.getElementById("received_total").innerHTML 					= total;
		document.getElementById("btc_tokens").innerHTML							= total;
		document.getElementById("btc_bonus").innerHTML							= bonus;
	});
}
function convert_payusdt()
{
	document.getElementById("paymentGet").value								= 1;
	document.getElementById("paymentFrom").value							= 0.1;
	document.getElementById("final_payment").innerHTML						= 0.1;
	document.getElementById("payeth").checked = false;
	// document.getElementById("paylightcoin").checked = false;
	document.getElementById("paybtc").checked = false;
	document.getElementById("payusd").checked = true;
	$("#paymentGet").change(function(event) {
		var paymentGet 		= document.getElementById("paymentGet").value;
		var paymentFrom		= document.getElementById("paymentFrom").value 		= paymentGet*0.1;
		var final_payment	= document.getElementById("final_payment").value 	= paymentFrom;
		document.getElementById("final_payment").innerHTML 						= paymentFrom;
		var bonus 			= document.getElementById("bonus").value 			= paymentGet*40/100;
		document.getElementById("bonus").innerHTML 								= bonus;
		var total 			= Number(paymentGet) + Number(bonus);
		document.getElementById("received_total").value						 	= total;
		document.getElementById("received_total").innerHTML 					= total;
		document.getElementById("usd_tokens").innerHTML							= total;	
		document.getElementById("usd_bonus").innerHTML							= bonus;

	});
	$("#paymentFrom").change(function(event) {
		var paymentFrom		= document.getElementById("paymentFrom").value;
		var paymentGet 		= document.getElementById("paymentGet").value 		= paymentFrom/0.1;
		var final_payment	= document.getElementById("final_payment").value 	= paymentFrom;
		document.getElementById("final_payment").innerHTML 						= paymentFrom;
		var bonus 			= document.getElementById("bonus").value 			= paymentGet*40/100;
		document.getElementById("bonus").innerHTML 								= bonus;
		var total 			= Number(paymentGet) + Number(bonus);
		document.getElementById("received_total").value						 	= total;
		document.getElementById("received_total").innerHTML 					= total;
		document.getElementById("usd_tokens").innerHTML							= total;
		document.getElementById("usd_bonus").innerHTML							= bonus;
	});
}

