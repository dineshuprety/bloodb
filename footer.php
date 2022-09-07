<footer>
	<div class="footer-designs">
		<ul class="footer-icons">
	       	<li><a href="https://www.facebook.com/"><i class="fa fa-facebook" aria-hidden="true"></i></i></a></li>
	       	<li><a href="https://www.instagram.com/"><i class="fa fa-instagram" aria-hidden="true"></i></i></a></li>
	      	<li><a href="https://twitter.com/"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
	      	<li><a href="https://linkedin.com/"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
	    </ul>
	    <p class='copyright'>Copyright &copy; Blood Stock |  All Rights Reserved.</p>
    </div> 
</footer>
<script src="js/jquery.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/jquery-ui.js"></script>


<script>
	$(function() {

		//body weight validate

		 $("#BODY_WEIGHT").keyup(function(){

		    var _this = $(this)
		    var value = _this.val()
		    if( value < 45 ) {
		    	$("#registernow_btn").attr("disabled",true)
		    	_this.attr("isValid","false")
		    	_this.next(".weight_field").remove()
		        _this.after( '<span class="weight_field" style="color:#CC0017">Invalid Weight! Minimun weight is 45</span>')
		    }else{
		    	_this.next(".weight_field").remove()	
		    	$("#registernow_btn").attr("disabled",false)
		    }
		});  


//dob validate
	$(".DATE").datepicker({ 

dateFormat: "yy-mm-dd",
changeMonth: true,
changeYear: true,
yearRange: '1900:' + new Date("2003").getFullYear()
 }).val();


$(".DATES").datepicker({ 

dateFormat: "yy-mm-dd",
changeMonth: true,
changeYear: true,
yearRange: '1900:' + new Date("").getFullYear()
 }).val();

	});
</script>


