<?php 

 include "../connection.php";
include "header.php";
include "menu.php";
include "menu2.php";
?>
<h1>Add Gallery</h1>
<form method="post" action="uploadgallery/uploadgallery.php" name="newreg" enctype="multipart/form-data">

    Name:<input type="text" name="name" value="" class="form-control border border-dark"><br> 
    Image:<input type="file" name="image" value=""  class="form-control border border-dark"><br> 
    <input type="submit" name="button" value="Save" class="btn btn-info"><br> 
       



   </form>
   <?php
   include "footer.php";
   ?>