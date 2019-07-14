<html>
   <head>
    <title> Login and Regestration Form</title>
    <link rel="stylesheet" href="style.css">
	<link rel=stylesheet href="menu.css">
	<link rel=stylesheet href="login.css">
	<script src="jquery-1.9.1.min.js"></script>
	<script src="validate.js"></script>
	
</head>
   <body>
  	
		<?php
			include 'header1.php';
		?>
	<br><br><br><br><br><br>
        <div class="Login-page">
        <div class="form">
        <form method="post">
        <h1>Job Seeker Login</h1>
       <input type="text" placeholder="User name" name="username"/><br>
       <input type="Password" placeholder="Password" name="password"/><br>
	   
	    <br />
		
	   
        <input type="submit" name="log" value="Login Here" style="background:#4CAF50;width:100%;border:0;padding:15px;color:#FFFFFF;font-size:14px;">
       <p style="font-size:20px;">Not Registred..?<a href="JobSeekerReg.php">Signup</a></p>
          </form>
		  
		  <?php
				if(isset($_POST['log'])){
					include 'includes/config1.php';
					
					$uname = $_POST['username'];
					$pass = $_POST['password'];
					
					$qy = "SELECT * FROM seerkerreg WHERE username = '$uname' AND password = '$pass'";
					$log = $conn->query($qy);
					$num = $log->num_rows;
					$row = $log->fetch_assoc();
					if($num > 0){
						session_start();
						$_SESSION['username'] = $row['username'];
						$_SESSION['password'] = $row['password'];
						echo "<script type = \"text/javascript\">
									alert(\"Login Successful.................\");
									window.location = (\"Home1.php\")
									</script>";
					} else{
						echo "<script type = \"text/javascript\">
									alert(\"Login Failed. Try Again................\");
									window.location = (\"JobSeekerLogin.php\")
									</script>";
					}
				}
			?>
		  
		  
		  
		  
        </div>
     </div>
	 
	 
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