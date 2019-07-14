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
<center><h1> Posted Jobs Details</h1></center>
<br>
  <tr>
    <th>Designation</th>
    <th>Job Title</th> 
    <th>Location</th>
	<th>Email</th>
	<th>Job Region</th>
	<th>Job Type</th>
	<th>Job Catagory</th>
	<th>Description</th>
	<th>Closing Date</th>
	<th>Company Name</th>
	<th>Company Website</th>
	<th>Company Description</th>
	<th>Experience</th>

  </tr>
  
   <?php
						include 'includes/config1.php';
						$sel = "SELECT * FROM postjob";
						$rs = $conn->query($sel);
						while($rws = $rs->fetch_assoc()){
			?>
			
			<tr>
						<td><?php echo $rws['designation'];?> </td> 		 
    <td> <?php echo $rws['jobtitle'];?></td> 
    <td><?php echo $rws['location'];?> </td>
    <td><?php echo $rws['email'];?> </td> 
    <td><?php echo $rws['jobregion'];?> </td>
	<td><?php echo $rws['jobtype'];?> </td>
	<td><?php echo $rws['jobcat'];?> </td>
	<td><?php echo $rws['description'];?> </td>
	<td><?php echo $rws['closingdate'];?> </td>
	<td><?php echo $rws['companyname'];?> </td>
	<td><?php echo $rws['companyweb'];?> </td>
	<td><?php echo $rws['companydes'];?> </td>
	<td><?php echo $rws['exp'];?> </td>
	

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