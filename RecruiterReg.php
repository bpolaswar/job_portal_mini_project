<html>
<head>
  <title> Login and Regestration Form</title>
     <link rel="stylesheet" href="style.css">
	 <link rel=stylesheet href="Menu.css">
	<script src="jquery-1.9.1.min.js"></script>
	<script src="validate.js"></script>
	<script >
	$(document).ready(function(){
    $("#datepicker").datepicker();
	});
	</script>
	<script>
	$(document).ready(function(){
	$(".Regester-form").validate({
	rules:
	{
	name:
		{
			required:true,
			minlength:15,
			maxlength:20
		},
	comp:
		{
		required:true,
			minlength:15,
			maxlength:20
		},
	mobile:
		{
		digits:true,
		minlength:10,
		maxlength:10
		},
	web:
		{
		required:true,
		},
		address:
		{
		required:true
		},
		city:
		{
		required:true
		},
		pin:
		{
		digits:true,
		minlength:6,
		maxlength:6
		},
		username:
		{
		required:true,
		minlength:4,
		maxlength:10
		},
		pass1:
		{
		required:true,
		minlength:6,
		maxlength:10
		},
	pass2:
		{
		required:true,
		equalTo:"#pass1"
		}
		},
		messages:
		{	
			name:"please Provide Name",
			comp:"please Provide Company Name",
			//mobile:"Enter Mobile Number",
			address:"please Provide Address",
			city:"please Provide city",
			pin:"Provide valid pin code",
			username:"please Choose username",
			pass1:"please Choose password",
			pass2:"Re-Enter Password"
		}
		});
		});
  </script>

</head>
  <body>
  
    	<section class="">
		<?php
			include 'header2.php';
		?>
	</section>
	<br><br><br><br><br><br>
   <div class="Login-page">
      <div class="form">

  <form class="Regester-form" action="RecruiterReg.php" method=post multipart-data enctype>
        <h1> Recruiter Registration</h1>
		<div align="left"><b>Recruiter Name:</b></div>
        <input type="text" placeholder="Recuiter Name" name="rname"/>
		<div align="left"><b>Company:</b></div>
        <input type="text" placeholder="Company" name="comp"/>
		<div align="left"><b>WebSite:</b></div>
		  <input type="text" placeholder="WebSite" name="web"/>
		  <div align="left"><b>Mobile Number:</b></div>
        <input type="text" placeholder="Mobile number" name="mobile"/>
		<div align="left"><b>E-mail:</b></div>
        <input type="text" placeholder="E-Mail" name="email"/>
		<div align="left"><b>Address:</b></div>
		 <textarea class="name" rows="2" cols="25" name="address">Address
		  </textarea><br>
		  <div align="left"><b>State:</b></div>
		    <select class=name name="state">
		   <option value="Select State">Select State</option>
           <option value="Andhra Pradesh">Andhra Pradesh</option>
		   <option value="Arunachal Pradesh">Arunachal Pradesh</option>
		   <option value="Assam">Assam</option>
		   <option value="Bihar">Bihar</option>
		   <option value="Chandigarh">Chandigarh</option>
		   <option value="Chhttisgarh">Chhattisgarh</option>
		   <option value="Goa">Goa</option>
		   <option value="Gujarat">Gujarat</option>
		   <option value="Haryana">Haryana</option>
		   <option value="Himachal Pradesh">Himachal Pradesh</option>
		   <option value="Jammu and kashmir">Jammu and Kashmir</option>
		   <option value="Jharkhand">Jharkhand</option>
		   <option value="Karnataka">Karnataka</option>
		   <option value="Kerala">Kerala</option>
		   <option value="Madhya Pradesh">Madhya Pradesh</option>
		   <option value="Maharastra">Maharastra</option>
		   <option value="Manipur">Manipur</option>
		   <option value="Meghalaya">Meghalaya</option>
		   <option value="Mizoram">Mizoram</option>
		   <option value="Nagaland">Nagaland</option>
		   <option value="Punjab">Punjab</option>
		   <option value="Odisha">Odisha</option>
		   <option value="Sikkim">Sikkim</option>
		   <option value="Rajasthan">Rajasthan</option>
		   <option value="Tamilnadu">Tamilnadu</option>
		   <option value="Tripura">Tripura</option>
		   <option value="Uttar Pradesh">Uttar Pradesh</option>
		   <option value="Uttarakhand">Uttarakhand</option>
		   <option value="West Bengal">West Bengal</option>
         
		</select>
		<div align="left"><b>Enter City:</b></div>
		<input class=input type="text" name="city" Placeholder="Enter City"><br>
		<div align="left"><b>Enter Pin:</b></div>
		<input class=input type="text" name="pin" placeholder="Enter Pin Code"><br>
		<div align="left"><b>Enter Username:</b></div>
		 <input class=input type=text name="username" placeholder="Choose Username"><br>
		 <div align="left"><b>Enter Password:</b></div>
		 <input class=input type=password name="password" id="pass1" placeholder="Enter Password"><br>
		 <div align="left"><b>Confirm Password:</b></div>
		 <input class=input type=password name="pass2" id="pass2" placeholder="Enter Confirm Password"><br>
		 
		 <input type="checkbox" name="chk" value="I Agree The Terms And Conditions & Privacy Policy" required>I Agree The Terms And Conditions & Privacy Policy<br>
        <input type="submit" name="save" value="Sign Up" style="background:#4CAF50;width:100%;border:0;padding:15px;color:#FFFFFF;font-size:14px;">
        <p style="font-size:20px;"> Alredy Registered ?<a href="RecruiterLogin.php">Login</a></p>
        </form>
     </form>
   </div>
  </div>
  
  <?php
						if(isset($_POST['save'])){
					include 'includes/config1.php';
					
							$rname = $_POST['rname'];
							$comp = $_POST['comp'];
							$web = $_POST['web'];
							$mobile = $_POST['mobile'];
							$email = $_POST['email'];
							$address = $_POST['address'];
							$state = $_POST['state'];
							$city = $_POST['city'];
							$pin = $_POST['pin'];
							$username = $_POST['username'];
							$password = $_POST['password'];
						
					
							$qry = "INSERT INTO `recriterreg`(`rname`, `cname`, `website`, `mobile`, `email`, `address`, `state`, `city`, `pin`, `username`, `password`) 
							VALUES ('$rname','$comp','$web','$mobile','$email','$address','$state','$city','$pin','$username','$password')";
							
							$result = $conn->query($qry);
							if($result == TRUE){
								echo "<script type = \"text/javascript\">
											alert(\"Successfully Registered.\");
											window.location = (\"RecruiterLogin.php\")
											</script>";
							} else{
								echo "<script type = \"text/javascript\">
											alert(\"Registration Failed. Try Again\");
											window.location = (\"RecruiterReg.php\")
											</script>";
							}
						}
						
					  ?>
  
  
  
  <div>
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
</div>
 </body>
</html>