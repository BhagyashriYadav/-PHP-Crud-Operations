<?php
class FB{
public $link='';
function __construct($fname,$email,$prn){
$this->connect();
$this->storeInDB($fname,$email,$prn);
}

function connect(){
	  $this->link = mysqli_connect('182.50.133.77','prabudh','Prabudh@123') or die('Cannot connect to the DB');
	  mysqli_select_db($this->link,'prabudhbharat') or die('Cannot select the DB');
 }

function storeInDB($fname,$email,$prn){




$query1 = "select * from Student_Info";	
$result1 = mysqli_query($this->link,$query1) or die('Errant query:  '.$query1);
if(mysqli_num_rows($result1)>0)
{

	$query2 = "UPDATE Student_Info SET Email = '".$email."', PRN='".$prn."' where First_Name = '".$fname."' " ;
	$result2 = mysqli_query($this->link,$query2) or die('Errant query: '.$query2);
	echo 'Update Successfull';
}
else
{
	echo "fail";
}
}

}
if($_GET['fname'] != ''and $_GET['email'] != '' and $_GET['prn'] != ''){
$FB = new FB($_GET['fname'],$_GET['email'],$_GET['prn']);
}
?>