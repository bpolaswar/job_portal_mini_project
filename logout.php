
<?php 
echo "<script type = \"text/javascript\">
									alert(\"You Are Logged Out Successfully................\");
									</script>";
									
									?>

<?php
	session_start();
	session_destroy();
	
	header("location:Home1.php");
?>