<?php
header('Content-Type: application/json');

class FB{
    public $link='';
    function __construct($Value1,$Value2){
     $this->connect();
     $this->storeInDB($Value1,$Value2);
    }
    
    function connect(){
     $this->link = mysqli_connect('localhost','root','') or die('Cannot connect to the DB');
     mysqli_select_db($this->link,'mydb') or die('Cannot select the DB');
    }
    
    function storeInDB($Value1,$Value2){
   
   $sql="SELECT * from Mobile_SMS where date BETWEEN '".$Value1."' AND '".$Value2."' order By id DESC";
   $result=mysqli_query($this->link,$sql) or die("Sql query failed");
   if(mysqli_num_rows($result)>0)
   {
    $output=mysqli_fetch_all($result,MYSQLI_ASSOC);
	echo json_encode($output);
   }
    
   }
}
   if($_GET['Value1'] != '' and $_GET['Value2'] != ''){
   
    $FB=new FB($_GET['Value1'],$_GET['Value2']);
   }

?>
