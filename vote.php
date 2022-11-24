<?php 
//mysqli_num_rows(mysqli_query($con,"SELECT * FROM cont_user WHERE email='$e' "))):
//$getuser=mysqli_query($con,"SELECT * FROM cont_user WHERE foucid='$id' ") or die(mysqli_error($con));
///echo $page4;
if (isset($page2)){

	 $getname= mysqli_query($con, "SELECT * FROM cont_user WHERE link_id='$page2' ");
		if(mysqli_num_rows($getname)){
	while($getname1 = mysqli_fetch_array($getname)){
		
	$name = "$getname1[name]";
	$dpt = "$getname1[department]";
	$lvl = "$getname1[level]";
	$pix = "$getname1[pix]";
	$contid = "$getname1[foucid]";
		
}
	} else{include("error-404.php"); exit();
		}

}
else{include("error-404.php");
	 exit();
}

?>

<link rel="stylesheet" href="css/vote.css">
<div class="breadcrumb">
	
</div>

<div class="container-fluid">
<div class="row justify-content-center">
	<!--<div class="col-md-2 d-none d-lg-block"></div>-->
	<div class="col-sm-12 col-md-12 col-lg-4 cont-card left-card" style="background-image: url(img/ppix/<?php echo $pix; ?>);"></div>
	<div class="col-sm-12 col-md-12 col-lg-4 cont-card right-card">
	<small class="label ">NAME</small>

	<h2 class="valu mb-5"><?php echo $name; ?></h2>
	
	<small class="label ">DEPARTEMENT</small>
	<h2 class="valu mb-5"><?php echo $dpt; ?></h2>
	
	<small class="label">LEVEL</small>
	<h2 class="valu mb-5"><?php echo $lvl; ?></h2>
	
	<small class="label">SAFE LEVEL</small>
	<div class="progress mt-2">
	<?php 
$result= mysqli_query($con, "SELECT sum(vcount) as total FROM vote_counter WHERE cont_id=$page2");

while ($row = mysqli_fetch_assoc($result))
{ 
   $vtcount= $row['total'];
}
		
		
		//$vtcount = 200;
		$vcent= ($vtcount/1000)*100;
		if ($vcent>=70){
			$bg='bg-success';
			$tx='Safe, but still needs your votes to win';
		}elseif (($vcent<=40)){
			$bg='bg-danger';
			$tx='Not Safe, keep the votes coming';
		}
		else{
			$bg='bg-warning';
			$tx='Almost Safe, few more votes';
		}
		
		?>
  <div class="progress-bar progress-bar-striped <?php echo $bg; ?>" role="progressbar" style="width: <?php echo $vcent; ?>%" aria-valuenow="<?php echo $vcent; ?>" aria-valuemin="0" aria-valuemax="100"></div>
</div>
<small><p class="ml-auto mr-1 mt-2 text-right" style="color: #fff"><?php echo $tx; ?></p></small>
	<div class="w-auto" style="border-top: 1px solid #A17846">
		<div class="row mt-4">
		<div class="alert alert-success" role="alert">
			  Minimum of 4 votes allowed
			</div>
			<div class="alert alert-danger" id="err-alert" role="alert" style="display: none;">
			  An error got thrown here
			</div>
			<form>
			<script src="https://js.paystack.co/v1/inline.js"></script>
       		<input type="hidden" id="price" value="">
			
			<div class="col-6"><small class="label">NUMBER OF VOTE</small><input type="number" class="form-control  mt-3" id="cost"></div>
			<div class="col-6">
			<small class="label">VOTE COST</small> <br />
			<div class="cp">N</div><div class="cp" id="cp">50<small style="font-size:14px">/ VOTE</small></div>
			
			</div>
			<a class="btn btn-lg vt-btn btn-primary" data-toggle="modal" data-target="#category-modal"><img id="thumb_img" src="img/thumb_print.png" /> <img id="rail" src="img/line.png"/> VOTE NOW</a>
			</form>
		</div>
	</div>
	
	
	</div>
	<!--<div class="col-md-2 d-none d-lg-block"></div>-->
</div>
</div>

<div class="modal fade" id="category-modal" tabindex="-1" role="dialog" aria-labelledby="category-modal" aria-hidden="true">
		  <div class="modal-dialog modal-dialog-centered" role="document">
			<div class="modal-content">
			  <div class="modal-header">
				<h6 class="modal-title" id="category-modalTitle">Let's have your email and phone Number</h6>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
				  <span aria-hidden="true">&times;</span>
				</button>
			  </div>
			  <div class="modal-body">
				<div class="container">
					<div class="row cat-row">
						<input type="email" class="form-control" id="embtn" placeholder="Email" required/>
						<input type="number" class="form-control" id="nmbtn" placeholder="Phone Number" required/>
						<input type="button" class="btn btn-lg vt-btn btn-primary" data-dismiss="modal" aria-label="Close" onclick="payWithPaystack()" value="Vote"/>
					</div>
				</div>
			  </div>

			</div>
		  </div>
		</div>
		
		
		
<script>
	
			
	
  function payWithPaystack(){
    var handler = PaystackPop.setup({
    key: 'pk_test_eda43fae4088c823c595c065e356d9eceef07827',
    email: document.getElementById("embtn").value,
	phone: document.getElementById("nmbtn").value,
    amount: document.getElementById("price").value * 100,

	callback: function(response){
		window.location.href = 'https://blaisewise.com/verify.php?invoiceid=11213&lid=<?php echo "$page2";?>&contid=<?php echo "$contid";?>&trxref=' + response.trxref;
	},
	onClose: function(){
		//
	}
    });
    handler.openIframe();
  }
</script>