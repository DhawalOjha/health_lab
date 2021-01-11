<?php
include '../connection.php';

?>

<html>
<head>
<title>MAIL SENDING</title>
</head>
<body>
<?php
  $temp22="";
     $mail=$_POST['email'];
	if(isset($_POST['submit']))
     {  
     $qry="select * from member where email='".$mail."'";
	 $res=mysqli_query($con,$qry);
   $res1=mysqli_fetch_array($res);
  if($mail==$res1["email"])
  {
  	echo $res1["email"];
   $temp22=$res1["email"];
   
   function random_string($length)
{
   $string = "";
   $chars = "abcdefghijklmanopqrstuvwxyz0123456789";
   $size = strlen($chars);
   for ($i = 0; $i < $length; $i++) {
       $string .= $chars[rand(0, $size - 1)];
   }
   return $string; 
}

$pass1=random_string(6);

   
   
	require_once('class.phpmailer.php');				
	$mail = new PHPMailer();
	$mail->IsHTML(true);
	$mail->IsSMTP();
	$mail->SMTPAuth = true; // enable SMTP authentication
	$mail->SMTPSecure = "ssl"; // sets the prefix to the servier
	$mail->Host = "smtp.gmail.com"; // sets GMAIL as the SMTP server
	$mail->Port = 465; // set the SMTP port for the GMAIL server
	$mail->Username = "freshfarmudaipur@gmail.com"; // GMAIL username
	$mail->Password = "sonu@bairwa"; // GMAIL password
	$mail->From = "freshfarmudaipur@gmail.com";//"name@yourdomain.com";
	//$mail->AddReplyTo = "support@shotdev.com"; // Reply
	$mail->FromName = "Fresh farm Udaipur";  // set from Namesite
	$mail->Subject = "forget Password"; 
	$mail->Body = "Your New Password is: $pass1";
	$mail->AddAddress($_POST['email'], "fresh"); // to Address
    //$mail->AddCC("member@shotdev.com", "Mr.Member ShotDev"); //CC
	//$mail->AddBCC("member@shotdev.com", "Mr.Member ShotDev"); //CC

	$mail->set('X-Priority', '1'); //Priority 1 = High, 3 = Normal, 5 = low
	
    $qup="UPDATE  member SET  password = '".$pass1."' WHERE  member.email ='".$temp22."';";
    mysqli_query($con,$qup);
	$mail->Send();
	 echo '<script>
     alert("Password Send Sucessfully plz Chech Your Email !!!");
        window.location("forgetpassword.php");
	 </script>';

    }
   	else
	{
	echo '<script>
     alert("Mail does not found in database!!!");
     </script>';
redirecturl('../forgetpassword.php');
	}
}	
?>
</body>
</html>
<!--- This file download from www.shotdev.com -->