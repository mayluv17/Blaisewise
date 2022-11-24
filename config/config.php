<?php
session_start ();
//error_reporting(0);

if(isset($_SESSION["uid"])){
$id=$_SESSION['uid'];
$lid=$_SESSION['lid'];


}
else {//$id = "";
}
$con = mysqli_connect('localhost','root','','fou_19_plux');

if(!$con):
echo "<script> alert('cannnot connect to database')</script>";
else:
endif;
                       
					  
?>