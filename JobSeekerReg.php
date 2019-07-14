<html>
<head>
  <title> Login and Regestration Form</title>
     <link rel="stylesheet" href="style.css">
	 <link rel=stylesheet href="Menu.css">
	 <link rel=stylesheet href="JobSeekerReg.css">
	 <script src="jquery-1.9.1.min.js"></script>
		<script src="jquery-ui.js"></script>
		<script src="validate.js"></script>
		<link rel="stylesheet" href="jquery-ui.css">
	  <script>
  $(document).ready(function(){
    $("#datepicker").datepicker();
	});
	</script>
	<script>
	$(document).ready(function(){
	$("#form").validate({
	rules:
	{
	firstname:
		{
			required:true,
			minlength:15,
			maxlength:20
		},
	lastname:
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
	quali:
		{
		required:true,
		},
	marks:
		{
		required:true,
		digits:true
		},
	university:
		{
		required:true
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
		password:
		{
		required:true,
		minlength:4,
		maxlength:10
		},
	confirm:
		{
		required:true,
		equalTo:"#pass1"
		}
		},
		messages:
		{	
			firstname:"please Provide First Name",
			lastname:"please Provide Last Name",
			//mobile:"Enter Mobile Number",
			quali:"please Provide your Qualification",
			marks:"please Provide marks",
			university:"please Provide University Name",
			address:"please Provide Address",
			city:"please Provide city",
			pin:"Provide valid pin code",
			username:"please Choose username",
			password:"please Choose password",
			confirm:"Re-Enter Password"
		}
		});
		});
  </script>
</head>
  <body>


  
  <section class="">
		<?php
			include 'header1.php';
		?>
	</section>
	<br><br><br><br><br><br>
   <div class="Login-page">
      <div class="form">

  <form class="Regester-form" id="form" method="post">
        <h1> Job Seeker Registration</h1>
		<div align="left"><b>First Name:</b><span>*</span></div>
        <input type="text" placeholder="First Name" name="fname"/>
		<div align="left"><b>Last Name:</b><span>*</span></div>
        <input type="text" placeholder="Last Name" name="lname"/>
		<div align="left"><b>Moblie:</b><span>*</span></div>
		  <input type="text" placeholder="Mob. No " name="mob"/>
		<div align="left"><b>Email:</b><span>*</span></div>
        <input type="email" placeholder="email id" name="email"/>
		<div align="left"><b>Highest Qualification:</b><span>*</span></div>
        <input type="text" placeholder="Highest Qualification" name="quali"/>
		<div align="left"><b>Marks(In Percentage):</b><span>*</span></div>
       <input type="text" placeholder="marks[%]" name="marks"/>
	   <div align="left"><b>University:</b></div>
	    <input type="text" placeholder="University" name="univ"/>
		<div align="left"><b>Job Catagory:</b></div>
		  <select class=name name="jcat">
		  
		  <option value="Select Job Catagory" placeholder="job catagory " >Select Job Catagory</option>
		  <option value="Finance">Finance</option>
		  <option value="Management">Management</option>
		  <option value="Developer">Developer</option>
		  <option value="Tester">Tester</option>
		  <option value="Designer">Designer</option>
		  <option value="Technicial">Technicial</option>
		  <option value="Administrator">Administrator</option>
		  </select><br>
		 
		  <div align="left"><label for="Experience"><b>Experience:</b></label></div>
		  <select class=name name="exp">
		  <option>Experience:</option>
		<option value="0 year">0 year</option>
		<option value="1 year">1 year</option>
		<option value="2 year">2 year</option>
		<option value="3 year">3 year</option>
		<option value="4 year">4 year</option>
		<option value="5 year">5 year</option>
		</select><br>
		<div align="left"><b>Gender:</b><span>*</span></div>
		  <select class=name name="gen">
		  <option>Gender</option>
		<option value="Male">Male</option>
		<option value="Female">Female</option>
		</select><br>
		<div align="left"><b>DOB:</b></div>
		 <input type="text" id="datepicker" class=input placeholder="Enter DOB" name="dob"><br>
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
		 <div align="left"><b>Select City:</b></div>
		  <select class=name name="city">
		   <option value="Select City">Select City</option>
           <option value="Mumbai">Mumbai</option>
		   <option value="Pune">Pune</option>
		   <option value="Hydrabad">Hydrabad</option>
		   <option value="Chennai">Chennai</option>
		   <option value="Delhi">Delhi</option>
		   <option value="Nagpur">Nagpur</option>
		   <option value="Goa">Goa</option>
		   <option value="Indore">Indore</option>
		   <option value="Thane">Thane</option>
		   <option value="Vadodara">Vadodara</option>
		   <option value="Nasik">Nasik</option>
		   <option value="Varanasi">Varanasi</option>
		   <option value="Rajkot">Rajkot</option>
		   <option value="Kerala">Kerala</option>
		   <option value="Ranchi">Ranchi</option>
		   <option value="Vijaywada">Vijaywada</option>
		   <option value="Raipur">Raipur</option>
		   <option value="Nanded">Nanded</option>
		   <option value="Solapur">Solapur</option>
		   <option value="Mysure">Mysure</option>
		   <option value="Noida">Noida</option>
		   <option value="Kochi">Kochi</option>
		   <option value="Kolhapur">Kolhapur</option>
		   <option value="Bhopal">Bhopal</option>
		   <option value="Surat">Surat</option>
		   <option value="Tirupati">Tirupati</option>
		   <option value="Lucknow">Lucknow</option>
		   <option value="Kanpur">Kanpur</option>
		   <option value="Agra">Agra</option>
			   <option value="Other">Other</option>
		</select><br><br>
		<div align=left><b>Other Than Above List:</b></div>
		<input type="text" placeholder="Enter City"><br><br>
		

		<div align="left"><b>Pin:</b></div>
		<input class=input type="text"  placeholder="Enter Pin Code" name="pin"><br>
		<div align="left"><b>Username:</b></div>
		 <input class=input type=text  placeholder="Choose Username" name="username"><br>
		 <div align="left"><b>Password:</b></div>
		 <input class=input type=password  placeholder="Enter Password" name="password" id="pass1"><br>

		 
		 <input type="checkbox" name="chk" value="I Agree The Terms And Conditions & Privacy Policy" required >I Agree The Terms And Conditions & Privacy Policy<br>
               <input type="submit" name="save" value="Sign Up" style="background:#4CAF50;width:100%;border:0;padding:15px;color:#FFFFFF;font-size:14px;">
        <p style="font-size:20px;"> Alredy Regestered ?<a href="JobSeekerLogin.php">Login</a></p>
        </form>
		<?php
						if(isset($_POST['save'])){
					include 'includes/config1.php';
					
							$fname = $_POST['fname'];
							$lname = $_POST['lname'];
							$mob = $_POST['mob'];
							$email = $_POST['email'];
							$quali = $_POST['quali'];
							$marks = $_POST['marks'];
							$univ = $_POST['univ'];
							$jcat = $_POST['jcat'];
							$exp = $_POST['exp'];
							$gen = $_POST['gen'];
							$dob = $_POST['dob'];
							$address = $_POST['address'];
							$state = $_POST['state'];
							$city = $_POST['city'];
							$pin = $_POST['pin'];
							$username = $_POST['username'];
							$password = $_POST['password'];
						
					
							$qry = "INSERT INTO `seerkerreg`(`firstname`, `lastname`, `mobile`, `email`, `highquali`, `marks`, `university`, `jobcat`, `experience`, `gender`, `dob`, `address`, `state`, `city`, `pin`, `username`, `password`)
							VALUES ('$fname','$lname',
							'$mob','$email','$quali','$marks',
							'$univ','$jcat','$exp','$gen','$dob','$address','$state','$city','$pin','$username','$password')";
							
							$result = $conn->query($qry);
							if($result == TRUE){
								echo "<script type = \"text/javascript\">
											alert(\"Successfully Registered.\");
											window.location = (\"JobSeekerLogin.php\")
											</script>";
							} else{
								echo "<script type = \"text/javascript\">
											alert(\"Registration Failed. Try Again\");
											window.location = (\"JobSeekerReg.php\")
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