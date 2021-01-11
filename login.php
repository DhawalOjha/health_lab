<?php
include "connection.php";
include "header.php";
?>

  <div class="container">
    <h1>User Login</h1>
<form method="post" action="checklogin.php" class="needs-validation" name="User Login">
  
   <div class="form-group">
    <label for="fname"><h3>Email:</h3></label>
    <input type="text" class="form-control" id="fname" placeholder="Enter Email" name="email" required>
    <div class="valid-feedback">Valid.</div>
    <div class="invalid-feedback">Please fill out this field.</div>
  </div>
  <div class="form-group">
    <label for="lname"><h3>Password:</h3></label>
    <input type="text" class="form-control" id="lname" placeholder="Enter Password" name="password" required>
    <div class="valid-feedback">Valid.</div>
    <div class="invalid-feedback">Please fill out this field.</div>
  </div>
  <input type="submit" class="btn btn-primary" name="button" value="Login"><br><br>
  
  
  </form>
  <input type="submit" class="btn btn-primary" name="button" value="Login"><br><br>
   <a href="forgetpassword.php"> <input type="submit" class="btn btn-primary" name="button" value="Forget Password"></a>
  

  </div>
  <br><br><br>
  <?php
   include "footer.php";
  ?>