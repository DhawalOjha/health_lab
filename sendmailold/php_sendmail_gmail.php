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
    //$mail1=$_POST['MailArea'];
	//if(isset($_POST['Submit']))
     //{  
    // $qry="select * from register where EmailID='".$mail1."'";
	// $res=mysql_query($qry);
   //$res=mysql_fetch_array($res);
   //$pass=$res['Password'];
   
   	
	if(isset($_POST['button2']))
	{
		
		$lang= (implode(',', $_POST[language]));
		$qry= "INSERT INTO  `gitsdata`.`student` (

`s_name` ,
`s_email` ,
`s_password` ,
`s_username`,
`s_DOB`,
`s_branch`,
`s_rno`


)
VALUES (
  '".$_POST[s_name]."',  '".$_POST[s_email]."',  '".$_POST[s_password]."',  '".$_POST[s_username]."', '".$_POST[s_DOB]."', '".$_POST[s_branch]."', 
   '".$_POST[s_rno]."'
)";

mysql_query($qry);
	
	
	
	
	
	}

	
   
   
   
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
	$mail->Username = "gitswebsite@gmail.com"; // GMAIL username
	$mail->Password = "gits@123"; // GMAIL password
	$mail->From = "gitswebsite@gmail.com";//"name@yourdomain.com";
	//$mail->AddReplyTo = "support@shotdev.com"; // Reply
	$mail->FromName = "gits website";  // sender's name
	$mail->Subject = "Thank mail";  //email subject
	$mail->Body = "Thanks for the registration "; //email msg

	$mail->AddAddress($_POST[s_email], "gits website"); // to Address ( user email addrss from registration page)
    
    
	

	//$mail->AddCC("member@shotdev.com", "Mr.Member ShotDev"); //CC
	//$mail->AddBCC("member@shotdev.com", "Mr.Member ShotDev"); //CC

	$mail->set('X-Priority', '1'); //Priority 1 = High, 3 = Normal, 5 = low
	

	$mail->Send(); 
	echo '<script>
    
	 alert("Thanks for registration. You can Signin now!!");
     window.location="../student-login.php";
	 </script>';
	
	
	
     }
	else
	{
	echo '<script>
     alert("Mail does not found in database!!!");
     </script>';
redirecturl('../index.php');
	}
//}	
?>
</body>
</html>
<!--- This file download from www.shotdev.com -->