<style>
	.jumbotron{
		background-color: black;
		color: #fff;
		background-image: url("img/banner1-trans.png");
		background-color: #140212;
		background-repeat: no-repeat;
		background-position: right bottom;
	}
	.lead{ font-size:14px;
	}
	.label{font-weight:900;
	color: #BBBBBB;
	}
	.card{margin-top: 40px;margin-bottom: 40px;
	}
	.card p{
		font-size: 12px;	
	}
	
	.card-img-top1{
		height: 280px;
		position: relative;
		*width: 100% !important;
		background-size: cover;
		background-position: center center;
		
		
	}
	a.col-sm-3{
		color: #000;
	}
	
	a.col-sm-3:hover{
		color: #000;
		text-decoration: none;
		transform: scale(1.02);
		transition-duration: 1s;
	}

</style>



<?php 

if (isset($_GET[year]) & isset($_GET[sex])){

}
else{include("error-404.php");
	 exit();
}

?>

 <div class="jumbotron jumbotron-fluid">
  <div class="container">
    <h1 class="display-4"><?php if ($_GET[sex]==f){ echo "Female";} else { echo "Male";} ?> Category</h1>
    <p class="lead">This is a modified jumbotron that occupies the entire horizontal space of its parent.</p>
  </div>
</div>

<div class="container">

<div class="row">
 
<?php 
	
	
	 $getname= mysqli_query($con, "SELECT * FROM cont_user WHERE year='$_GET[year]' and sex='$_GET[sex]' ");
		if(mysqli_num_rows($getname)){
	while($getname1 = mysqli_fetch_array($getname)){
		
	$name = "$getname1[name]";
	$dpt = "$getname1[department]";
	$lvl = "$getname1[level]";
	$pix = "$getname1[pix]";
		$lnk = "$getname1[link_id]";
		
		
		echo "<a href=\"vote/$lnk/\" class=\"col-sm-3 col-md-6 col-lg-3\">
 <div class=\"card\"><div class=\"card-img-top1\" style=\"background-image: url(img/ppix/$pix);\"></div> 
    <div class=\"card-body\">
      <h5 class=\"card-title\">$name</h5>
    
	<small class=\"label\">DEPARTEMENT</small>
	<p class=\"valu mb-1\">$dpt</p>
	
	<small class=\"label\">LEVEL</small>
	<p class=\"valu mb-1\">$lvl</p>
      
    </div></div>
  </a>";
		
}
	} else{include("error-404.php"); exit();
		}

	?>
  
 </div>
 
</div>
<?php include('footer.php')?>