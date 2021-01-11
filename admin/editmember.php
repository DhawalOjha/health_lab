<?php 
 include "../connection.php"; 
 session_start();

include "header.php"; ?>
<body>

<?php  include "menu.php"; ?>
<?php include "menu2.php"; ?>
     

  <h1>Edit Member</h1>
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
  $id=$_GET['id'];
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



 



 <form method="post" action="" name="editreg">
 Name:<input type="text" name="name" value="<?php echo $name; ?>"><br> 
 Address:<input type="text" name="address" value="<?php echo $address; ?>"><br> 
 Contactno:<input type="text" name="contactno" value="<?php echo $contactno; ?>"><br>  
 Email :<input type="text" name="email" value="<?php echo $email; ?>"><br> 
 Password:<input type="text" name="password" value="<?php echo $password; ?>"><br> 
  <input type="submit" name="button" value="Update"><br> 

 	




 </form> 


	


<?php include "footer.php"; ?>