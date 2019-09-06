//Home page for Credit Card Charges
jQuery(document).on("click", "#calculate", function(){
//  alert("yippie");
	var account_value;
	var fee_per;
	var annual_value;
	var monthly_value;
	account_value = Number( jQuery('#account_value').val() );
	if(account_value != ''){
		// console.log(account_value);
		if(account_value > 1 && account_value < 100001){
			fee_per = .01;
		}else if (account_value > 100000 && account_value < 250001) {
			fee_per = .0085;
		}else if (account_value > 250000 && account_value < 500001) {
			fee_per = .0075;
		}else if (account_value > 500000 && account_value < 1000001) {
			fee_per = .006;
		}else{
			fee_per = .005;
		}
		annual_value = account_value * fee_per;
		// console.log(annual_value);
		monthly_value = annual_value / 12;
		// console.log(monthly_value.toFixed(2) + " per month");
		var x=monthly_value.toFixed(2);
		var res= x.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ",");
		console.log(res);
		if( res<10 ){res = '10.00';}
		var cc_charges = "<p>Your Estimated Monthly Cost: <span class='caculate_result_digit'>"+res+"</span></p>";
		jQuery('#result').html( cc_charges );
	}
});


//All in one calculator
jQuery(function(){
	jQuery("#btnCompoundRetirement").click(function(){
		principal = jQuery('#pricipal').val();
		console.log(principal);
        n = 1; //document.getElementById("n").value; // no. of compoundings per year
        time = jQuery('#time').val(); // no. of years
        rate = Number( jQuery('#rate').val() );
		console.log(rate);
		if( principal!='' && time!='' && rate !='' ){
			result = document.getElementById("resultCompound");

			// The equation is Amount = principal * [[1 + (rate/n)] ^ ntim	e]
			Amount = (principal* Math.pow((1 + (rate/(n*100))), (n*time)));

			// toFixed is used for rounding the amount with two decimal places.
			var x=Amount.toFixed(2);
			var res= x.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ",");

			// toFixed is used for rounding the amount with two decimal places.
			// result.innerHTML = "<p>Estimated Account Balance: <span class='caculate_result_digit'>$" + res + "</span></p>";
			result.innerHTML = '$'+res;
			jQuery('#pricipal_new').val(jQuery('#pricipal').val());

			// result.innerHTML += "<br> The interest is " + (Amount.toFixed(2) - principal).toFixed(2);


			//New code added for new retiremnet calculator.
			resultNew = document.getElementById("resultCompoundNew");
			result_diff = document.getElementById("resultCompoundDiff");
			var pricipal_new = principal;
			var rate = jQuery('#rate').val();
			var time = jQuery('#time').val(); // no. of years
			rate = parseInt(rate) + 3.0;
			var new_amount;
			//alert(pricipal_new+ " "+ rate + " "+time);
			new_amount = (pricipal_new* Math.pow((1 + (rate/(n*100))), (n*time)));
			//new_amount = pricipal_new * rate * time;
			console.log(new_amount-Amount);
			var diff_amount = new_amount-Amount;
			var z=diff_amount.toFixed(2);
			var res_diff= z.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ",");

			var y=new_amount.toFixed(2);
			var res_new= y.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ",");

		    // toFixed is used for rounding the amount with two decimal places.
		    resultNew.innerHTML = '$'+res_new;
			result_diff.innerHTML = '$'+res_diff;
			console.log(res_diff);
			//subtotal = document.getElementById("inf_custom_Subtotal");
			//alert(subtotal);
			jQuery('#inf_custom_Subtotal').val(new_amount.toFixed(2));


			//Estimate monthly cost.
			var quater_value;
			var fee_per;
			var annual_value;
			var monthly_value;
			account_value = principal;
			if(account_value != ''){
				// console.log(account_value);
				if(account_value > 1 && account_value < 200001){
					fee_per = .0025;
				}else if (account_value > 200000 && account_value < 500001) {
					fee_per = .0020;
				}else{
					fee_per = .0015;
				}
			quater_value = account_value * fee_per;
			// console.log(annual_value);
			monthly_value = quater_value / 3.0;
			// console.log(monthly_value.toFixed(2) + " per month");
			var x=monthly_value.toFixed(2);
			var res= x.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ",");
			console.log(res);
			if( res<10 ){res = '10.00';}
			var cc_charges = '$'+res;
			jQuery('#monthlyCost').html( cc_charges );
		}
	}
});


	
	//Extra 3% calculation
	jQuery("#btnCalculateNew").click(function(){
		// alert(jQuery('#pricipal_new').val());
		result = document.getElementById("resultCompoundNew");
		result_diff = document.getElementById("resultCompoundDiff");
		var pricipal_new = jQuery('#pricipal_new').val();
		var rate = jQuery('#rate').val();
		var time = jQuery('#time').val(); // no. of years
		rate = parseInt(rate) + 3.0;
		var new_amount;
		//alert(pricipal_new+ " "+ rate + " "+time);
		new_amount = (pricipal_new* Math.pow((1 + (rate/(n*100))), (n*time)));
		//new_amount = pricipal_new * rate * time;
		console.log(new_amount-Amount);
		var diff_amount = new_amount-Amount;
		var z=diff_amount.toFixed(2);
		var res_diff= z.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ",");

		var y=new_amount.toFixed(2);
		var res_new= y.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ",");

	    // toFixed is used for rounding the amount with two decimal places.
	    result.innerHTML = "<p>Estimated Account Balance: <span class='caculate_result_digit'>$" + res_new + "</span></p>";
		result_diff.innerHTML = "<p><span class='caculate_result_digit'  id=''>$" + res_diff + "</span></p>";
		//subtotal = document.getElementById("inf_custom_Subtotal");
		//alert(subtotal);
		jQuery('#inf_custom_Subtotal').val(new_amount.toFixed(2));
	});
});