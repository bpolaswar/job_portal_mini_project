<html>
<head>
<link rel=stylesheet href="style.css">
<link rel=stylesheet href="Menu.css">
</head>
<body>
		
		<?php
			include 'header1.php';
			include 'includes/config1.php';
		
		?>
	<br><br><br><br><br><br>
	<?php
					if(($_SESSION['username'] && ($_SESSION['password'])  )){
						
						
						$sel = "SELECT * FROM seerkerreg WHERE username = '".$_SESSION['username']."'";
						$rs = $conn->query($sel);
						$rws = $rs->fetch_assoc();
					}
					
					 else
						{
							echo "<script type = \"text/javascript\">
											alert(\"Pleae Login First\");
											window.location = (\"JobSeekerLogin.php\")
											</script>";
						}
				?>
				
	<div class="ApplyJob-page">
        <div class="form">
        <form class="applyjob-form" method="post" enctype="multipart/form-data">
		<h2>Update Form</h2>
		<div align="left"><b>First Name:</b><span>*</span></div>
        <input type="text" placeholder="First Name" name="fname" value="<?php echo $rws['firstname'];?>"/>
		
		<div align="left"><b>Last Name:</b><span>*</span></div>
        <input type="text" placeholder="Last Name" name="lname" value="<?php echo $rws['lastname'];?>"/>
		
		<div align="left"><b>Moblie:</b><span>*</span></div>
		  <input type="text" placeholder="Mob. No " name="mob" value="<?php echo $rws['mobile'];?>"/>
		  
		<div align="left"><b>Highest Qualification:</b><span>*</span></div>
        <input type="text" placeholder="Highest Qualification" name="quali" value="<?php echo $rws['highquali'];?>"/>
		
		<div align="left"><b>Marks(In Percentage):</b><span>*</span></div>
       <input type="text" placeholder="marks[%]" name="marks" value="<?php echo $rws['marks'];?>"/>
	   
	   <div align="left"><b>University:</b></div>
	    <input type="text" placeholder="University" name="univ" value="<?php echo $rws['university'];?>"/>
		
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
		 <input type="text" id="datepicker" class=input placeholder="Enter DOB" name="dob" value="<?php echo $rws['dob'];?>"><br>
		 
		 <div align="left"><b>Address:</b></div>
		  <textarea class="name" rows="2" cols="25" name="address" value="<?php echo $rws['address'];?>">Address
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
		<input type="text" placeholder="Enter City" name="cty"><br><br>
		

		<div align="left"><b>Pin:</b></div>
		<input class=input type="text"  placeholder="Enter Pin Code" name="pin" value="<?php echo $rws['pin'];?>"><br>
		
		 <div align="left"><b>Password:</b></div>
		 <input class=input type=password  placeholder="Enter Password" name="password" id="pass1" value="<?php echo $rws['password'];?>"><br>
		<input type="submit" name="update" value="Update" style="background:#4CAF50;width:100%;border:0;padding:15px;color:#FFFFFF;font-size:14px;"> 
		 </form>
					
		 <?php
		 
						if(isset($_POST['update'])){
					include 'includes/config1.php';
							$fname = $_POST['fname'];
							$lname = $_POST['lname'];
							$mob = $_POST['mob'];
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
							$cty = $_POST['cty'];
							$pin = $_POST['pin'];
							$password = $_POST['password'];
							
							$qry = "UPDATE `seerkerreg` 
							SET `firstname`='$fname',`lastname`='$lname',`mobile`='$mob',
							`highquali`='$quali',`marks`='$marks',`university`='$univ',
							`jobcat`='$jcat',`experience`='$exp',`gender`='$gen',`dob`='$dob',
							`address`='$address',`state`='$state',`city`='$city',`pin`='$pin',
							`password`='$password' where username = '".$_SESSION['username']."'";
							
							$result = $conn->query($qry);
							if($result == TRUE){
								echo "<script type = \"text/javascript\">
											alert(\"Successful.\");
											
											</script>";
							} 
							
						}
						
					  ?>
		 
		
		  