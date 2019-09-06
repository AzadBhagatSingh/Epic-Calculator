<div class="container_inner_section">
<div class="whitesection">
	
<div class="section_inner_middle">
	<p class="newcalci subheading paddingtop1em" style="font-weight: bold;">401(k) Calculator</p>
<p class="newcalci subheading paddingtop1em">See How Professional Help May Improve Your Retirement Future</p>
<div class="calculate">
	<form id="frmCompoundCalculator" action="javascript:void(0)">
		<p class="calculate_text_heading_new ">Enter 401(k) Account Balance : </p>
		<input type="text" class="calculate_input_box_new doller_img" name="pricipal" id="pricipal" required >
		<p class="calculate_text_heading_new ">Enter Interest Rate (%):</p>
		<input type="text" class="calculate_input_box_new " name="rate" id="rate" required >
		<p class="calculate_text_heading_new ">Enter Years to Retirement: </p>
		<input type="text" class="calculate_input_box_new" name="time" id="time" required >
		<div class="calculate_inner">
		<div class="calculate_center">
		<button class="calculate_button text-center" id="btnCompoundRetirement" style="padding: 17px 34px; !important">CALCULATE </button>
		</div>
		</div>
	</form>
</div>
	<div class="clear"></div>
</div>

<div class="newcal1">

<div class="section_inner_middle">

<div class="estimateoptions ">

<div class="estimateleft">
<p>Your Estimated Account Balance: </p>
</div>
<div class="estimateright">
	<p id="resultCompound"><strong> $0 </strong> </p>
</div>
<div class="clear"></div>

<div class="estimateleft">
<p>Your Estimated Account Balance with
Professional Help </p>
</div>
<div class="estimateright">
<p id="resultCompoundNew"><strong> $0 </strong></p>
</div>
<div class="clear"></div>


<!-- <div class="estimateleft">
<p>Do You See the Potential of 3% More?</p>
</div> -->
<!-- <div class="estimateright">
<p id="resultCompoundDiff">$560,441.08</p>
</div> -->
<!-- <div class="clear"></div> -->

 <div class="estimateleft">
 <p>Do You See the Potential of 3% More?
<br><strong style="color:#00573d !important;">Would this difference improve your retirement?</strong></p>
 </div>
<div class="estimateright">
	<p><span style="color:#00573d !important;" id="resultCompoundDiff"><strong style="color:#00573d; font-size:18px !important"> $0 </strong></span></p>
</div>
<div class="clear"></div>

<div class="estimateleft">
<p>Your Estimated Monthly 401(k) Maneuver Cost:	</p>
</div>
<div class="estimateright">
	<p id="monthlyCost"><strong>$0 </strong></p>
</div>
<div class="clear"></div>
</div>
</div>
</div>
<div class="clear"></div>
<p class="newcalci subheading1 paddingbottom1em text-greenish">The calculations above do not include your future salary deferrals and employer <br> contributions. With these added, the difference with professional help could be much, much larger!
<br>The monthly charge is adjusted quaterly based on your quater end account balance.</p>
<div class="newcalcitwo">
<div class="section_inner_middle">
	<p class="newcalhead text-center text-greenish"><strong style="color:#00573d !important;"><i>“Retirement is a once in a lifetime event.<br> You better get it right.”</i></strong></p>
<p class=" text-center nomargin-bottom ">Robert Shiller - Nobel Prize Winner, Yale University    </p>
<p class=" text-center nomargin-top ">Economics Professor</p>
		<div class="calculate_center paddingbottom2em">
		<button class="calculate_button text-center " id="btnCompoundRetirement">Enroll Today </button>
		</div>
</div>
	</div>	
</div>

<div class="clear"></div>

<script src="https://code.jquery.com/jquery-1.11.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/jquery.validation/1.16.0/jquery.validate.min.js"></script>
<script src="https://cdn.jsdelivr.net/jquery.validation/1.16.0/additional-methods.min.js"></script>
<script>
// just for the demos, avoids form submit
jQuery.validator.setDefaults({
  debug: true,
  success: "valid"
});
$( "#frmCompoundCalculator" ).validate({
  rules: {
    pricipal: {
      required: true,
      number: true
    },
	rate: {
      required: true,
      number: true
    },
	time: {
      required: true,
      number: true
    }
  }
});
</script>