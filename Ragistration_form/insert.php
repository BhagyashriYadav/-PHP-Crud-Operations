<?php
//include db connection
$con=mysqli_connect("localhost","root","","forms");

if(isset($_POST['submit'])){
    $NAME=$_POST['name'];
    $ADDRESS=$_POST['address'];
    $EMAIL=$_POST['email'];
     $GENDER=$_POST['gender'];
     $LANGUAGES=$_POST['lang'];
     $chk="";
     $DOB=$_POST['dob'];
     $CITY=$_POST['city'];
     foreach($LANGUAGES as $chk1)
     {
        $chk .=$chk1.",";
     }

    //insert data
    echo $CITY;
    $sql="INSERT INTO StudInfo(StudentName,Address,EmailID,Gender,Languages,DOB,City) VALUES ('$NAME','$ADDRESS','$EMAIL','$GENDER','$chk',' $DOB','$CITY')";
    echo $sql;
    if(mysqli_query($con,$sql))
    {
        echo"Record Saved";
    }
}
?>





