<?php
$staff_name = $_POST['staff_name'];
$staff_std = $_POST['staff_std'];
$staff_sub = $_POST['staff_sub'];

$edit_id = $_POST['edit_id'];
$servername = "localhost";

$username = "root";
$password = "";
$dbname = "school_management";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "UPDATE `staff_tbl` SET `staff_name`='$staff_name',`staff_std`='$staff_std', 
'staff_sub'='$staff_sub' WHERE id='$edit_id'";

if ($conn->query($sql) === TRUE) {
  echo "Record updated successfully";
} else {
  echo "Error updating record: " . $conn->error;
}

$conn->close();
?>