// JavaScript Document

$(document).ready(function() {

$(document).on('submit', "#signup_Form", function(e){
e.preventDefault();
//$('div#ack').show();
	
$('#signup-btn').hide();
$("div#loading").show();
var formData = new FormData(this);

$.ajax(
{
processData: false,
contentType: false,
type:$(this).attr("method"),
url: $(this).attr("action"),
data:formData,

success: function(response) {

if(response.match(/success::/)){
$("button#loading").hide();
				    $("div#ack").html("<div>" +response.replace('success::','')+ "</div>");
					$("div#ack").show();
					$('#signup-btn').show();
					$("div#loading").hide();
}
else{
$("div#ack").html(response);
		$('div#ack').show();
		$("div#loading").hide();
		$('#signup-btn').show();
}
},
error: function(jqXHR, textStatus, errorThrown) 
{
alert(errorThrown);    
}
});
});
	
	

	
	//////////vote//////
//$("#cost").keyup(function() {
	$("#cost").on("change paste keyup", function() {
    
	$("#err-alert").hide();
	$dprice = 50;
	$charges = 150;
	$val = $(this).val();
	//alert ($val);
	//alert();
	if ($val==''){$("#cp").html("50<small style=\"font-size:14px\">/ VOTE</small>");}
	else{
	if ($val<4 & $val!==''){
	//alert("Minimum of TWO votes required");
		$("#err-alert").text("Minimum of TWO votes required");
		$("#err-alert").show();
		$(this).val('');
		
		}else{
			$sum = ($dprice * $val);
			$("#cp").text($sum);
		    $("#price").val($sum);
		}
		}
});
	

///////////////login
$(document).on('submit', "#login_form", function(e){
e.preventDefault();
//$('div#ack').show();
	
$('#signIn').hide();
$("div#loading").show();
var formData = new FormData(this);

$.ajax(
{
processData: false,
contentType: false,
type:$(this).attr("method"),
url: $(this).attr("action"),
data:formData,

success: function(response) {

if(response.match(/success::/)){
$("button#loading").hide();
				    $("div#ack").html("<div>" +response.replace('success::','')+ "</div>");
					$("div#ack").show();
					$('#signIn').show();
					$("div#loading").hide();
}
else{
$("div#ack").html(response);
		$('div#ack').show();
		$("div#loading").hide();
		$('#signIn').show();
}
},
error: function(jqXHR, textStatus, errorThrown) 
{
alert(errorThrown);    
}
});
});
	

	$("#copy-btn").on("click", function() {
$("#plink").select();

  /* Copy the text inside the text field */
  document.execCommand("copy");
	});
	
	
	});