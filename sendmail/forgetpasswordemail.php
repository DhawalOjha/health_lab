<?php
include '../connection.php';
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
    $mail=$_POST['email']; //it will post email you have enter in forgot password where you want to send mail
	if(isset($_POST['button']))//on click on button it will set the value of the $mail to email (see above
     {  
     $qry="select * from member where email='".$mail."'";//check wheather your email exist on database or not OR you are registered member or not
	 $res=mysqli_query($con,$qry);//if your email match above query will execute
   $res1=mysqli_fetch_array($res);//fetching data from databse
   $pass=$res1['password'];//getting the password from database n putting its value in $pass variable
   
   	
	
   
   
   
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
	$mail->Username = "onlinecafe11@gmail.com"; // GMAIL username
	$mail->Password = "udaipur@123"; // GMAIL password
	$mail->From = "onlinecafe11@gmail.com";//"name@yourdomain.com";
	//$mail->AddReplyTo = "support@shotdev.com"; // Reply
	$mail->FromName = " website email";  // set from Namesite
	$mail->Subject = " forget Password Email "; 
	$mail->Body = " Dear Member Your Password : $pass";

	$mail->AddAddress($_POST[email], "forget password"); // to Address
    
	

	//$mail->AddCC("member@shotdev.com", "Mr.Member ShotDev"); //CC
	//$mail->AddBCC("member@shotdev.com", "Mr.Member ShotDev"); //CC

	$mail->set('X-Priority', '1'); //Priority 1 = High, 3 = Normal, 5 = low
	

	$mail->Send();//if mail sent start alert box will show n it will redirect to index.php
	
	echo '<script>
     alert("Please check your mail for your password !!!");
     </script>';
	 
	redirecturl('../index.php'); //if mail sent end
     }
	else //if mail not sent following alert box will show n it will redirect to
	{
	echo '<script>
     alert("Email not found in database or you are not registered member!!!");
     </script>';
redirecturl('../index.php');
	}
}	
?>
</body>
</html>
<!--- This file download from www.shotdev.com -->