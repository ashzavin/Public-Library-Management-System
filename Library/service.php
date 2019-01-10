<!--A Design by W3layouts
Author: W3layout
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE HTML>
<html>
<head>
<title>The Erudite Website Template | Services :: w3layouts</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<link href='http://fonts.googleapis.com/css?family=Cagliostro' rel='stylesheet' type='text/css'>
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
<!--start lightbox -->
<link rel="stylesheet" type="text/css" href="css/jquery.lightbox.css">
<script src="js/jquery.min.js"></script>
<script src="js/jquery.lightbox.js"></script>
<script>
  // Initiate Lightbox
  $(function() {
    $('.gallery a').lightbox(); 
  });
</script>
</head>
<body>
<div class="wrap">
<div class="wrapper">
<div class="logo">
	<a href="index.html"><h1>Public Library</h1></a>
</div>
<div class="header_right">
	<div class="cssmenu">
		<ul>
		  	<li><a href="index.html"><span>Home</span></a></li>
			<li><a href="about.html"><span>About</span></a></li>
			<li><a href="staff.html"><span>Booklist</span></a></li>
			<li class="active" class="has-sub"><a href="service.html"><span>Contact</span></a></li>
			
			<div class="clear"></div>
		 </ul>
	</div>
</div>
	<div class="clear"></div>
</div>
</div>
<div class="main_bg">
<div class="wrap">
<div class="wrapper">
<div class="main">
	<?php
	
	include "connect.php";
	
	$name=$_GET['var'];
	

	$array = oci_parse($c,"select * from author where a_name='$name'" );

    oci_execute($array);

	if (($row = oci_fetch_array($array, OCI_BOTH)) != false) {
									
		
		$location= $row[1] ;
		$city= $row[2] ;
		$dob=$row[3];
		$dod=$row[4];
		$publication=$row[5];
		$award=$row[6];
		
	
	}
	echo '<div class="ser-main">
	
		<h2 class="style">Authors Info</h2><br>';
		echo '<div class="row">';
		echo '<div class="col-sm-2"></div>';
		echo '<div class="col-sm-2">';
		echo '<p style="font-size:25px">Name:</p>';
		echo '</div>
			<br>
			<div class="col-sm-2">
			<p>'.$name.'</p>
			</div>
		</div>
		<br>';
		
		
		echo '<div class="ser-para">';
			echo '<p class="para" style="font-size:20px;">Publications that published the books written by '.$name.' are '.$publication.' and awards achieved by respected autohr '.$name.' are '.$award.'.</p>'; 
			
		echo '</div>';
		
		echo '<div class="row">';
		echo '<div class="col-sm-2"></div>';
		echo '<div class="col-sm-2">';
		echo '<p style="font-size:25px">Location:</p>';
		echo '</div>
			<br>
			<div class="col-sm-2">
			<p>'.$location.'</p>
			</div>
		</div>
		<br>';
		echo '<div class="row">
			<div class="col-sm-2"></div>
			<div class="col-sm-2">
			 <p style="font-size:25px">City :</p>
			</div>
			<br>
			<div class="col-sm-2">
			<p>'.$city.'</p>
			</div>
		</div>
		<br>';
		echo '<div class="row">
			<div class="col-sm-2"></div>
			<div class="col-sm-2">
			 <p style="font-size:25px">Dob :</p>
			</div>
			<br>
			<div class="col-sm-2">
			<p>'.$dob.'</p>
			</div>
		</div>
		<br>';
		echo '<div class="row">
			<div class="col-sm-2"></div>
			<div class="col-sm-2">
			 <p style="font-size:25px">Dod :</p>
			</div>
			<br>
			<div class="col-sm-2">
			<p>'.$dod.'</p>
			</div>
		</div>
		
		<br>';
		
		echo '<div class="clear"></div>';
	echo '</div>';
	?>
		<div class="clear"></div>
	</div>
</div>
</div>
</div>


<div class="wrap">
<div class="wrapper">
	<div class="footer">
		<div class="social-icons">
	   		  	<ul>
			      <li class="icon_1"><a href="#" target="_blank"> </a></li>
			      <li class="icon_2"><a href="#" target="_blank"> </a></li>
			      <li class="icon_3"><a href="#" target="_blank"> </a></li>
			      <li class="icon_4"><a href="#" target="_blank"> </a></li>
			      <div class="clear"></div>
		     </ul>
	   	 </div>
		<a href="index.html"><h2>erudite</h2></a>
		<div class="copy">
			<p class="w3-link">© All Rights Reserved | Design by&nbsp; <a href="http://w3layouts.com/"> W3Layouts</a></p>
		</div>
	</div>
</div>
<div class="clear"></div>
</div>
</body>
</html>