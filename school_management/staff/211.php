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
        </tr>
        <?php
        $i++;
 }
} else {
  echo "0 results";
}
$conn->close();
        ?>








SELECT DATA



        <?php
$servername = "localhost";
$username = "username";
$password = "password";
$dbname = "myDB";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT id, firstname, lastname FROM MyGuests";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo "id: " . $row["id"]. " - Name: " . $row["firstname"]. " " . $row["lastname"]. "<br>";
  }
} else {
  echo "0 results";
}
$conn->close();
?>





//////////////////////////////////////////




CONNECTION





<?php
$servername = "localhost";
$username = "username";
$password = "password";

// Create connection
$conn = new mysqli($servername, $username, $password);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully";
?>