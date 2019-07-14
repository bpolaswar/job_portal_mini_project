<html>
<head>
  <!--<link rel="stylesheet" type="text/css" href="css/style.css" title="style" />
  -->
  <style>
 .product_gallery {margin: 0 auto; width: 1000px; list-style: none;}

        .product_gallery li {float:left; width:400px; height:180px; margin-right: 50px; margin-top:30px; border: 1px solid #999;}

        .product_discription {background:black; position:absolute; width:380px; heigth:400px; opacity:1; 
         transition: 1s ease-in; }

        .product_gallery li:hover .product_discription { opacity:0.7; }

        .product_discription{padding: 10px; color:#fff;  font-size:22px; }
        
        .buy_now{ background: #068900; color:white; width: 100px; font-size: 20px;  text-align:center; text-decoration:none; float:right; height:40px; }
        
        .product_information {height: 40px;  background: #F0EFE2 repeat; color: #777; width: 100%; float:left;}
     
        .product_information h4{ float:left; color:#fff; width: 70%; margin: 10px;  }}
		
	.product_cat {list-style:none; margins:0 auto; width:1200px; float:left;  }
 
	.product_cat li {float:left; color:white;  background: #F0EFE2 url(transparent.png) repeat; width: 100px; margin-right:30px; height:40px; text-align:center;
        padding-top: 15px; cursor:pointer; }
  </style>
   <link rel="stylesheet" href="style.css">
	<link rel=stylesheet href="Menu.css">
  
</head>

<body>


<?php
			include 'header1.php';
		?>




<div id="site_content">


 <ul class="product_gallery">
 <?php
						include 'includes/config1.php';
						$sel = "SELECT * FROM postjob ";
						$rs = $conn->query($sel);
						while($rws = $rs->fetch_assoc()){
			?>
 
 
        <li class="bed_product">
          
               
              <div class="product_discription">
               <p> Name:<?php echo '<b>'. $rws['jobtitle'].'</b>';?></br>
                  Job Type:<?php echo '<b>'.$rws['jobtype'].'</b>';?> </br>
                 Exp: <?php echo '<b>'.$rws['exp'].'</b>';?></br>
                  Location: <?php echo '<b>'.$rws['location'].'</b>';?></br>
                 </p>
               <a href="ApplyJob.php" class="buy_now">Apply Now</a>
               </div>
          </li>
		 <?php
						}
 ?>  
          
 </ul>
</div>

 <!--<div style="width:100%; position:fixed;">
  <center>
<footer>
<p>All Rights Reserved @JobPortal.Com </p>
<p>Website Developed By Bhumesh & Yogesh</p>
<b>Follow Us At</b><br>
<a href="https://www.facebook.com/JobPortal"><img src="icon-fb.png"></img></a>
<a href="https://plus.google.com/JobPortal"><img src="icon-gp.png"></img></a>
<a href="https://www.instagram.com/JobPortal"><img src="icon-ig.png"></img></a>
<a href="https://in.pinterest.com/JobPortal"><img src="icon-pt.png"></img></a>
<a href="https://twitter.com/JobPortals"><img src="icon-tw.png"></img></a>

</footer>
</center>
</div>-->
</body>
</html>
