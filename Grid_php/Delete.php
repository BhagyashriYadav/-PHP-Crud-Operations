<?php
$con=mysqli_connect("localhost","root","","test");
$Id=$_GET['id'];
$delete= "delete from city where id='$Id'";
$query=mysqli_query($con,$delete);
if($query){
   
    header('location:main.php');
}
else{
    echo "<script>alert('Try Again')</script>";
}
?>

