<?php
// Database connection
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "ecoride_french";

$conn = mysqli_connect($servername, $username, $password, $dbname);

// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}

// Start session
session_start();
