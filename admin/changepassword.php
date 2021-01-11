<?php 
  session_start();
  include "../connection.php";
  include "header.php";
  include "menu.php";
  include "menu2.php";
 ?>
 <h1>Change Password</h1>
  
 <?php 

  $id=$_SESSION['id'];
 $qry="select * from admin where id='".$id."'"; 
 $res=mysqli_query($con, $qry); 
 while($row=mysqli_fetch_array($res))
   {
    
    $id=$row['id']; 
    $username=$row['username']; 
    $oldpassword =$row['password'];
   }

 ?>

 <?php 
 $id=$_SESSION['id'];
if(isset($_POST['button']))
{

  if($oldpassword==$_POST['oldpassword'])
  {


 echo  $qry="update admin set password='".$_POST['newpassword']."' where id='".$id."'"; 
  mysqli_query($con,$qry);
  echo '<script> 
  alert("Password Change Successfully."); 
  window.location="index.php";
  </script>';

}

 else
 {
  
 echo '<script> 
  alert(" Your Old Password Inncorrect."); 
  window.location="changepassword.php";
  </script>';


 }
}

 ?>




<form method="post" action="" name="cpass">
 Old Password:<input type="text" name="oldpassword" value="<?php echo $oldpassword?>"><br> 
 News Password:<input type="password" name="newpassword"><br> 
 confirm Password:<input type="password" name="cpassword"><br> 
<input type="submit" name="button" value="Update">



</form>  
<?php
include "footer.php";
?>
