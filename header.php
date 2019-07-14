<center>
<div id="menu">
<ul class="nav">

					<?php
						if($_SESSION['username'] && ($_SESSION['password'])){
					?>


    <li><a href="Home1.php">Home</a></li>
    <li><a href="#">Job Seeker</a>
      <ul>
        <li><a href="JobSeekerReg.php">Registration</a></li>
        <li><a href="JobSeekerLogin.php">Login</a></li>
        <li><a href="job1.php">Apply Job</a></li>
      </ul>
	     
    </li>
	 <li><a href="Feedback.php">Feedback</a></li>
    <li><a href="ContactUs.php">Contact Us</a></li>
    <li><a href="AboutUs.php">About Us</a></li>
	
	<?php
							include 'includes/config1.php';
						$sel = "SELECT * FROM seerkerreg WHERE username = '".$_SESSION['username']."'";
						$rs = $conn->query($sel);
						$rws = $rs->fetch_assoc();
							?>
	
	
	
	
	
	<a style="letter-spacing: 2px; float:right; font-size:13px; color:white; text-decoration:none;" href="logout.php">Welcome&nbsp;<?php echo $rws['firstname'];?>&nbsp;<span>|</span>&nbsp;Logout</a>						

	<?php
						}else
						{
					?>
	
	
	
    <center>
<div id="menu">
<ul class="nav">
    <li><a href="#">Home</a></li>
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
    <li><a href="Feedback.php">Feedback</a></li>
    <li><a href="ContactUs.php">Contact Us</a></li>
    <li><a href="AboutUs.php">About Us</a></li>
	<li><a href="AdminLogin.php">Admin</a></li>
  </ul>
  </div>
  </center>
  <?php
						}
					?>
  