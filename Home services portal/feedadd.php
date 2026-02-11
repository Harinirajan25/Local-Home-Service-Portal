<?php 
// Include the database connection file 
include "scripts/DB.php"; 
// Check if the form is submitted 
if ($_SERVER["REQUEST_METHOD"] == "POST") { 
// Get form data 
$feed1 = $_POST['feed1']; 
$feed2 = $_POST['feed2']; 
$experience = $_POST['experience']; 
$name = $_POST['name']; 
$contact= $_POST['contact']; 
$email = $_POST['email']; 
$feedback_suggestion = $_POST['feedback_suggestion']; 
$sname= "localhost"; 
$unmae= "root"; 
$password = ""; 
$db_name = "servicess"; 
$conn = mysqli_connect($sname, $unmae, $password, $db_name); 
if (!$conn) { 
die("Connection failed: " . mysqli_connect_error()); 
} 
$sql = "INSERT INTO feedback (name, contact, email, feed1, feed2, experience, 
feedback_suggestion) VALUES (?, ?, ?, ?, ?, ?, ?)"; 
$stmt = mysqli_prepare($conn, $sql); 
// Bind parameters 
mysqli_stmt_bind_param($stmt, "sssssss", $name, $contact, $email, $feed1, $feed2, 
$experience, $feedback_suggestion); 
// Execute the statement 
$result = mysqli_stmt_execute($stmt); 
// Check for success or failure 
if ($result) { 
47  
header("Location: feedback.php?message=success"); 
} else { 
echo 'failed'; 
} 
// Close statement and connection 
mysqli_stmt_close($stmt); 
mysqli_close($conn); 
} 
?>