<html>
<head>
<link rel="stylesheet" href="style.css">
	<link rel=stylesheet href="login.css">
	<link rel=stylesheet href="Menu.css">
<style>
table, th, td {
    border: 1px solid black;
	background-color:white;
}
h1{
   background-color:lightyellow;
   }
</style>
</head>
<body>
<div id="header">
<img src="logo2.jpg" align="center">
</div>
<center>
<div id="menu">
<ul class="nav">
    <li><a href="#">Job Seeker</a>
      <ul>
        <li><a href="JobSeekerDetails.php">Registration Details</a></li>
        <li><a href="AppliedJobsDetails.php">Applied Jobs Details</a></li>
      </ul>
    </li>
    <li><a href="#">Recuiter Details</a>
      <ul>
        <li><a href="RecruiterDetails.php">Registration Details</a></li>
		<li><a href="PostedJobsDetails.php">Posted Jobs Details</a></li>
      </ul>
    </li>
    <li><a href="FeedbackDetails.php">Feedback Details</a></li>
  </ul>
  </div>
  </center>
<table style="width:100%">
<center><h1> Job Seekers Details</h1></center>
<br>
  <tr>
  <th>ID</th>
    <th>First Name</th>
    <th>Last Name</th> 
    <th>Email</th>
	<th>Mobile Number</th>
	<th>Qualification</th>
	<th>Marks</th>
	<th>University</th>
	<th>Job Catagory</th>
	<th>Experience</th>
	<th>Gender</th>
	<th>DOB</th>
	<th>Address</th>
	<th>State</th>
	<th>City</th>
	<th>Pin</th>

  </tr>
  
   <?php
						include 'includes/config1.php';
						$sel = "SELECT * FROM seerkerreg";
						$rs = $conn->query($sel);
						while($rws = $rs->fetch_assoc()){
			?>
			
			<tr>
						<td><?php echo $rws['ID'];?> </td>
						<td><?php echo $rws['firstname'];?> </td> 		 
    <td> <?php echo $rws['lastname'];?></td> 
    <td><?php echo $rws['mobile'];?> </td>
    <td><?php echo $rws['email'];?> </td> 
    <td><?php echo $rws['highquali'];?> </td>
	<td><?php echo $rws['marks'];?> </td>
	<td><?php echo $rws['university'];?> </td>
	<td><?php echo $rws['jobcat'];?> </td>
	<td><?php echo $rws['experience'];?> </td>
	<td><?php echo $rws['gender'];?> </td>
	<td><?php echo $rws['dob'];?> </td>
	<td><?php echo $rws['address'];?> </td>
	<td><?php echo $rws['state'];?> </td>
	<td><?php echo $rws['city'];?> </td>
	<td><?php echo $rws['pin'];?> </td>
	

  </tr>
  
  <?php
						}
 ?> 
  
</table>
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