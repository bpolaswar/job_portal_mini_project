<?php
if(isset($POST['upload']))
{
include 'includes/config1.php';

	
	$file_name= $_FILES['file']['name'];
	$file_type= $_FILES['file']['type'];
	$file_size= $_FILES['file']['size'];
	$img=$_FILES['file']['name'];
	$temp=$_FILES['file']['tmp'];
	
	/*$file_tem_Loc= $_FILES['file']['tmp_name'];
	$file_store="feedback/".$file_name;*/
	
	move_uploaded_file($temp,"feedback/$img");
	
	$sql="insert into feedback(attachfile) values ('$file_name')";

	
	
	if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
}

?>
<html>
<head></head>
<body>
<form action="?" method="POST" enctype="multipart/form-data">

<input type="file" name="file">
<input type="submit" name="upload" value="Upload">
</form>



</body>
</html>