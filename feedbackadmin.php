<?php 
include_once "scripts/checklogin.php"; 
include_once "scripts/DB.php"; 
include_once "includes/header.php"; 
if (!check("admin")) { 
header('Location: logout.php'); 
exit(); 
} 
 
$sql = "SELECT * FROM feedback  "; 
$bookings = DB::query($sql)->fetchAll(PDO::FETCH_OBJ); 
include_once "msg/admin.php"; 
?> 
<div class="container" style="margin-top: 100px; margin-bottom: 60px;"> 
<h2 class="text-center"> Customer </h2> 
<div class="table-responsive"> 
<table class="table"> 
<tr> 
<th>Name</th> 
<th>Contact</th> 
<th>Email</th> 
<th>Full fill your need?</th> 
<th>presentation</th> 
<th>Experience</th> 
<th>Suggession</th> 
</tr> 
<?php foreach ($bookings as $booking): ?> 
<tr> 
<td> 
<?= $booking->name; ?> 
</td> 
<td> 
<?= $booking->contact; ?> 
</td> 
<td> 
<?= $booking->email; ?> 
</td> 
<td> 
<?= $booking->feed1; ?> 
</td> 
<td> 
<?= $booking->feed2; ?> 

</td> 
<td> 
<?= $booking->experience; ?> 
</td> 
<td> 
<?= $booking->feedback_suggestion; ?> 
</td> 
</tr> 
<?php endforeach; ?> 
</table> 
</div> 
</div> 