<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "DemoDB";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "INSERT INTO mydata (firstname, lastname, email)
VALUES ('shri', 'yadav', 'shri@gmail.com')";

if ($conn->query($sql) === TRUE) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

/***************** TO INSERT MULTIPLE DATA IN DB ****************/

/*$sql = "INSERT INTO MyGuests (firstname, lastname, email)
VALUES ('OM', 'yadav', 'om@.com');";
$sql .= "INSERT INTO MyGuests (firstname, lastname, email)
VALUES ('Adi', 'patil', 'adi@gmail.com');";
$sql .= "INSERT INTO MyGuests (firstname, lastname, email)
VALUES ('shiv', 'more', 'shib@gmail')";

if ($conn->multi_query($sql) === TRUE) {
  echo "New records created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}*/

$conn->close();
?>
