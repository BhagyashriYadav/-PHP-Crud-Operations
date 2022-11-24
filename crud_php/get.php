<?php




class FB{
    public $link='';
    function __construct($name,$address,$email,$no,$pass, $sub,$gender){
        $this->connect();
        $this->storeInDB($name,$address,$email,$no,$pass, $sub,$gender);
    }
function connect(){
    $this->link=mysqli_connect("localhost","root","") or die('can not connect to DB');
    mysqli_select_db($this->link,'mydb') or die('can not connect DB');
}
function storeInDB($name,$address,$email,$no,$pass, $sub,$gender){
    $query="INSERT INTO StudInfo1(StudentName,Address,EmailID,Mobile,Password,Subject,Gender) VALUES ('$name','$address','$email','$no','$pass', '$sub','$gender')";
    $result = mysqli_query($this->link,$query) or die('Errant query:  '.$query);

  }
  
 
}
if($_GET['name'] != ''and $_GET['address'] != '' and $_GET['email'] != '' and $_GET['no'] != '' and $_GET['pass'] != '' and $_GET['sub'] != '' and $_GET['gender'] !=''){
 	$FB=new FB($_GET['name'],$_GET['address'],$_GET['email'],$_GET['no'],$_GET['pass'],$_GET['sub'],$_GET['gender']);
}
?>

