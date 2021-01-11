<?php 

 include "../connection.php";
include "header.php";
include "menu.php";
include "menu2.php";
?>
<?php
 if(isset($_POST['button']))
 {

  $qry="insert into news(newsname,newsurl) values('".$_POST['news']."','".$_POST['newsurl']."')";
  mysqli_query($con,$qry);
 
  echo '<script>
  alert("News Add sucssfully");
  window.location="newslist.php"; 
  </script>';
 
 }




 ?> 






   <form method="post" action="" name="newreg">

    News:<input type="text" name="news" value="" class="form-control border border-dark"><br> 
    News Url:<input type="text" name="newsurl" value=""  class="form-control border border-dark"><br> 
    <input type="submit" name="button" value="Save" class="btn btn-info"><br> 
       



   </form>


   <?php
   include "footer.php";
   ?>