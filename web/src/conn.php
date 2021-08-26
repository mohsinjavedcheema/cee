<?php 

$host = "db";
$user = "root";
$pass = "mysecret";
$db   = "cee_db";
$conn = null;

try {
  $conn = new PDO("mysql:host={$host};dbname={$db};",$user,$pass);
} catch (Exception $e) {
}


 ?>
