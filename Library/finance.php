s
<!DOCTYPE HTML>
<html>
<head>
<title>Public Library</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

<link href="css_pro/form.css" rel="stylesheet" type="text/css" media="all" />
<link href="style2.css" rel="stylesheet" type="text/css" media="screen" />

<link href='http://fonts.googleapis.com/css?family=Quattrocento+Sans' rel='stylesheet' type='text/css'>
<link href="css_pro/style.css" rel="stylesheet" type="text/css" media="all" />
<!--slider-->
<link href="css_pro/slider.css" rel="stylesheet" type="text/css" media="all"/>
<script type="text/javascript" src="js_pro/jquery-1.9.0.min.js"></script>
<script type="text/javascript" src="js_pro/jquery.nivo.slider.js"></script>
<script type="text/javascript">
    $(window).load(function() {
        $('#slider').nivoSlider();
    });
    </script>
</head>
<body>
	<div id="header">
		<div id="logo">
			<img src="images_pro/Drawing.png"  style="height: 55px;width: 30px; float:left">
			<h1><a href="#">Finance Officer Profile</a></h1>
			<p> Remain<a href=""> up-to-date</a></p>
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
	                <img src="images_pro/banner1.jpg" data-thumb="images/1.jpg" alt="" />
	                <img src="images_pro/banner2.jpg" data-thumb="images/2.jpg" alt="" />
	                <img src="images_pro/banner3.jpg" data-thumb="images/3.jpg" alt="" />
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
			<div class="post">
				<h2 class="title"><a href="#">Welcome to your account </a></h2>
				
				<div class="entry">
					<form action="finance_test.php" method="post" class="smart-green">
						<h1>Customize your information
							<span>Please fill all the texts in the fields.</span>
						</h1>
						<label>
							<span>Your Name :</span>
							<input id="name" type="text" name="name" placeholder="Your Full Name" />
						</label>
						
						<label>
							<span>Your Address :</span>
							<input id="" type="text" name="address" placeholder="Address" />
						</label>
						
						<label>
							<span>Your Email :</span>
							<input id="email" type="email" name="email" placeholder="Valid Email Address" />
						</label>
						
						<label>
							<span>Your Joining Date :</span>
							<input id="" type="text" name="join_date" placeholder="Join_Date" />
						</label>
						
						<label>
							<span>Your Salary :</span>
							<input id="email" type="text" name="salary" placeholder="Salary" />
						</label>
						<label>
							<span>Your Phone:</span>
							<input id="" type="text" name="phn1" placeholder="Phone no 1" />
							
						</label>
						
						<label>
							<span>Your Password :</span>
							<input id="" type="text" name="pswrd" placeholder="reset password" />
						</label>
						
						<label>
							<span>Your Office Number :</span>
							<input id="email" type="text" name="office_nmbr" placeholder="Office Number" />
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
			//echo $id;
			$array = oci_parse($c, "select * from employee natural join finance_officer where emp_id='$id' ");

								oci_execute($array);

								if(($row = oci_fetch_array($array, OCI_BOTH)) != false) {
									
									$name= $row[1] ;
									//echo $name;
									//echo 'oooooooooooooooo';
									$salary= $row[2] ;
									$join=$row[3];
									$email=$row[5];
									$address=$row[6];
									$office=$row[8];
									
									//echo $name;
									//echo $address;
									
								}
			echo '<div class="post">
				<h2 class="title"><a href="#">Your Profile</a></h2>
				<br>
				<div class="entry1">
					<table>
					  <tr>
						<th>Name : </th>
						<th>'.$name.'</th>
						<th></th>
					  </tr>
					  <tr>
						<td>Address : </td>
						<td>'.$address.'</td>
						<td></td>
					  </tr>
					  <tr>
						<td>Joining Date : </td>
						<td>'.$join.'</td>
						<td></td>
					  </tr>
					  <tr>
						<td>Email : </td>
						<td>'.$email.'</td>
						<td></td>
					  </tr>

					  <tr>
						<td>Salary : </td>
						<td>'.$salary.'</td>
						<td></td>
					  </tr>

					  <tr>
						<td>Office Number : </td>
						<td>'.$office.'</td>
						<td></td>
					  </tr>

					  <tr>
						<td>Salary : </td>
						<td>Brown</td>
						<td>$250</td>
					  </tr>
					  
					<tr>
						<td>Number : </td>';
						
					  $array2 = oci_parse($c, "select phone from emp_phone where emp_id='$id' ");

								oci_execute($array2);
								

								while(($row2 = oci_fetch_array($array2, OCI_BOTH)) != false) {
									
									echo '<td>'.$row2[0].'</td>';
									
									
								}
					 
						
					echo '</tr>
					</table>
					<br>
			</div>
		</div>';
		?>
		<?php
			
			//session_destroy(); 
		
		echo '<div class="post">
				<h2 class="title"><a href="#">All budget Lists</a></h2>';
				
				 $array3 = oci_parse($c, "select * from budget");

								oci_execute($array3);
								

								while(($row3 = oci_fetch_array($array3, OCI_BOTH)) != false) {
									
									$year= $row3[0] ;
									$utilities= $row3[1] ;
									$branch_bug=$row3[2];
									$book_bug=$row3[3];
									$renov_bug=$row3[4];
									$emp_salary=$row3[5];
									$project_bug=$row3[6];
									
									
								echo '<div id="entry">
										<table style="border: 1px solid black;">
										  <tr style="border: 1px solid black;">
											<th style="border: 1px solid black;">Year</th>
											<th style="border: 1px solid black;">Utilities</th>
											<th style="border: 1px solid black;">For Branch</th>
											<th style="border: 1px solid black;">For Books</th>
											<th style="border: 1px solid black;">Renovation</th>
											<th style="border: 1px solid black;">For Salary</th>
											<th style="border: 1px solid black;">For Project</th>
										  </tr style="border: 1px solid black;">
										  <tr style="border: 1px solid black;">';
							            echo'<td style="border: 1px solid black;">'.$year.'</td>';
										echo'<td style="border: 1px solid black;">'.$utilities.'</td>';
										echo'<td style="border: 1px solid black;">'.$branch_bug.'</td>';
										echo'<td style="border: 1px solid black;">'.$book_bug.'</td>';
										echo'<td style="border: 1px solid black;">'.$renov_bug.'</td>';
										echo'<td style="border: 1px solid black;">'.$emp_salary.'</td>';
										echo'<td style="border: 1px solid black;">'.$project_bug.'</td>';
										
											
									echo  '</tr>
										  
										</table>
									</div>';
								
									
									
			}
				
			echo '</div>';	
			
		?>
			
			
			<div class="post">
				<h2 class="title"><a href="#">Create New Budget </a></h2>
				
				
			<div class="entry">	
				<form action="test2_finance.php" method="post" class="smart-green">
						
						<label>
							<span>Year:</span>
							<input id="name" type="text" name="year" placeholder="year" />
						</label>
						
						<label>
							<span>For Utilites:</span>
							<input id="" type="text" name="utilities" placeholder="" />
						</label>
						
						<label>
							<span>For Branches:</span>
							<input id="email" type="number" name="branch" placeholder="" />
						</label>
						
						<label>
							<span>For Boooooks :</span>
							<input id="" type="number" name="books" placeholder="" />
						</label>
						
						<label>
							<span>For Renovation:</span>
							<input id="email" type="number" name="renovation" placeholder="" />
						</label>
						<label>
							<span>For Employee Salary:</span>
							<input id="" type="number" name="salary" placeholder="" />
							
						</label>
						
						<label>
							<span>For Future Projects:</span>
							<input id="" type="number" name="project" placeholder="" />
						</label>
						
						<label>
							<span>&nbsp;</span> 
							<input type="submit" class="button" value="Send" /> 
						</label>
					</form>
			</div>
		</div>
			
			<div class="post">
				<h2 class="title"><a href="#">Welcome to your account </a></h2>
				
				<div class="entry">
					<form action="finance_test.php" method="post" class="smart-green">
						<h1>Customize your information
							<span>Please fill all the texts in the fields.</span>
						</h1>
						<label>
							<span>Your Name :</span>
							<input id="name" type="text" name="name" placeholder="Your Full Name" />
						</label>
						
						<label>
							<span>Your Address :</span>
							<input id="" type="text" name="address" placeholder="Address" />
						</label>
						
						<label>
							<span>Your Email :</span>
							<input id="email" type="email" name="email" placeholder="Valid Email Address" />
						</label>
						
						<label>
							<span>Your Joining Date :</span>
							<input id="" type="text" name="join_date" placeholder="Join_Date" />
						</label>
						
						<label>
							<span>Your Salary :</span>
							<input id="email" type="text" name="salary" placeholder="Salary" />
						</label>
						<label>
							<span>Your Phone:</span>
							<input id="" type="text" name="phn1" placeholder="Phone no 1" />
							
						</label>
						
						<label>
							<span>Your Password :</span>
							<input id="" type="text" name="pswrd" placeholder="reset password" />
						</label>
						
						<label>
							<span>Your Office Number :</span>
							<input id="email" type="text" name="office_nmbr" placeholder="Office Number" />
						</label>

						
						 <label>
							<span>&nbsp;</span> 
							<input type="submit" class="button" value="Send" /> 
						</label>
						


					</form>
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
					<h2>Categories</h2>
					<ul>
						<li><a href="#">Customize Profile</a></li>
						<li><a href="#">View Profile</a></li>
						<li><a href="#">View Budget List</a></li>
						<li><a href="#">Create New Budget</a></li>
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