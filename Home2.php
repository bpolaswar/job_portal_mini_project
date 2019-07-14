<html>
<head>
<link rel=stylesheet href="Menu.css">
<link rel=stylesheet href="style.css">
<link rel=stylesheet href="AdminLogin.css">
<script src="jquery-1.9.1.min.js"></script>
<script src="fotorama.js"></script>

<link rel="stylesheet" href="fotorama.css">
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
* {
    box-sizing: border-box;
}

/* Create three equal columns that floats next to each other */
#column {
    float: left;
    width: 33.3%;
    padding: 10px;
   height: 390px; 

   
}

/* Clear floats after the columns */
#row:after {
    content: "";
    display: table;
    clear: both;
}
</style>


</head>
<body>
	<section class="">
		<?php
			include 'header2.php';
		?>
	</section>
  
  <div id="row">
  <div id="column" style="background-image:linear-gradient(rgba(0,0,0,0.6),rgba(0,0,0,0.6)) ,url(banner5.jpg);">
   <a href="https://en.wikipedia.org/wiki/Wipro"> <img src="logo\Wipro.jpg">&nbsp </a>
   <a href="https://en.wikipedia.org/wiki/Amazon_(company)"><img src="logo\Amazon.jpg">&nbsp </a> 
   <a href="https://en.wikipedia.org/wiki/Infosys"> <img src="Infosys.jpg"><br><br></a>
   <a href="https://en.wikipedia.org/wiki/HCL_Technologies"> <img src="logo\HCL.png">&nbsp </a>
   <a href="https://en.wikipedia.org/wiki/Barclays"> <img src="logo\Barclays.jpg">&nbsp </a>
   <a href="https://en.wikipedia.org/wiki/Reliance_Industries"><img src="Ril.jpg"><br><br> </a>
   <a href="https://en.wikipedia.org/wiki/Tata_Group"><img src="logo\TATA.png">&nbsp </a>
   <a href="https://en.wikipedia.org/wiki/Quick_Heal"><img src="logo\QuickHeal.jpg">&nbsp </a>
   <a href="https://en.wikipedia.org/wiki/Persistent_Systems"><img src="Persistent.jpg">&nbsp </a>
  </div>
  
  <div id="column" class="fotorama" data-autoplay="true" data-transition-duration="100">	
<img id="img11" src="img1.jpg" >
<img id="img11" src="img2.jpg" >
<img id="img11" src="img3.jpg" >
<img id="img11" src="img4.jpg">
<img id="img11" src="img5.jpg">
  </div>


<div id="column" style="background-image:linear-gradient(rgba(0,0,0,0.6),rgba(0,0,0,0.6)) ,url(banner5.jpg);">
   <a href="https://en.wikipedia.org/wiki/Apple_Inc."> <img src="logo\Apple.jpg">&nbsp </a>
   <a href="https://en.wikipedia.org/wiki/Dell"><img src="logo\DELL.png">&nbsp </a> 
   <a href="https://en.wikipedia.org/wiki/Hewlett-Packard"> <img src="logo\HP.jpg"><br><br></a>
   <a href="https://en.wikipedia.org/wiki/Red_Hat"> <img src="logo\Redhat.jpg">&nbsp </a>
   <a href="https://en.wikipedia.org/wiki/Microsoft_Windows"> <img src="logo\Windows.jpg">&nbsp </a>
   <a href="https://en.wikipedia.org/wiki/Google"><img src="logo\Google.jpg"><br><br> </a>
   <a href="https://en.wikipedia.org/wiki/IBM"><img src="logo\IBM.jpg">&nbsp </a>
   <a href="https://en.wikipedia.org/wiki/Intel"><img src="logo\Intel.jpg">&nbsp </a>
   <a href="https://en.wikipedia.org/wiki/Facebook"><img src="logo\Facebook.jpg">&nbsp </a>
  </div>

<div>
<img src="Companies.jpg">
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