<?php
session_start();
if (!isset($_SESSION['username']) && !$_SESSION['isuser']) {
  header("location:homepage.php");
}

$conn = mysqli_connect("localhost", "root", "", "test");

// Check connection
if (mysqli_connect_errno()) {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
}