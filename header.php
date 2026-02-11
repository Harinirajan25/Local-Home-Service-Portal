<!DOCTYPE html> 
<html lang="en"> 
<head> 
<meta charset="utf-8" /> 
<meta content="width=device-width, initial-scale=1.0" name="viewport" /> 
<title>Home service </title> 
<meta content="" name="description" /> 
<meta content="" name="keywords" /> 
<!-- Favicons --> 
<link href="assets/img/favicon.png" rel="icon" /> 
<link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon" /> 
<!-- Google Fonts --> 
<link 
href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,60
0i,700,700i|Jost:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,
400i,500,500i,600,600i,700,700i" 
rel="stylesheet" /> 
<!-- Vendor CSS Files --> 
<link href="assets/vendor/aos/aos.css" rel="stylesheet" /> 
<link 
href="assets/vendor/bootstrap/css/bootstrap.min.css" 
rel="stylesheet"/> 
<link 
href="assets/vendor/bootstrap-icons/bootstrap-icons.css" 
rel="stylesheet"/> 
<link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet" /> 
<link 
21  
href="assets/vendor/glightbox/css/glightbox.min.css" 
rel="stylesheet"/> 
<link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet" /> 
<link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet" /> 
<!-- Template Main CSS File --> 
<link href="assets/css/style.css" rel="stylesheet" /> 
</head> 
<body> 
<!-- ======= Header ======= --> 
<header id="header" class="fixed-top header-inner-pages"> 
<div class="container d-flex align-items-center"> 
<h1 class="logo me-auto"><a href="home.html">HOME SERVICE</a></h1> 
<!-- Uncomment below if you prefer to use an image logo --> 
<!-- <a href="index.html" class="logo me-auto"><img src="assets/img/logo.png" 
alt="" class="img-fluid"></a>--> 
<nav id="navbar" class="navbar"> 
<?php if (!isset($_SESSION['user'])): ?> 
<ul> 
<li><a class="nav-link  inactive" href="home.php">Home</a></li> 
<li><a class="nav-link " href="about.php">About</a></li> 
<li><a class="nav-link " href="index.php">Service </a></li> 
<li> 
<a class="nav-link " href="register.php" >Register service provider</a 
> 
</li> 
<li><a class="nav-link " href="feedback.php">Feedback</a></li> 
<li><a class="nav-link " href="contamal.php">contact</a></li> 
<li><a class="getstarted " href="customer_log.php">Sign up</a></li> 
</ul> 
<a href="#" ><?php 
// Start the session 
session_start(); 
// Reading from Session 
22  
if(isset($_SESSION['username'])) 
{  $user = $_SESSION['name']; 
// echo $_SESSION['username']; 
echo "Welcome             ".$user;} 
?></a> 
<?php 
if(isset($_SESSION['username'])) 
{ ?>  <a class="getstared" href="includes/logout.php">Sign out</a> 
<?php }?> 
<?php elseif ($_SESSION['user']->name == 'admin'): ?> 
<a class="nav-link" href="managehall.php">Manage Providers</a> 
<a class="nav-link" href="admin.php">Manage Booking</a> 
<a class="nav-link" href="customer.php">Manage Customer</a> 
<a class="nav-link" href="feedbackadmin.php">view Feedback</a> 
<a class="nav-link" href="logout.php">Log Out</a> 
<?php else: ?> 
<a class="nav-link" href="logout.php">Log Out</a> 
<?php endif; ?> 
<i class="bi bi-list mobile-nav-toggle"></i> 
</nav> 
<!-- .navbar --> 
</div> 
</header> 
<!-- End Header --> 