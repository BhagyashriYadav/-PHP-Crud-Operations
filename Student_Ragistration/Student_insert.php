<?php
//include db connection
$con=mysqli_connect("182.50.133.77","prabudh","Prabudh@123","prabudhbharat");

if(isset($_POST['submit'])){
    $ID=$_POST['id'];
    $First_Name=$_POST['fname'];
    $Middle_Name=$_POST['mname'];
    $Last_Name=$_POST['lame'];
    $Std=$_POST['std'];
    $Email=$_POST['email'];
    $PRN=$_POST['prn'];
    $Subject=$_POST['sub'];
    $Marks=$_POST['marks'];
    $Intrest=$_POST['intrest'];


    //insert data
    $sql="INSERT INTO Student_Info(ID,First_Name,Middle_Name,Last_Name,Std,Email,PRN,Subject,Marks,Intrest) VALUES ('$ID','$First_Name','$Middle_Name','$Last_Name','$Std','$Email',' $PRN','$Subject','$Marks','$Intrest')";
    //echo $sql;
    if(mysqli_query($con,$sql))
    {
        echo"Record Saved";
    }
}
?>