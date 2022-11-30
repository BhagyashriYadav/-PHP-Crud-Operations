<?php
 
//connect to mysql server with username password and database name
$connect = mysqli_connect("localhost", "root", "", "mydb");
 
// Check connection
if ($connect === false) {
    die("Opps Unable to connect " . mysqli_connect_error());
}
 
// create query to select data
$sql = "SELECT * FROM UploadImage";
if ($result = mysqli_query($connect, $sql)) {
    if (mysqli_num_rows($result) > 0) {
        echo '<table border="1px">';
        echo "<tr>";
        echo "<th>id</th>";
        echo "<th>image_path (INR)</th>";
        echo "<th>CurName</th>";
        //echo "<th>Image</th>";
        echo "</tr>";
        while ($row = mysqli_fetch_array($result)) {
            echo "<tr>";
            echo "<td>" . $row['id'] . "</td>";
            //echo "<td>" . $row['image_path'] . "</td>";
            echo "<td>" . $row['CurName'] . "</td>";
            echo "<td>" . "<img src=".$row['image_path'].' width=100px height="100px">' . "</td>";
            echo "</tr>";
        }
        echo "</table>";
        // Free result set
        mysqli_free_result($result);
    } else {
        echo "No records found";
    }
} else {
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($connect);
}
 
// Close connection
mysqli_close($connect);
?>
