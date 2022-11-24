<?php

header('Content-Type: application/json');
$servername = "localhost";
$username = "root";
$password = "";
$database="mydb";

$conn = mysqli_connect($servername,$username,$password,$database);

if(!$conn)
{
die("Connection Failed ". mysqli_connect_error());
}

else{
//echo"connection create successfully";
}

//$id=isset($_GET['Id']) ? $_GET['Id']:die();
//$sql="select * from assign_task where id={$Id}";
$sql="select * from shri";
$result=mysqli_query($conn,$sql) or die("Sql query failed");
if(mysqli_num_rows($result)>0)
{
	$output=mysqli_fetch_all($result,MYSQLI_ASSOC);
	echo json_encode($output);
}
else{

}
?>