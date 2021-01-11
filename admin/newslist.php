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

  <h1>News List</h1>

	

<div class="panel panel-warning" data-widget="{&quot;draggable&quot;: &quot;false&quot;}" data-widget-static="">
				<div class="panel-heading">
					<h2>News </h2>
					<div class="panel-ctrls" data-actions-container="" data-action-collapse="{&quot;target&quot;: &quot;.panel-body&quot;}"><span class="button-icon has-bg"><i class="ti ti-angle-down"></i></span></div>
				</div>
				<div class="panel-body no-padding" style="display: block;">
					<table class="table table-striped">
						<thead>
							<tr class="warning">
								<th>#</th>
								<th>News Title</th>
								<th>News Url</th>
								<th>Edit</th>
								<th>Delete </th>
							</tr>
						</thead>
						<tbody>
                        <!-- member data show ---> 
                     <?php 
                       $qry="select * from news order by id desc";
                       $res=mysqli_query($con,$qry);
                     
                       while($row=mysqli_fetch_array($res))
                        {
                          $id=$row['Id'];
                          $name=$row['newsname'];
                          $url=$row['newsurl'];
                      ?>





							<tr>
							<td>1</td>
							<td><?php echo $name; ?></td>
							<td><?php echo $url; ?></td>
							<td><a href="editnews.php?id=<?php echo $id; ?>">Edit</a></td>
							<td><a href="deletenews.php?id=<?php echo $id; ?>">Delete</a></td>
							</tr>

							
							
							<?php 
							    }
							?>


						</tbody>
					</table>
					<div class="col-md-12">
                                    <div class="form-group">
                                       <a href="addnews.php"  type="submit" name="button" class="btn btn-info" value="Add News">Add News</a>
                                    </div>
                                </div>
				</div>
			</div>




<?php include "footer.php"; ?>