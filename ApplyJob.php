<html>
<head>
<link rel=stylesheet href="style.css">
<link rel=stylesheet href="Menu.css">
		<script src="jquery-1.9.1.min.js"></script>
		<script src="jquery-ui.js"></script>
		<script src="validate.js"></script>
		<link rel=stylesheet href="jquery-ui.css">
  <script>
  $( function() {
    $( "#date" ).datepicker();
  } );
  </script>
  <script>
 $(document).ready(function(){
	$(".applyjob-form").validate({
	rules:
	{
	name:
		{
			required:true,
			minlength:5,
			maxlength:20
		},
		worktype:
		{
		required:true
		}
		},
		messages:
		{	
			firstname:"please Provide First Name",
			//email:"please Provide Email"
			worktype:"Please Work Type"
		}
		});
		});
		</script>
</head>
<body>

  

		<?php
			include 'header1.php';
		?>
	
	<br><br><br><br><br><br>
	<?php
					if(($_SESSION['username'] && ($_SESSION['password'])  )){
						
				?>
	
	
<div class="ApplyJob-page">
        <div class="form">
        <form class="applyjob-form" method="post" enctype="multipart/form-data">
		<h2>Apply Job Form</h2>
		<div align="left"><b>Name:</b></div>
<input type=text placeholder="Name" name="name" value="<?php echo $rws['firstname'];?>"><br><br>
<div align="left"><b>Email:</b></div>
<input type=email placeholder="Email" name="email" value="<?php echo  $rws['email'];?>"><br><br>
<div align="left"><b>Mobile No.:</b></div>
<input type="text" placeholder="Enter Mobile Number" name="mob" value="<?php echo $rws['mobile'];?>"><br><Br>
<div align="left"><b>Work Time:</b></div>
<select name="worktype">
		<option value="PartTime">PartTime</option>
		<option value="FullTime">Fulltime</option>
		<option value="Remote">Remote</option>
		</select><br><br>
		<br><Br>
		  
		  <div align="left"><b>Upload Resume:</b></div><br>
		  <input type="file" placeholder="Choose Resume" name="resume"><br><br>
		  <input type="submit" name="apply" value="Apply" style="background:#4CAF50;width:100%;border:0;padding:15px;color:#FFFFFF;font-size:14px;">
		  </form>
		  </div>
		  </div>
		  <?php
					} else
						{
							echo "<script type = \"text/javascript\">
											alert(\"Pleae Login First\");
											window.location = (\"JobSeekerLogin.php\")
											</script>";
						}
				?>	
		  
		  
		  
		  
		  
		   <?php
						if(isset($_POST['apply'])){
					include 'includes/config1.php';
					$f1=0;
							$name = $_POST['name'];
							$email = $_POST['email'];
							$mob = $_POST['mob'];
							$worktype = $_POST['worktype'];
							$jcat = $_POST['jcat'];
							$skill = $_POST['skill'];
							$target_dir="resume/";
							$target_file=$target_dir.basename($_FILES["resume"]["name"]);
							$uploadok=1;
							$filetype=pathinfo($target_file,PATHINFO_EXTENSION);
							
							if($filetype!="docx" && $filetype!="doc"){
								echo "sorry";
								$uploadok=0;
							}else{
								if(move_uploaded_file($_FILES["resume"]["tmp_name"],$target_file)){
									
									$f1=1;
								}else{
									echo "sorry";
								}
							}
							
							/*$resume = $_FILES['resume']['name'];
							
						
							$tmp=$_FILES['resume']['tmp'];
							file_get_contents($tmp,"resume/");*/
							$qry = "INSERT INTO `applyjob`(`name`, `email`, `mobileno`, `worktime`, `resume`,username) 
							VALUES('$name','$email','$mob','$worktype','$resume','".$_SESSION['username']."')";
							
							$result = $conn->query($qry);
							if($result == TRUE){
								echo "<script type = \"text/javascript\">
											alert(\"Successful.\");
											window.location = (\"success.php\")
											</script>";
							} else{
								echo "<script type = \"text/javascript\">
											alert(\" Failed. Try Again\");
											window.location = (\"ApplyJob.php\")
											</script>";
							}
						}
						
					  ?>
					  
					  
		  
		  
		  
		  
		  	  <center>
<footer>
<b><p style="color:white;font-size:25px">All Rights Reserved @JobPortal.Com </p></b>
<p style="color:white;font-size:25px" >Website Developed By Bhumesh & Yogesh</p>
<b style="color:white;font-size:20px">Follow Us At</b><br>
<a href="https://www.facebook.com/JobPortal"><img src="icon-fb.png"></img></a>
<a href="https://plus.google.com/JobPortal"><img src="icon-gp.png"></img></a>
<a href="https://www.instagram.com/JobPortal"><img src="icon-ig.png"></img></a>
<a href="https://in.pinterest.com/JobPortal"><img src="icon-pt.png"></img></a>
<a href="https://twitter.com/JobPortals"><img src="icon-tw.png"></img></a>

</footer>
</center>
		  </body>
		  </html>