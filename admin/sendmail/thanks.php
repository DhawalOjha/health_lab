<?php
include '../connection.php';
session_start();

?>

<?php
   

 if(isset($_POST['button']))
  {

  $qry="insert into member(name,address,contactno,email,password) values('".$_POST['name']."','".$_POST['address']."','".$_POST['contactno']."','".$_POST['email']."','".$_POST['password']."')";

   mysqli_query($con,$qry);



   $a=1;
   if($a==1)
   {
	require_once('class.phpmailer.php');
	$mail = new PHPMailer();
	$mail->IsHTML(true);
	$mail->IsSMTP();
	$mail->SMTPAuth = true; // enable SMTP authentication
	$mail->SMTPSecure = "ssl"; // sets the prefix to the servier
	$mail->Host = "smtp.gmail.com"; // sets GMAIL as the SMTP server
	$mail->Port = 465; // set the SMTP port for the GMAIL server
	$mail->Username = "udptourtesting@gmail.com"; // GMAIL username
	$mail->Password = "udptourtesting@123"; // GMAIL password
	$mail->From = "udptourtesting@gmail.com";//"name@yourdomain.com";
	//$mail->AddReplyTo = "support@shotdev.com"; // Reply
	$mail->FromName = "Web site mail";  // sender's name
	$mail->Subject = "Thank mail";  //email subject
	$mail->Body = "thank for reg. your account actived soon
    <br> 
    Udaipur Tours
	 "; //email msg
	$mail->AddAddress($_POST['email'], "website mail "); // to Address ( user email addrss from registration page)
      
	

	//$mail->AddCC("member@shotdev.com", "Mr.Member ShotDev"); //CC
	//$mail->AddBCC("member@shotdev.com", "Mr.Member ShotDev"); //CC

	$mail->set('X-Priority', '1'); //Priority 1 = High, 3 = Normal, 5 = low
	

	$mail->Send(); 
	echo '<script>
    
	 alert("Thanks for registration. You can Sign in now!!");
     window.location="../index.php";
	 </script>';
	
	
	
     }
	else
	{
	echo '<script>
     alert("Mail does not found in database!!!");
     </script>';
//redirecturl('../index.php');
	}
}	
?>
</body>
</html>
<!--- This file download from www.shotdev.com -->