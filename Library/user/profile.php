<!--A Design by W3layouts
Author: W3layout
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE HTML>
<html>
<head>
<title>Public Library</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

<link href="form.css" rel="stylesheet" type="text/css" media="all" />
<link href="style2.css" rel="stylesheet" type="text/css" media="screen" />

<link href='http://fonts.googleapis.com/css?family=Quattrocento+Sans' rel='stylesheet' type='text/css'>
<link href="style.css" rel="stylesheet" type="text/css" media="all" />
<!--slider-->
<link href="slider.css" rel="stylesheet" type="text/css" media="all"/>
<script type="text/javascript" src="js/jquery-1.9.0.min.js"></script>
<script type="text/javascript" src="js/jquery.nivo.slider.js"></script>
<script type="text/javascript">
    $(window).load(function() {
        $('#slider').nivoSlider();
    });
    </script>
</head>
<body>
	<div id="header">
		<div id="logo">
			<img src="images/Drawing.png"  style="height: 55px;width: 30px; float:left">
			<h1><a href="#">Member Profile</a></h1>
			<p> Remain<a href="http://www.freecsstemplates.org/"> up-to-date</a></p>
		</div>
		<div id="search">
			<form method="get" action="">
				<fieldset>
				<input type="text" name="s" id="search-text" size="15" />
				<input type="submit" id="search-submit" value="Search" />
				</fieldset>
			</form>
		</div>
	</div>
	<!-- end #header -->
	<div id="menu">
		<ul>
			<li class="current_page_item"><a href="#">Home</a></li>
			<li><a href="#">About</a></li>
			<li><a href="#">Booklist</a></li>
			<li><a href="#">Contact</a></li>
			
		</ul>
	</div>
<!-- end #menu -->
<!------ Slider_bg ------------>
<div class="slider_bg">
<div class="wrap">
	<!------ Slider------------>
		  <div class="slider">
	      	<div class="slider-wrapper theme-default">
	            <div id="slider" class="nivoSlider">
	                <img src="images/banner1.jpg" data-thumb="images/1.jpg" alt="" />
	                <img src="images/banner2.jpg" data-thumb="images/2.jpg" alt="" />
	                <img src="images/banner3.jpg" data-thumb="images/3.jpg" alt="" />
	            </div>
	        </div>
	      </div>
		<!------End Slider ------------>
		
</div>
</div>
<!--main-->

