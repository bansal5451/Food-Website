<!-- lunch -->
<?php 
session_start();
// $conn=mysqli_connect("localhost","root","","queenrestaurant");$conn = mysqli_connect("sql312.infinityfree.com", "if0_38307289", "muskan0005", "if0_38307289_queenrestaurant");
$conn = mysqli_connect("localhost", "root", "", "queenrestaurant");


$id = $_GET['id'];
$que = "SELECT * FROM `dishes` WHERE Sno  ='$id'";
$runn = mysqli_query($conn,$que); 
$fetch=mysqli_fetch_array($runn);

$name = $fetch['name'];
$email= $_SESSION['email'];
$price= $fetch['price'];
$dis= $fetch['discription'];
$stmt = $conn->prepare("INSERT INTO orders (Name, Email, Price, Discription) VALUES (?, ?, ?, ?)");
$stmt->bind_param("ssss", $name, $email, $price, $dis);

if ($stmt->execute()) {
    header("location:index.php");
    exit(); // Always exit after a redirect
} else {
    echo "Failed to insert data.";
}
$stmt->close(); ?>




