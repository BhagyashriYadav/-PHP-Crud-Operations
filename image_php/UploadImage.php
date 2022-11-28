<?php
error_reporting(0);

$msg = "";

// If upload button is clicked ...
if (isset($_POST['upload'])) {

	$filename = $_FILES["uploadfile"]["name"];
	$tempname = $_FILES["uploadfile"]["tmp_name"];
	$folder = "./image/" . $filename;

	$db = mysqli_connect("182.50.133.77','prabudh','Prabudh@123",'prabudhbharat');
  $filepath2='http://mymarketing.ecssofttech.com/uploaddata'.$filename;  
	// Get all the submitted data from the form
  $query = "insert into UploadImage set UploadImage='".$filepath2."'";
	//$sql = "INSERT INTO UploadImage (filename) VALUES ('$filename')";

	// Execute query
	mysqli_query($db, $sql);

	// Now let's move the uploaded image into the folder: image
	if (move_uploaded_file($tempname, $folder)) {
		echo "<h3> Image uploaded successfully!</h3>";
	} else {
		echo "<h3> Failed to upload image!</h3>";
	}
}
?>

<!DOCTYPE html>
<html>

<head>

<body>

		<form method="POST" action="" enctype="multipart/form-data">
		
				<input class="form-control" type="file" name="uploadfile" value="" />
			
		
				<button class="btn btn-primary" type="submit" name="upload">UPLOAD</button>
				<div id="display-image">
		</form>
	
	
		<?php
		$query = " select * from UploadImage ";
		$result = mysqli_query($db, $query);

		while ($data = mysqli_fetch_assoc($result)) {
		?>
			<img src="http://mymarketing.ecssofttech.com/uploaddata/<?php echo $data['filename']; ?>">

		<?php
		}
		?>

</body>

</html>

