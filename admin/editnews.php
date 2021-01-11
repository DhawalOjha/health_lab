<?php 
 include "../connection.php"; 

include "header.php"; ?>
<body>

<?php  include "menu.php"; ?>
<?php include "menu2.php"; ?>
     

  <h1>Edit News</h1>
 <?php 
 
  $id=$_GET['id'];


              $qry="select * from news where id='".$id."'";
                       $res=mysqli_query($con,$qry);
                     
                       while($row=mysqli_fetch_array($res))
                        {
                          $id=$row['id'];
                          $name=$row['newsname'];
                          $newsurl=$row['newsurl'];
                     
                      }

                      ?>
                 
 <?php 
  $id=$_GET['id'];
 if(isset($_POST['button']))
 {

  $qryup="update news set name='".$_POST['name']."',newsurl='".$_POST['newsurl']."' where id='".$id."'";

  mysqli_query($con,$qryup);
   echo '<script>
   alert("News Data Update Successfully."); 
   window.location="newslist.php";

   </script>';

 }




 ?>



 



 <form method="post" action="" name="editreg">
 Name:<input type="text" name="name" value="<?php echo $name; ?>"><br> 
 Newsurl:<input type="text" name="newsurl" value="<?php echo $newsurl; ?>"><br> 
  <input type="submit" name="button" value="Update"><br> 

 	




 </form> 


	


<?php include "footer.php"; ?>