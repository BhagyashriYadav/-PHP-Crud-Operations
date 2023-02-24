<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Show Data in GridView</title>
</head>
<body>
<center>
      <form action="" method="post">
       <label for="product">Student Name:</label>
        <input type="text" name="name" id="name"><br><br>
        <label for="price">City:</label>
        <input type="text" name="city" id="city"><br><br>
        <input type="submit" value="Insert" name="save"> 
    </form>
    <?php
$con=mysqli_connect("localhost","root","","test");
if(isset($_POST['save']))
{
    $Name=$_POST['name'];
    $City=$_POST['city'];
    $sql="insert into city(Name,City) values('$Name','$City')";
    $query=mysqli_query($con,$sql);
    if($query)
    {
        //echo "<script>alert('saved successsfully!')</script>";
    }
    else{
        echo "error";
    }
}
?>
<h3>List-View</h3>
<table border="1px" cellpadding="10px" cellspacing="0">
    <tr>
        <th>ID</th>
        <th>Student Name</th>
        <th>City</th>
        <th colspan="2">Actions</th>
    </tr>
    <?php
        $sql="select * from city";
        $query=mysqli_query($con,$sql);
        $row=mysqli_num_rows($query);
        if($row){
           while($res=mysqli_fetch_array($query))
           {
            ?>
            <tr>
                <td><?php echo $res['id']?></td>
                <td><?php echo $res['Name']?></td>
                <td><?php echo $res['City']?></td>
                <td><a href="Update.php?id=<?php echo $res['id']; ?>">Update</a></td>
                <td><a onclick="return confirm('Are you sure,you want to delete?')" href="Delete.php?id=<?php echo $res['id']; ?>">Delete</a></td>
            </tr>
            <?php
           }
        }
        else{
            ?>
            <tr>
                <td colspan="3"><?php echo "No Record Found" ?></td>
            </tr>
            <?php
        }
    ?>
</table> 
   </center>
</body>
</html>