<div id="page">
	<div id="page-bgtop">
	<div id="page-bgbtm">
		<div id="content">
			<div class="post" id="custom">
				<h2 class="title"><a href="#">Welcome to your account </a></h2>
				
				<div class="entry">
					<form action="user/test.php" method="post" class="smart-green">
						<h1>Customize your information
							<span>Please fill all the texts in the fields.</span>
						</h1>
						<label>
							<span>Your Name :</span>
							<input id="name" type="text" name="name" placeholder="Your Full Name" />
						</label>
						
						<label>
							<span>Your Location :</span>
							<input id="" type="text" name="location" placeholder="Valid Location" />
						</label>
						<label>
							<span>Your City:</span>
							<input id="" type="text" name="city" placeholder="Your City" />
						</label>
						
						<label>
							<span>Your Email :</span>
							<input id="email" type="email" name="email" placeholder="Valid Email Address" />
						</label>
						<label>
							<span>Your Phone :</span>
							<input id="" type="text" name="phn1" placeholder="1st phone number" />
						</label>
						
						<label>
							<span>Your Password :</span>
							<input id="" type="text" name="pswrd" placeholder="reset your password" />
						</label>
						
						  
						 <label>
							<span>&nbsp;</span> 
							<input type="submit" class="button" value="Send" /> 
						</label>    
					</form>
				</div>
			</div>
			
			<?php
			
			include "connect.php";
			
			$id=$_SESSION['id'];
			$array = oci_parse($c, "select name,location,city,user_email,password from user_sc where user_id='$id' ");

								oci_execute($array);

								if(($row = oci_fetch_array($array, OCI_BOTH)) != false) {
									
									$name= $row[0] ;
									$location= $row[1] ;
									$city= $row[2] ;
									$email=$row[3];
									$pswrd=$row[4];
									
								}
								
			
			echo '<div class="post" id="profile">
				<h2 class="title"><a href="#">Your Profile</a></h2>
				<br>
					<table>
					  <tr>
						<th>Name : </th>
						<th>'.$name.'</th>
						<th></th>
					  </tr>
					  <tr>
						<td>Location : </td>
						<td>'.$location.'</td>
						<td></td>
					  </tr>
					  <tr>
						<td>City : </td>
						<td>'.$city.'</td>
						<td></td>
					  </tr>
					  <tr>
						<td>Email : </td>
						<td>'.$email.'</td>
						<td></td>
					  </tr>
					  <tr>
						<td>Number : </td>';
						
					  $array2 = oci_parse($c, "select phone_no from user_phone where name='$name' ");

								oci_execute($array2);
								

								while(($row2 = oci_fetch_array($array2, OCI_BOTH)) != false) {
									
									echo '<td>'.$row2[0].'</td>';
									
									
								}
					 
						
					echo '</tr>
					</table>
					<br>
			</div>';
			
			//session_destroy(); 
			?>
			
			<div class="post">
				<h2 class="title" id="books"><a href="#">Books Borrowed</a></h2>
				
				<div class="entry">
					<table style="border: 1px solid black;">
					  <tr style="border: 1px solid black;">
						<th style="border: 1px solid black;">Firstname</th>
						<th style="border: 1px solid black;">Lastname</th>
					  </tr>
					  <tr style="border: 1px solid black;">
						<td style="border: 1px solid black;">Peter</td>
						<td style="border: 1px solid black;">Griffin</td>
					  </tr>
					  <tr style="border: 1px solid black;">
						<td style="border: 1px solid black;">Lois</td>
						<td style="border: 1px solid black;">Griffin</td>
					  </tr>
					</table>
				</div>
			</div>
		<div style="clear: both;">&nbsp;</div>
		</div>
		<!-- end #content -->
		<div id="sidebar">
			<ul>
				<li>
					<h2>Aliquam tempus</h2>
					<p>Mauris vitae nisl nec metus placerat perdiet est. Phasellus dapibus semper consectetuer hendrerit.</p>
				</li>
				<li>
					<h2>Look For</h2>
					<ul>
						<li><a href="#custom">Customize Profile</a></li>
						<li><a href="#profile">View Profile</a></li>
						<li><a href="#books">Books Borrowed</a></li>
						<li><a href="#">Suspendisse iaculis mauris</a></li>
						<li><a href="#">Urnanet non molestie semper</a></li>
						<li><a href="#">Proin gravida orci porttitor</a></li>
					</ul>
				</li>
				<li>
					<h2>Blogroll</h2>
					<ul>
						<li><a href="#">Aliquam libero</a></li>
						<li><a href="#">Consectetuer adipiscing elit</a></li>
						<li><a href="#">Metus aliquam pellentesque</a></li>
						<li><a href="#">Suspendisse iaculis mauris</a></li>
						<li><a href="#">Urnanet non molestie semper</a></li>
						<li><a href="#">Proin gravida orci porttitor</a></li>
					</ul>
				</li>
				<li>
					<h2>Archives</h2>
					<ul>
						<li><a href="#">Aliquam libero</a></li>
						<li><a href="#">Consectetuer adipiscing elit</a></li>
						<li><a href="#">Metus aliquam pellentesque</a></li>
						<li><a href="#">Suspendisse iaculis mauris</a></li>
						<li><a href="#">Urnanet non molestie semper</a></li>
						<li><a href="#">Proin gravida orci porttitor</a></li>
					</ul>
				</li>
			</ul>
		</div>
		<!-- end #sidebar -->
		<div style="clear: both;">&nbsp;</div>
	</div>
	</div>
	</div>
	<!-- end #page -->
	
	<div id="footer">
		<p>© All Rights Reserved | Design by&nbsp; <a href="http://www.freecsstemplates.org/"> W3Layouts</a>.</p>
	</div>





</body>
</html>