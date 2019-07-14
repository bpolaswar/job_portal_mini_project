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
<center><h1>Feedback Details</h1></center>
<br>
  <tr>
    <th>Name</th>
    <th>Email</th>
	<th>Mobile Number</th>
	<th>Reason</th>
	<th>Description</th>
	<th>Attached File</th>
	<th>Type</th>
  </tr>
  
  <?php
						include 'includes/config1.php';
						$sel = "SELECT * FROM feedback";
						$rs = $conn->query($sel);
						while($rws = $rs->fetch_assoc()){
			?>
			<tr>
						<td><?php echo $rws['name'];?> </td> 		 
    <td> <?php echo $rws['email'];?></td> 
    <td><?php echo $rws['mob'];?> </td>
    <td><?php echo $rws['reason'];?> </td> 
    <td><?php echo $rws['des'];?> </td>
	<td><?php echo $rws['attachfile'];?> </td>
	<td><?php echo $rws['type'];?> </td>
	

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