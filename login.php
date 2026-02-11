<?php 
include_once "./msg/login.php"; 
?> 
<!-- Favicons --> 
<link href="assets/img/favicon.png" rel="icon" /> 
<link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon" /> 
<!-- Google Fonts --> 
<link 
href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,60
0i,700,700i|Jost:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,
400i,500,500i,600,600i,700,700i" 
rel="stylesheet" 
/> 
<!-- Vendor CSS Files --> 
<link href="assets/vendor/aos/aos.css" rel="stylesheet" /> 
<link 
href="assets/vendor/bootstrap/css/bootstrap.min.css" 
rel="stylesheet" 
/> 
<link 
href="assets/vendor/bootstrap-icons/bootstrap-icons.css" 
rel="stylesheet" 
/> 
<link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet" /> 
<link 
href="assets/vendor/glightbox/css/glightbox.min.css" 
rel="stylesheet" 
/> 
<link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet" /> 
<link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet" /> 
 
<!-- Template Main CSS File --> 
<link href="assets/css/style.css" rel="stylesheet" /> 
<style> 
body{ 
background-image: url('images/bg1.jpeg'); /* Replace 'path_to_your_image.jpg' with 
the actual path to your background image */ 
background-size: cover; 
background-position: center; 
background-repeat: no-repeat; 
} 
</style> 
<div class="container" style="margin-top: 100px; width: 450px;"> 
<div class="card"> 
<img src="assets/img/h.jpg" style="height: 150px; width: 150px; margin-left: 130px" 
class="card-img-top" 
alt="..."> 
<div class="card-body"> 
<div class="card-title"> 
<h3 class="text-center">Login</h3> 
</div> 
<hr> 
<form action="scripts/login.php" method="post"> 
<div class="form-group"> 
<label for="">Contact No.</label> 
<input id="contact" 
oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');" 
name="contact" type="text" class="form-control" placeholder="Enter Your Contact 
No." 
minlength="10" maxlength="10" required> 
</div> 
<div class="form-group"> 
<label for="">Password</label> 
<input id="password" name="password" type="password" class="form-control" 

placeholder="Enter Password" minlength="4" required> 
</div> 
<button style="margin-top: 30px;" class="btn btn-block btn-primary" type="submit" 
name="login" 
id="login">Login</button> 
</form> 
</div> 
</div> 
</div> 