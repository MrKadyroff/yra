<?php
// DB connection

$servername = "localhost";
$username = "root";
$password = "";
$db = "yra";

// Create connection
$con = new mysqli($servername, $username, $password,$db);
$con->query("SET CHARACTER SET utf8 ");
// Check connection
if ($con->connect_error) {
  die("Connection failed: " . $con->connect_error);
}
?>