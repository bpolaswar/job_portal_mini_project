<html>
<head>
<link rel=stylesheet href="Menu.css">
<link rel="stylesheet" href="style.css">
<style>
input.Reset:hover , input.Reset:active
{
background: #43A047;
}
</style>

<script src="jquery-1.9.1.min.js"></script>
<script src="validate.js"></script>
<!--<script type="text/javascript">
function call1()
{
alert("Feedback Added");
document.getElementById("name").value="";
document.getElementById("email").value="";
document.getElementById("mob").value="";
document.getElementById("des").value="";
}
</script>-->
<script>
$(document).ready(function(){
$(".Feedback-form").validate({
rules:
{
	name:
	{
		required:true,
		minlength:10,
		maxlength:20
	},
	mob:
	{
		required:true,
		digits:true,
		minlength:10,
		maxlength:10
	},
		des:
		{
		required:true,
		}
},
messages:
{
name:"Please Enter Name with Min Length 10",
mob:"Please Enter Valid Mobile Number"
}
});
});

</script>
</head>
<body>
<div id="header">
<img src="logo2.jpg" align="center">
</div>
<center>
<div id="menu">
<ul class="nav">
    <li><a href="Home1.php">Home</a></li>
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
  </ul>
  </div><br><br><br><br><br><br>
  </center>

<form class="Feedback-form" method="post">
<div class="form" width="40%">
<h3><u>Give Feedback or report an issue</u></h3><br>
We value your suggestions. We will try to revert at the earliest!<br><br>
<div align="left"><b>Name:</b><div>
<input type="text" placeholder="Name" name="name" id="name" size="33"><br><br>
<div align="left"><b>Email:</b><div>
<input type="email" placeholder="Email" name="email" id="email" size="33"><br><br>
<div align="left"><b>Mobile No.:</b><div>
<input type="text" placeholder="Phone No." name="mob" id="mob" size="30"><br><br>
<div align="left"><b>Reason:</b><div>
<select name="reason">
<option value="General">General
<option value="Report A Job">Report A Job
</select><br><br>
<div align="left"><b>Description:</b><div>
<textarea cols=35 rows=8 name="des" id="des"></textarea><br><br><br>
<div align="left"><b>Attach File:</b><div>
<input type=file name="filename" placeholder="attach File">
<div align="left"><b>Type:</b><div>
<select class=name name="type" >
		  
		  <option value="Job Seeker">Job Seeker</option>
		  <option value="Job Recruiter">Job Recruiter</option>
</select>		  
<input type="submit" name="submit" value="Submit" style="background:#4CAF50;width:100%;border:0;padding:15px;color:#FFFFFF;font-size:14px;">
<input class="Reset" type="Reset" id="Reset" value="Reset" style="background:#4CAF50;width:100%;border:0;padding:15px;color:#FFFFFF;font-size:14px;">
</div>
</form>

<?php
						if(isset($_POST['submit'])){
					include 'includes/config1.php';
					$f1=0;
							$name = $_POST['name'];
							$email = $_POST['email'];
							$mob = $_POST['mob'];
							$reason = $_POST['reason'];
							$des = $_POST['des'];
							$filename = $_POST['filename'];
							$type = $_POST['type'];
							$qry = "INSERT INTO `feedback`(`name`, `email`, `mob`, `reason`, `des`,`attachfile`, `type`) 
							VALUES('$name','$email','$mob','$reason','$des','$filename','$type')";
							
							$result = $conn->query($qry);
							if($result == TRUE){
								echo "<script type = \"text/javascript\">
											alert(\"Feedback Submited\");
											
											</script>";
							} 
						}
						
					  ?>


</center>
</body>

		   


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

</html>