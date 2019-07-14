<?php





if(isset($_POST['upload']))
{
	$conn = mysqli_connect("localhost","root","","job");
	

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
	
	
	$file_name= $_FILES['file']['name'];
	$file_type= $_FILES['file']['type'];
	$file_size= $_FILES['file']['size'];
	$file_tem_Loc= $_FILES['file']['tmp_name'];
	$file_store="feedback/".$file_name;
	
	move_uploaded_file($file_tem_Loc, $file_store);
	
	$sql=("insert into feedback(attachfile) values ('$file_name')");

	
	
	if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
}



?>

<html>
<head>
	<title>File Uploader</title>
	</head>
	<body>
		<form action="?" method="post" enctype="multipart/form-data">
		
		<label>File Uploader</label>
			<input type="file" name="file"/>
			<input type="submit" name="upload" value="Upload">
		
		
		</form>
	</body>

</html>