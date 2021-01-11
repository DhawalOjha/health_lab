<?php 

include "../connection.php";
echo $id=$_GET['id'];
 $qry="delete from news where id='".$id."'";
 mysqli_query($con,$qry);
 echo '<script>
 alert("News Delete Successfully.");
 window.location="gallerylist.php";

  </script>';


?> 
