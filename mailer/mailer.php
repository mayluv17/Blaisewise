<?php
/*
$ins='';
//if (isset($_REQUEST['email'])){
	 
		$name = $_REQUEST['name'];
		$email = $_REQUEST['email'] ;
		$comment = $_REQUEST['msg'] ;
		$phone = $_REQUEST['phone'] ;
$headers = 'From: <'.$email.'>' . "\r\n";

		$ins= mail("duraconresources@gmail.com","Buildmex Enquiry From:  $name . $phone" ,$comment,$headers);
		
	 //}
		

		
		if($ins)
		{
		echo "ok";	
		}
		
		else{
			echo 'ERROR: Something went wrong, you can reach us by mail or phone ';			
		}
*/
$ins='';
		$name = $_POST['name'];
		$email = $_POST['email'] ;
		$comment = $_POST['msg'] ;
		$phone = $_POST['phone'] ;
		$subject = "Duracon Enquiry from  $name $phone";
		$to = "duraconresources@gmail.com,expo@buildmex.org";
$headers   = array();
$headers[] = "MIME-Version: 1.0";
$headers[] = "Content-type: text/plain; charset=iso-8859-1";
$headers[] = "From: $name <$email>";
$headers[] = "Reply-To: $name <$email>";
$headers[] = "Subject: {$subject}";
$headers[] = "X-Mailer: PHP/".phpversion();

$ins = mail($to, $subject, $comment, implode("\r\n", $headers));

if($ins)
		{
		echo "ok";	
		}
		
		else{
			echo 'ERROR: Something went wrong, you can reach us by mail or phone ';			
		}
?>

	
		
		