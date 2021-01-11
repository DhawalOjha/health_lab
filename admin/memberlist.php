<?php 
session_start();
if($_SESSION['id']=="")
 {
 echo '<script>
window.location="index.html";
</script>';
 }

include "../connection.php"; 
include "header.php"; ?>
<body>

<?php  include "menu.php"; ?>
<?php include "menu2.php"; ?>

  <h1>Member List</h1>

	

<div class="panel panel-warning" data-widget="{&quot;draggable&quot;: &quot;false&quot;}" data-widget-static="">
				<div class="panel-heading">
					

					<h2>
                      <form method="post" action="">
                        Search <input type="text" name="search" value="">
                        <input type="submit" name="button" value="Search">     
                    </form>



					  </h2>
					<div class="panel-ctrls" data-actions-container="" data-action-collapse="{&quot;target&quot;: &quot;.panel-body&quot;}"><span class="button-icon has-bg"><i class="ti ti-angle-down"></i></span></div>
				</div>
				<div class="panel-body no-padding" style="display: block;">
					<table class="table table-striped">
						<thead>
							<tr class="warning">
								<th>#</th>
								<th>Name</th>
								<th>Address</th>
								<th>Contactno</th>
								<th>Email </th>
								<th>Password</th>
								<th>Edit</th>
								<th>Delete</th>
							</tr>
						</thead>
						<tbody>
                        <!-- member data show ---> 
                     <?php 
                     $search="";
                     if(isset($_POST['button']))
                     {

                       $search=$_POST['search'];

                     }
 
                       
                      if($search!="")
                      {
                         
                       $qry="select * from member where name='".$search."'";
                       $res=mysqli_query($con,$qry);


                        } 

                       else
                       {

 
                       $qry="select * from member order by id desc";
                       $res=mysqli_query($con,$qry);
                      }
                       while($row=mysqli_fetch_array($res))
                        {
                          $id=$row['id'];
                          $name=$row['name'];
                          $address=$row['address'];
                          $contactno=$row['contactno'];
                          $email=$row['email'];
                          $password=$row['password'];
                      ?>





							<tr>
							<td>1</td>
							<td><?php echo $name; ?></td>
							<td><?php echo $address; ?></td>
							<td><?php echo $contactno; ?></td>
							<td><?php echo $email; ?></td>
							<td><?php echo $password; ?></td>
							<td><a href="editmember.php?id=<?php echo $id; ?>">Edit</a></td>
							<td><a href="deletemember.php?id=<?php echo $id; ?>">Delete</a></td>
							</tr>
							
							
							<?php 
							    }
							?>


						</tbody>
					</table>
				</div>
			</div>




<?php include "footer.php"; ?>