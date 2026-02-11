<?php include_once "./includes/header.php"; 
?> 
<style> 
body{ 
background-image: url('images/bg1.jpeg'); /* Replace 'path_to_your_image.jpg' with 
the actual path to your background image */ 
background-size: cover; 
background-position: center; 
background-repeat: no-repeat; 
} 
66  
</style> 
<div class="container" style="margin-top: 100px; max-width: 600px;margin-bottom: 
60px; > 
<div class="card"> 
<div class="card-body"> 
<div class="card-title"> 
<h3 class="text-center" style="color: #ffffff;">SIGN UP</h3> 
</div> 
<hr> 
<form action="signup-check.php" method="post"> 
<?php if (isset($_GET['error'])) { ?> 
<p class="error"><?php echo $_GET['error']; ?></p> 
<?php } ?> 
<?php if (isset($_GET['success'])) { ?> 
<p class="success"><?php echo $_GET['success']; ?></p> 
<?php } ?> 
<label style="color: #ffffff;">Name</label> 
<?php if (isset($_GET['name'])) { ?> 
<input type="text" 
class="form-control" 
name="name" 
placeholder="Name" 
value="<?php echo $_GET['name']; ?>" required><br> 
<?php }else{ ?> 
<input type="text" 
name="name" 
class="form-control" 
placeholder="Name"><br> 
<?php }?> 
<label style="color: #ffffff;">User Name</label> 
<?php if (isset($_GET['uname'])) { ?> 
<input type="text" 
name="uname" 
67  
class="form-control" 
placeholder="User Name" 
value="<?php echo $_GET['uname']; ?>" required><br> 
<?php }else{ ?> 
<input type="text" 
name="uname" 
class="form-control" 
placeholder="User Name"><br> 
<?php }?> 
<label style="color: #ffffff;">Gender</label> 
<select name="gender" id="" class="form-control"  required> 
<option>Male</option> 
<option>Female</option> 
</select></br> 
<div class="form-group"> 
<label style="color: #ffffff;">Address</Address> 
<textarea   cols="30" rows="4" name="address" class="form-control" 
required></textarea></div></br> 
<label style="color: #ffffff;">Email</label> 
<input type="text"   name="email" class="form-control" required><br> 
<label style="color: #ffffff;">Password</label> 
<input type="password" 
name="password" 
id="" 
class="form-control" 
placeholder="Password"  required><br> 
<label style="color: #ffffff;">Re Password</label> 
<input type="password" 
name="re_password" 
class="form-control" 
placeholder="Re_Password"><br> 
68  
<button style="margin-top: 30px;" class="btn btn-block btn-primary" type="submit" 
name="register" 
id="register">Sign up</button><br><br><a href="customer_log.php" 
class="ca">Already have an account?</a> 
</form> 
</div> 
</div> 
</div> 
<?php include_once "./includes/footer.php"; 