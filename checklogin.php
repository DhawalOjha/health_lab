
<?php 
session_start();
 include "connection.php";
 include "header.php";

  $email=$_POST['email'];
  $password=$_POST['password']; 

 if(isset($_POST['button']))
 {
   	$qry="select * from member where email='".$email."' and password='".$password."'"; 

  $res=mysqli_query($con,$qry);
  $res1=mysqli_fetch_array($res);
 
   if($res1!="")
   {

   $_SESSION['id']=$res1['id'];
   $_SESSION['email']=$res1['email'];

    echo '<script>
    alert("User Login Successfully.");
    window.location="userwelcome.php"; 
    </script>';

   }
   else
    echo '<script>
    alert("User Login Unsuccessfully.");
    window.location="index.php"; 
    </script>';

 }



?>