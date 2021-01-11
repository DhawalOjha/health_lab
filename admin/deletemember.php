<?php 

include "../connection.php";
echo $id=$_GET['id'];
 $qry="delete from member where id='".$id."'";
 mysqli_query($con,$qry);
 echo '<script>
 alert("member delete sucssfully");
 window.location="memberlist.php";

  </script>';


?> 
