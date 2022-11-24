<?php
include '../config/config.php';
$pcode=$em=$pass=$ss=$err=$ms=$iv=$perr=$eerr=$lerr="";

	

    $em= $_POST['email'];
    $pass= $_POST['pass'];
	$pass= md5($pass);
		
     if($em & $pass){
		 $g = mysqli_query($con, "SELECT * FROM cont_user WHERE email='$em' and pasword='$pass' ");
		if(mysqli_num_rows($g)==1){
		$us = mysqli_fetch_array($g);
		$_SESSION['lid']=$us['link_id'];
		$_SESSION['uid']=$us['foucid'];
		
	
		echo "<script>location='dashboard'; </script>";
					
		}
		
		else{ 
		echo "ERROR:Incorrect combination of Username and password";
		}
	
    
    }
else echo "ERROR:**Either field is Empty**";
sleep(4);
  ?>