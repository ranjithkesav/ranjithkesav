<?php  
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

$sql = "SELECT * FROM staff_tdl";
$result = $conn->query($sql);

//if ($result->num_rows > 0) {
  // output data of each row
  //while($row = $result->fetch_assoc()) {
    // echo "id: " . $row["id"]. " - Name: " . $row[Staff listz"firstname"]. " " . 
    // $row["lastname"]. "<br>";
     //echo '<pre>';
    //print_r($row);
    //echo '</pre>';
  //}
//} else {
  echo "0 results";
//}
//$conn->close();
?>
  <!DOCTYPE html>
<html>
<head>
  <!-- Import Pure CSS -->
  <link rel="stylesheet"
    href="https://unpkg.com/purecss@2.0.6/build/pure-min.css"
    integrity="sha384-Uu6IeWbM+gzNVXJcM9XV3SohHtmWE+3VGi496jvgX1jyvDTXfdK+rfZc8C1Aehk5"
    crossorigin="anonymous"
    origin="anonymous"
  />

  <!-- Used to optimized Website for mobile -->
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />

  <style>
  .container {
    margin-top: 20px;
    display: flex;
    align-items: center;
    justify-content: center;
    flex-direction: column;
  
  } h1 {
    color: green;
  }
 
  </style>
</head>
<body>
  <div class="container">
  <h2>Staff list</h2>
  
  <!-- Here pure-table class is used -->
  <table class="pure-table">
    <thead>
    <tr>
      <th>S.no</th>
      <th>Staff_name</th>
      <th>Staff_std</th>
      <th>Staff_sub</th>
      <th>action</th>
    </tr>
    </thead>
    <?php
if ($result->num_rows > 0) {
  // output data of each row
  $i=1;
  while($row = $result->fetch_assoc()) 
  {
          ?>
        <tr>
            <td><?php echo $i; ?></td>
            <td><?php echo $row['staff_name']; ?></td>
            <td><?php echo $row['staff_std']; ?></td>
            <td><?php echo $row['staff_sub']; ?></td>
            <td><a href="edit_staff.php?id=<?php echo $row['id'] ?>">EDIT</a>/<a href="delete_staff.php?id=<?php echo $row['id'] ?>">DELETE</a></td>       
        </tr>
        <?php
        $i++;
 }
} else {
  echo "0 results";
}
$conn->close();
        ?>
      </table>c 