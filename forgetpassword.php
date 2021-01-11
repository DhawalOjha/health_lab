<?php
include "header.php";
include "connection.php";
?>
<div class="container">
    <h1>Forget Password</h1>
<form method="post" action="sendmail/mailforgetpassword.php" class="needs-validation" name="User Login">
  
   <div class="form-group">
    <label for="fname"><h3>Email:</h3></label>
    <input type="text" class="form-control" id="fname" placeholder="Enter Email" name="email" required>
    <div class="valid-feedback">Valid.</div>
    <div class="invalid-feedback">Please fill out this field.</div><br><br>
     <input type="submit" class="btn btn-primary" name="button" value="submit">
       </div>
</form>
<?php
include "footer.php";
?>