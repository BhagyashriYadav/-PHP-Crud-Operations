<?php
class FB{
public $link='';
function __construct($Name,$Address,$Email){
$this->connect();
$this->storeInDB($Name,$Address,$Email);
}

function connect(){
	  $this->link = mysqli_connect("localhost","root","") or die('Cannot connect to the DB');
	  mysqli_select_db($this->link,'mydb') or die('Cannot select the DB');
 }

function storeInDB($Name,$Address,$Email){

$query1 = "select * from shri";	
$result1 = mysqli_query($this->link,$query1) or die('Errant query:  '.$query1);
if(mysqli_num_rows($result1)>0)
{

	$query2 = "UPDATE shri SET Email = '".$Email."' , Address='".$Address."' where Name = '".$Name."' " ;
	$result2 = mysqli_query($this->link,$query2) or die('Errant query: '.$query2);
	echo 'Update Successfull';
}
else
{
	echo "fail";
}
}

}
if($_GET['Name'] != ''and $_GET['Address'] != ''and $_GET['Email'] != ''){
$FB = new FB($_GET['Name'],$_GET['Address'],$_GET['Email']);
}
?>