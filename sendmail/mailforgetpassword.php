<?php
include '../../connection.php';
session_start();
function redirecturl($url)
{
echo '<script type="text/javascript">';
echo "window.location='$url';";
echo '</script>';
}
?>

<html>
<head>
<title>MAIL SENDING</title>
</head>
<body>
<?php
     $mail=$_POST['email'];
	if(isset($_POST['button']))
     {  
     $qry="select * from member where email='".$mail."'";
	 $res=mysqli_query($con,$qry);
   $res=mysqli_fetch_array($res);
   $pass=$res['password'];
   //$link="www.anbc.com/opass.php"
   
   
   if($res)
   {
	require_once('class.phpmailer.php');
	$mail = new PHPMailer();
	$mail->IsHTML(true);
	$mail->IsSMTP();
	$mail->SMTPAuth = true; // enable SMTP authentication
	$mail->SMTPSecure = "ssl"; // sets the prefix to the servier
	$mail->Host = "smtp.gmail.com"; // sets GMAIL as the SMTP server
	$mail->Port = 465; // set the SMTP port for the GMAIL server
	$mail->Username = "onlinebanking195@gmail.com"; // GMAIL username
	$mail->Password = "9166875760"; // GMAIL password
	$mail->From = "onlinebanking195@gmail.com";//"name@yourdomain.com";
	//$mail->AddReplyTo = "support@shotdev.com"; // Reply
	$mail->FromName = "website for email";  // set from Namesite
	$mail->Subject = "forget Password"; 
	$mail->Body = "Your Password is: $pass";
	$mail->AddAddress($_POST['email'], "  website email"); // to Address
    //$mail->AddCC("member@shotdev.com", "Mr.Member ShotDev"); //CC
	//$mail->AddBCC("member@shotdev.com", "Mr.Member ShotDev"); //CC

	$mail->set('X-Priority', '1'); //Priority 1 = High, 3 = Normal, 5 = low
	

	$mail->Send();
	  echo '<script>
     alert("Please check your mail for your password !!!");
    
	 </script>';
	 
	redirecturl('../index.html');
     }
	else
	{
echo '<script>
     alert("Mail does not found in database!!!");
     </script>';
redirecturl('../index.html');
	}
}	
?>
</body>
</html>
<!--- This file download from www.shotdev.com -->