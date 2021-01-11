<?php
session_start();


 include "header.php";
 ?>
 <link rel="stylesheet" type="text/css" href="userwelcome.css">
 <div class="container">
  <div class="row"> 
 <div class="col-sm-4 menubar"> 


   <ul class="menubar">
     <li><a href="">Profile</a></li>
     <li><a href="">Edit Profile</a></li>
     <li><a href="">Change Password</a></li>
   </ul>

</div> 


 <div class="col-sm-8" style="background-color: lightgray;">

 <h3> User Profile </h3> 

 <?php 
 
  $id=$_GET['id'];


              $qry="select * from member where id='".$id."'";
                       $res=mysqli_query($con,$qry);
                     
                       while($row=mysqli_fetch_array($res))
                        {
                          $id=$row['id'];
                          $name=$row['name'];
                          $address=$row['address'];
                          $contactno=$row['contactno'];
                          $email=$row['email'];
                          $password=$row['password'];
                     
                      }

                      ?>
                 
 <?php 
  $id=$_POST['id'];
 if(isset($_POST['button']))
 {

  $qryup="update member set name='".$_POST['name']."',address='".$_POST['address']."',contactno='".$_POST['contactno']."',email='".$_POST['email']."',password='".$_POST['password']."' where id='".$id."'";

  mysqli_query($con,$qryup);
   echo '<script>
   alert("member data update sucssfully"); 
   window.location="memberlist.php";

   </script>';

 }




 ?>



 <form name="userproifile" method="post" action=""> 


 	Name:<input type="text" name="name" value="<?php echo $name; ?>" class="form-control"><br> 
 Address:<input type="text" name="address" value="<?php echo $address; ?>" class="form-control"><br> 
 Contactno:<input type="text" name="contactno" value="<?php echo $contactno; ?>"class="form-control"><br>  
 Email :<input type="text" name="email" value="<?php echo $email; ?>" class="form-control"><br> 
 Password:<input type="text" name="password" value="<?php echo $password; ?>"  class="form-control" ><br> 
  <input type="submit" name="button" value="Update"><br> 

 	
 	



 </form>






 </div> 
    </div>

   <div>

<?php
include "footer.php";
?>

</body>
</html>
