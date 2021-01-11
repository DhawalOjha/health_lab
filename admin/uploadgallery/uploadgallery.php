<?php
include('../../connection.php');

define("DIR","uploadgallery/");

if(is_uploaded_file($_FILES['image']['tmp_name'])){
	
if($_FILES['image']['type']=="image/jpeg" || $_FILES['image']['type']=="image/gif" ||$_FILES["image"]["type"] == "image/jpg" ||$_FILES['image']['type']=="image/gif" ||$_FILES["image"]["type"] == "image/png"){



		echo $name=$_POST['name'];
		echo $uploadname = $_FILES['image']['name'];

move_uploaded_file($_FILES['image']['tmp_name'],$uploadname);
	    echo  $qry="insert into gallery(name,image) values ('".$name."','".$uploadname."')";
	       mysqli_query($con,$qry);
	
?>
<script type="text/javascript">alert("Image Uploded.");
window.location.href='../gallerylist.php';
</script>
<?php
}
else
?>
<script type="text/javascript">alert("Image Not Uploded.");
window.location.href='../gallerylist.php';
</script>
<?php
}
else
?>
<script type="text/javascript">alert("Please Check Your File Format.");
window.location.href='../gallerylist.php'
</script>