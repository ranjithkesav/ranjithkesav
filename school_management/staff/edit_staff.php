<?php
$id = $_GET['id'];
//echo $id;


$conn = mysqli_connect("localhost","root","","school_management");
 
if(!$conn)
{
    die("Connection error: " . mysqli_connect_error()); 
}
$qry = "SELECT * FROM `staff_tbl` WHERE `id`='$id'";
$rs = mysqli_query($conn,$qry);
$getRow = mysqli_fetch_row($rs);
//echo $getRow['1'];
?>

<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title></title>
</head>
<body>
<form action="edit_save_staff.php" method="POST">
  <label>name</label>
  <input type="text" name="staff_name" value="<?php echo $getRow['1']; ?>">
  <label>dept</label>
  <input type="text" name="staff_std" value="<?php echo $getRow['2']; ?>">
  <label>sub</label>
 
  <input type="text" name="staff_sub" value="<?php echo $getRow['4']; ?>">

  <input type="hidden" name="edit_id" value="<?php echo $id; ?>">
  <input type="submit" value="UPDATE" name="">
</form>
</body>
</html>