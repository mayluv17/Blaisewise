<?php
include '../config/config.php';

$err = $eerr = $pserr = $prerr = $yrerr = $acerr = $ppix = "";
	
	$e = $_POST['email'];
    $nm = $_POST['name'];
    $dpt = $_POST['dept'];
    $ps = md5($_POST['password']);
    $lv = $_POST['level'];
	$yr = $_POST['year'];
	$sx = $_POST['sex'];
   	
$date_time= date('Y-m-d H:i:s');
$uploadDir = '../img/ppix/';
$fileName = $_FILES['ppix']['name'];
$tmpName = $_FILES['ppix']['tmp_name'];
$fileSize = round($_FILES['ppix']['size']/1024);
$fileType = $_FILES['ppix']['type'];


if(!$_FILES['ppix']['name']){
echo "ERROR:: It seems you have not selected a picture yet";

}elseif($fileSize > 7042){
	
echo "ERROR:: Sorry, your file size is larger than maximum file size allowed!" ;$erro=1;
} 

else{

$part = pathinfo($fileName);
$ext = substr(strrchr($fileName, "."), 1);
$ext = strtolower($ext);
$sext = array('jpg','jpeg','png');
// make the random file name

if(in_array($ext,$sext)){
$randName = md5(rand() * time());
// and now we have the unique file name for the upload file
$ppix = $uploadDir . $randName . '.' . $ext;
$ppixname = $randName . '.' . $ext;
 
	   if (mysqli_num_rows(mysqli_query($con,"SELECT * FROM cont_user WHERE email='$e' "))):
			$err = 1;
           echo "ERROR:: Email already registered";
		   endif;
		   


        if(!$err){
            $date = date("d/m/Y");
            $fuid = substr(uniqid(rand() * time()), 0, 6);
			$lid = substr(md5(rand() * time()), 0, 4); 
			move_uploaded_file($tmpName, $ppix);
            $ins = mysqli_query($con, "INSERT INTO cont_user VALUES('','$fuid','$lid','$nm','$e','$lv','$sx','$yr','$ps','$dpt','$ppixname','')");
			
		    if ($ins){echo "success::Regitration successful";
					  $_SESSION['lid']=$lid;
					  $_SESSION['uid']=$fuid;
					  echo "<script>location='dashboard'; </script>";
					 }else{
				echo "Error:: Network Error" ;$err=1;
			}
         /*   if ($ins):
                $g = mysqli_query($con, "SELECT * FROM cont_user WHERE email='$e'");
		if(mysqli_num_rows($g)==1){
		$us = mysqli_fetch_array($g);
		$_SESSION['uid']=$us['id'];
		
		echo $us['id'];
		
		$_SESSION['acl']=$us['ac_level'];
		if ($us['ac_level']==0){
		$_SESSION['bss']=$us['boss'];
		}else{}}
				if ($lv==0){$_SESSION["bss"] = $un;}
				 
                //echo "success::Regitration successful";
				echo "<script>location='index.php'; </script>";
            else:
                echo "Error:: Network Error ";
            endif;*/
		}
		

} else{
	echo 'ERROR:: Unsurpported attacment format'; $err=1;
			}
			
			
 } 

			
           
?>

