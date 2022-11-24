<style>
	.jumbotron{
	background-image: url(img/map.png);
	background-color: #A17846;
		color: #fff;
		border-radius: 0;
	}
	.c-valu{font-size: 18px;
	font-weight: 900;
	display: inline;
	margin-left: 8px;
	padding-left: 12px;
	}
	
	.well{
		padding: 14px 8px;
		border:1px solid #A17846;
		border-radius: 4px;
		margin: 12px;
	}
	.btn-primary{font-size: 16px;
		background-color: #000;
		border-color: #000;
	}
	.btn-primary:hover{background-color: #353535;
		border-color: #000;}

</style>
<div class="jumbotron">
	<h1 class="text-center">Contact Us</h1>
	
</div>
<div class="container">
	
	<div class="row justify-content-md-center">
		<div class="col-sm-4 well"><img src="img/phone.png" height="36"/><div class="c-valu">07032835610</div></div>
		<div class="col-sm-4 well"><img src="img/whatsapp.png" height="36"/><div class="c-valu">07039787573</div></div>
	</div>
	<div class="row justify-content-md-center">
		<div class="col-sm-4 well"><img src="img/mail.png" height="36"/><div class="c-valu">Blaisewiseent@gmail.com</div></div>
		<div class="col-sm-4 well"><img src="img/ig.png" height="36"/><div class="c-valu">@blaisewiseent</div></div>
	</div>
	<div class="row justify-content-md-center mt-5">
	<div class="col-sm-8">
	<h2>Message Us</h2>
	<form class="mb-5">
		<input class="form-control" type="email" placeholder="Email" />
		<input class="form-control" type="text" placeholder="Subject" />
		<textarea class="form-control" placeholder="Some message for us..." rows="6"></textarea>
		<input type="submit" class="btn btn-lg btn-primary" value="Send Message" />
	</form>
	</div>
	</div>
</div>


<?php include("footer.php"); ?>