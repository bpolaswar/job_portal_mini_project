<html>
   <head>
    <title> Login and Regestration Form</title>
    <link rel="stylesheet" href="style.css">
	<link rel=stylesheet href="menu.css">
	<style>
	.form{background-color:gray;}
	</style>
	<script src="jquery-1.9.1.min.js"></script>
	<script src="validate.js"></script>
	
	
	<script>
$(document).ready(function(){
$("form").validate({
rules:
{
username:
{
required:true,
minlength:4,
maxlength:10
},
password:
{
required:true,
minlength:4,
maxlength:10
}
},
messages:
{
username:"Enter Username",
password:"Enter Password"
}


});
});
</script>
	
	
</head>
   <body>
   
   <div id="header">
<img src="logo2.jpg" align="center">
</div>

  <br><br><br><br><br><br>
        <div class="Login-page">
        <div>
        <form class="form" method="post">
        <h1>Login Here</h1>
        <input type="text" placeholder="User name" name="username"/>
        <input type="password" placeholder="Password" name="password"/>
        <input type="submit" name="log" value="Login" style="background:#4CAF50;width:100%;border:0;padding:15px;color:#FFFFFF;font-size:14px;">

          </form>
        </div>
     </div>
	 
	 <?php
				if(isset($_POST['log'])){
					include 'includes/config1.php';
					session_start();
					$uname = $_POST['username'];
					$pass = $_POST['password'];
					
					/*$qy = "SELECT * FROM recriterreg WHERE username = '$uname' AND password = '$pass'";
					$log = $conn->query($qy);
					$num = $log->num_rows;
					$row = $log->fetch_assoc();
					if($num > 0){
						session_start();
						$_SESSION['username'] ='$uname';
						$_SESSION['password'] = '$pass';*/
						if($uname=='Admin' AND $pass== 'Admin@1234')
						{
						echo "<script type = \"text/javascript\">
									alert(\"Login Successful.................\");
									window.location = (\"AdminSite.php\")
									</script>";
						}
					 else{
						echo "<script type = \"text/javascript\">
									alert(\"Login Failed. Try Again................\");
									window.location = (\"AdminLogin.php\")
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