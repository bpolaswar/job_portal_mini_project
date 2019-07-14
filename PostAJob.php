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
    $( "#closing" ).datepicker();
  } );
  </script>
  <script>
  $(document).ready(function(){
  $(".postjob-form").validate({
  rules:
	{
	jtype:
		{
		required:true
		},
	email:
		{
		required:true
		},
	des:
		{
		required:true
		},
	cdate:
		{
		required:true
		},
	cname:
		{
		required:true,
		minlength:3,
		maxlength:10
		},
	cweb:
		{
		required:true
		},
		cdes:
		{
		required:true
		}
  },
  messages:
  {
	jtype:"Please enter Job type",
	email:"Please enter email id",
	des:"Please enter Job details",
	cadte:"Please provide closing date",
	cname:"please provide company name",
	cweb:"Please provide company website",
	cdes:"please Provide company Description"
  }
  });
  });
  
  </script>
  
  
  
</head>
<body>

 
		<?php
			include 'header2.php';
		?>
<?php
					if(($_SESSION['username'] && ($_SESSION['password'])  )){
						
				?>
	
	<br><br><br><br><br><br>
<div class="Login-page">
        <div class="form">
        <form class="postjob-form" method="post">
<center><h2>Post A Job</h2></center>
<b></b><br>
<div align=left><b>Designation:</b></div>
<input type=text placeholder="Designation" name="desig"><br><br>

<div align=left><b>Job Title:</b></div>
<input type=text placeholder="JOB TITLE" name="jtitle"><br><br>
<div align=left><b>Location:</b></div>
<input type=text placeholder="LOCATION(Optional)e.g London" name="loc"><br>
<div align=left><b>Application Email:</b></div>
<input type=text placeholder="APPLICATION EMAIL/URL" name="email"><br>
<div align=left><b>Job Region:</b></div>
<select name="state">
		   <option value="Select Region">Select State</option>
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
         
		</select><br>
		<div align=left><b>Job Type:</b></div>
		<select name="jtype">
		<option value="JOB TYPE">JOB TYPE</option>
		<option value="Freelancer">Freelancer</option>
		<option value="PartTime">PartTime</option>
		<option value="FullTime">Fulltime</option>
		<option value="Internship">Internship</option>
		<option value="Temopary">Temporary</option>
		</select><br>
		<div align=left><b>Job Catagory:</b></div>
		<select name="jcat">
		  <option value="Select Job Catagory">Select Job Catagory</option>
		  <option value="Developer">Developer</option>
		  <option value="Tester">Tester</option>
		  <option value="Designer">Designer</option>
		  <option value="Technicial">Technicial</option>
		  <option value="Administrator">Administrator</option>
		  </select><br><br>
		  <div align=left><b>Description:</b></div>
		  <textarea cols=12 rows=5 name="desc"></textarea><br>
		  <div align=left><b>Closing Date:</b></div>
		  <input type=text id="closing" placeholder="Closing Date" name="cdate"><br>
		  <h2><b>Company Details</b></h2><br>

		  <div align=left><b>Comapany Name:</b></div>
		  <input type="text" placeholder="enter Name Of Company" name="cname"><br>
		  <div align=left><b>Company Web Site:</b></div>
		  <input type="text" placeholder="Website(http://)" name="cweb"><br><br>
		  <div align=left><b>Comapany Description:</b></div>
		  <textarea cols=12 rows=5 name="cdes"></textarea><br>
		  	  <div align=left><b>Experience:</b></div>
		  <input type="text" placeholder="Required Experience" name="exp"><br>
		  
		 <input type="submit" name="save" value="Post Job" style="background:#4CAF50;width:100%;border:0;padding:15px;color:#FFFFFF;font-size:14px;">
		  </form>
		  </div>
		  </div>
		  
		  
		  <?php
					} else
						{
							echo "<script type = \"text/javascript\">
											alert(\"Pleae Login First\");
											window.location = (\"RecruiterLogin.php\")
											</script>";
						}
				?>	
		  
		  
		  
		  
		  <?php
						if(isset($_POST['save'])){
					include 'includes/config1.php';
					
							$desig = $_POST['desig'];
							$jtitle = $_POST['jtitle'];
							$loc = $_POST['loc'];
							$email = $_POST['email'];
							$state = $_POST['state'];
							$jtype = $_POST['jtype'];
							
							$jcat = $_POST['jcat'];
							
							$desc = $_POST['desc'];
							$cdate = $_POST['cdate'];
							$cname = $_POST['cname'];
							$cweb = $_POST['cweb'];
						$cdes = $_POST['cdes'];
						$exp = $_POST['exp'];
					
							$qry = "INSERT INTO `postjob`(`designation`, `jobtitle`, `location`, `email`, `jobregion`, `jobtype`, `jobcat`, `description`,  `closingdate`,  `companyname`, `companyweb`, `companydes`,`exp`) 
							VALUES ('$desig','$jtitle','$loc','$email','$state','$jtype','$jcat','$desc' ,'$cdate','$cname','$cweb','$cdes','$exp')";
							$result = $conn->query($qry);
							if($result == TRUE){
								echo "<script type = \"text/javascript\">
											alert(\"Successful.\");
											window.location = (\"job2.php\")
											</script>";
							} 
							
							 else{
								echo "<script type = \"text/javascript\">
											alert(\"Fill All Details .Try Again\");
											
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
</center>

		  </body>
		  </html>