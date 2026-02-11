<?php 
include_once "scripts/checklogin.php"; 
include_once "scripts/DB.php"; 
include_once "includes/header.php"; 

if (!check("admin")) { 
header('Location: logout.php'); 
exit(); 
} 
$sql = "SELECT * FROM clients  ORDER BY ID ASC"; 
$bookings = DB::query($sql)->fetchAll(PDO::FETCH_OBJ); 
include_once "msg/admin.php"; 
?> 
<div class="container" style="margin-top: 100px; margin-bottom: 60px;"> 
<h2 class="text-center"> Customer </h2> 
<div class="table-responsive"> 
<table class="table"> 
<tr> 
<th>ID</th> 
<th>Name</th> 
<th>Contact</th> 
<th>Address</th> 
<th>Gender</th> 
<th>Email</th> 
<th>Action</th> 
</tr> 
<?php foreach ($bookings as $booking): ?> 
<tr> 
<td> 
<?= $booking->ID; ?> 
</td> 
<td> 
<?= $booking->name; ?> 
</td> 
<td> 
<?= $booking->Mobile; ?> 
</td> 

<td> 
<?= $booking->address; ?> 
</td> 
<td> 
<?= $booking->gender; ?> 
</td> 
<td> 
<?= $booking->email; ?> 
</td> 
<td> 
<a class="btn btn-danger" 
href="deletecustomer.php?id=<?= $booking->ID; ?>">Remove</a> 
</td> 
</tr> 
<?php endforeach; ?> 
</table> 
</div> 
</div> 