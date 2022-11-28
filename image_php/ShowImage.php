<?php
header('Content-Type: application/json');

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
   
   $sql="SELECT image_path,CurName from UploadImage where id='".$id."'";
   $result=mysqli_query($this->link,$sql) or die("Sql query failed");
   if(mysqli_num_rows($result)>0)
   {
    $output=mysqli_fetch_all($result,MYSQLI_ASSOC);
	echo json_encode($output);
   }
    
   }
}
   if($_GET['id'] != ''){
   
    $FB=new FB($_GET['id']);
   }

?>
