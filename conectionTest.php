<?php
include 'db_connection.php';
$conn = OpenCon();
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);}
else {
echo "Connected Successfully";}
CloseCon($conn);
?>