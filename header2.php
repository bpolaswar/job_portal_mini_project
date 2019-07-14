<html>
<head>
<link rel="stylesheet" type="text/css" href="menu.css">
</head>




<?php
	session_start();
	error_reporting("E-NOTICE");
?>
<body>
  <div id="main">
			<div id="header">
<img src="logo2.jpg" align="center">
</div>
	
		<header>		
				 
        
					<?php
						if(!$_SESSION['username'] && (!$_SESSION['password'])){
					?>
			 <center>
<div id="menu">
<ul class="nav">
    <li><a href="Home1.php">Home</a></li>
	 <li><a href="job1.php">Job's</a></li>
    <li><a href="#">Job Seeker</a>
      <ul>
        <li><a href="JobSeekerReg.php">Registration</a></li>
        <li><a href="JobSeekerLogin.php">Login</a></li>
        <li><a href="ApplyJob.php">Apply Job</a></li>
      </ul>
    </li>
    <li><a href="#">Recuiter</a>
      <ul>
        <li><a href="RecruiterReg.php">Registration</a></li>
        <li><a href="RecruiterLogin.php">Login</a></li>
		<li><a href="PostAJob.php">Post A Job</a></li>
      </ul>
    </li>
 
    <li><a href="ContactUs.php">Contact Us</a></li>
    <li><a href="AboutUs.php">About Us</a></li>
	<li><a href="AdminLogin.php">Admin</a></li>
  </ul>
  </div>
  </center>
					<?php
						} else{
					?>
					<center>
<div id="menu">
<ul class="nav">
<li><a href="Home2.php">Home</a></li>
		<li><a href="PostAJob.php">Post A Job</a></li>
		<li><a href="job2.php">Job's</a></li>
		    <li><a href="ContactUs.php">Contact Us</a></li>
    <li><a href="AboutUs.php">About Us</a></li>
		<li><a href="Feedback.php">Feedback</a></li>
      </ul>
    </li>

  </ul>
  </div>
  </center>

							<?php
							include 'includes/config1.php';
						$sel = "SELECT * FROM  recriterreg WHERE username = '".$_SESSION['username']."'";
						$rs = $conn->query($sel);
						$rws = $rs->fetch_assoc();
							?>
							
					<a style="letter-spacing: 2px; float:right; font-size:13px; color:white; text-decoration:none;" href="logout.php">Welcome&nbsp;<?php echo $rws['rname'];?>&nbsp;<span>|</span>&nbsp;Logout</a>
					<?php
						}
					?>
					
		
			
		</header>
		
		</body>
		</html>