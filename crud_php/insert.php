<?php
class FB{
    public $link='';
    function __construct($name,$address,$email){
        $this->connect();
        $this->storeInDB($name,$address,$email);
    }
    function connect(){
        $this->link = mysqli_connect("localhost","root","") or die('Cannot connect to the DB');
        mysqli_select_db($this->link,'mydb') or die('Cannot select the DB');
       }
function storeInDB($name,$address,$email){
    $query="INSERT INTO shri(Name,Address,Email) VALUES ('$name','$address','$email')";
    $result = mysqli_query($this->link,$query) or die('Errant query:  '.$query);
    echo "Registration Success";

  }
  
 
}
if($_GET['name'] != ''and $_GET['address'] != '' and $_GET['email'] !=''){
 	$FB=new FB($_GET['name'],$_GET['address'],$_GET['email']);
}
?>
