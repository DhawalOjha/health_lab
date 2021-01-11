<?php 
session_start();
if($_SESSION['id']=="")
 {
 echo '<script>
window.location="index.php";
</script>';
 }

include "../connection.php"; 
include "header.php"; ?>
<body>

<?php  include "menu.php"; ?>
<?php include "menu2.php"; ?>

  <h1>Gallery List</h1>

	

<div class="panel panel-warning" data-widget="{&quot;draggable&quot;: &quot;false&quot;}" data-widget-static="">
				<div class="panel-heading">
					<h2>Gallery </h2>
					<div class="panel-ctrls" data-actions-container="" data-action-collapse="{&quot;target&quot;: &quot;.panel-body&quot;}"><span class="button-icon has-bg"><i class="ti ti-angle-down"></i></span></div>
				</div>
				<div class="panel-body no-padding" style="display: block;">
					<table class="table table-striped">
						<thead>
							<tr class="warning">
								<th>#</th>
								<th>Name</th>
								<th>Image</th>
								<th>Edit</th>
								<th>Delete </th>
							</tr>
						</thead>
						<tbody>
                        <!-- member data show ---> 
                     <?php 
                       $qry="select * from gallery order by id desc";
                       $res=mysqli_query($con,$qry);
                     
                       while($row=mysqli_fetch_array($res))
                        {
                          $id=$row['id'];
                          $name=$row['imagename'];
                          $url=$row['imageurl'];
                      ?>





							<tr>
							<td>1</td>
							<td><?php echo $name; ?></td>
							<td><?php echo $url; ?></td>
							<td><a href="editgallery.php?id=<?php echo $id; ?>">Edit</a></td>
							<td><a href="deletegallery.php?id=<?php echo $id; ?>">Delete</a></td>
							</tr>

							
							
							<?php 
							    }
							?>


						</tbody>
					</table>
					<div class="col-md-12">
                                    <div class="form-group">
                                       <a href="addgallery.php" type="submit" name="button" class="btn btn-info" value="Add Images">Add Gallery</a>
                                    </div>
                                </div>
				</div>
			</div>




<?php include "footer.php"; ?>