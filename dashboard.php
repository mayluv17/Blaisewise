<?php 
//mysqli_num_rows(mysqli_query($con,"SELECT * FROM cont_user WHERE email='$e' "))):
//$getuser=mysqli_query($con,"SELECT * FROM cont_user WHERE foucid='$id' ") or die(mysqli_error($con));
if(isset($_SESSION["uid"])){

function getname(){
	global $con;
	global $id;
	$rec ="";
	 $getname= mysqli_query($con, "SELECT * FROM cont_user WHERE foucid='$id' ");
	if($n=mysqli_num_rows($getname)){
	while($getname1 = mysqli_fetch_array($getname)){
		
	$rec .= "$getname1[name]";
}
	}
	return $rec;
	
}
} else{
	header("location: login");
}

?>
<div class="container">
	<div class="row">
	
		<div class="col-sm-4 mr-auto ml-auto text-center mt-5">
		<h2>Welcome</h2>
		<h5 style="text-transform: uppercase;"><?php echo getname();?>
</h5>
	<p style="font-size: 12px;"  class="mt-4">Copy the Voting link below, thats what you share and promote</p>
		<hr>
			<input type="text" id="plink" class="form-control" value="<?php echo("https://www.blaisewise.com/vote/$lid/");?>"/> 
			<input type="button" id="copy-btn" class="btn btn-lg btn-primary" style="width: 100%; background-color: #000; font-size: 14px;" value="Copy Link">
		</div>
	</div>
</div>