<?php
class FB{
 public $link='';
 function __construct($id){
  $this->connect();
  $this->storeInDB($id);
 }
 
 function connect(){
  $this->link = mysqli_connect('localhost','root','') or die('Cannot connect to the DB');
  mysqli_select_db($this->link,'mydb') or die('Cannot select the DB');
 }
 
 function storeInDB($id){
	 
	
	 
  $query = "delete from UploadImage where id='".$id."'";
  $result = mysqli_query($this->link,$query) or die('Errant query:  '.$query);
echo 'Deleted Successfully';
  }
 
}
if($_GET['id'] != '' ){
 $FB=new FB($_GET['id']);
}
?>
