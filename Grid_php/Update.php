<?php
$con=mysqli_connect("localhost","root","","test");
$Id=$_GET['id'];
$select="select * from city where id='$Id'";
$query=mysqli_query($con,$select);
$row=mysqli_fetch_array($query);
        ?>
          
    <form action="" method="post">
           <label for="product">Student Name:</label>
            <input type="text" name="name" id="name" value="<?php echo $row['Name'] ?>"><br><br>
            <label for="price">City:</label>
            <input type="text" name="city" id="city" value="<?php echo $row['City'] ?>"><br><br>
            <input type="submit" value="Update" name="update" onclick="return confirm('It will Update Data')">
            
    </form>
     
<?php

if(isset($_POST['update'])){
    $Name=$_POST['name'];
    $City=$_POST['city'];
    $update="update city set Name='$Name',City='$City' where id='$Id'";
    $query=mysqli_query($con,$update);
    if($query){
        //echo "<script>alert('Updated Successfully')</script>";
        header('location:main.php');
    }
    else{
        echo "<script>alert('Try Again')</script>";
    }
}
?>

