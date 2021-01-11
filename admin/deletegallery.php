<?php 

include "../connection.php";
echo $id=$_GET['id'];
 $qry="delete from gallery where id='".$id."'";
 mysqli_query($con,$qry);
 echo '<script>
 alert("Gallery Delete Successfully.");
 window.location="gallerylist.php";

  </script>';


?> 
