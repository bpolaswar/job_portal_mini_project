<html>
<head>
<link rel=stylesheet href="style.css">
</head>
<?php
			include 'header1.php';
		?>
		<body>
		<?php
						include 'includes/config1.php';
						$sel ="SELECT *
FROM applyjob
WHERE username = '".$_SESSION['username']."'
ORDER BY ref_id DESC; ";
						$rs = $conn->query($sel);
						$rws = $rs->fetch_assoc();
			?>
		
		<b>Hello</b> <?php echo $rws['name'];?> Thanks for applying job Note Your Reference id <h1><?php echo $rws['ref_id'];?></h1>
		
		
		
		</body>
		
		</html>