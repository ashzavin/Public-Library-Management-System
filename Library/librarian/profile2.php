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
			<h1><a href="#">Librarian Profile</a></h1>
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
			<div class="post">
				<h2 class="title"><a href="#">Welcome to your account </a></h2>
				
				<div class="entry">
					<form action="test.php" method="post" class="smart-green">
						<h1>Customize your information
							<span>Please fill all the texts in the fields.</span>
						</h1>
						<label>
							<span>Your Name :</span>
							<input id="name" type="text" name="name" placeholder="Your Full Name" />
						</label>
						
						<label>
							<span>Your Address:</span>
							<input id="" type="text" name="address" placeholder="Valid Email Address" />
						</label>
						<label>
							<span>Your Email:</span>
							<input id="" type="text" name="email" placeholder="Your Full Name" />
						</label>
						
						<label>
							<span>Your Joining Date :</span>
							<input id="" type="text" name="join_date" placeholder="Joining Date" />
						</label>
						
						<label>
							<span>Your Salary :</span>
							<input id="email" type="text" name="salary" placeholder="Salary" />
						</label>
						
						<label>
							<span>Your Phone:</span>
							<input id="" type="text" name="phn1" placeholder="Phone no 1" />
						<!--	<input id="" type="text" name="phn2" placeholder="Phone no 2" />-->
						</label>
						
						<label>
							<span>Your Password :</span>
							<input id="" type="text" name="pswrd" placeholder="Valid Email Address" />
						</label>
						
						
						
						<label>
							<span>Your Shelf Number :</span>
							<input id="" type="text" name="shelf_no" placeholder="Shelf Number" />
						</label>

						<label>
							<span>Your Book Number :</span>
							<input id="" type="text" name="book_no" placeholder="Book Number" />
						</label>

						
						<label>
							<span>Your Manager ID:</span>
							<input id="email" type="text" name="manager_id" placeholder="Salary" />
						</label>
						  
						 <label>
							<span>&nbsp;</span> 
							<input type="submit" class="button" value="Update" /> 
						</label>   


					</form>
				</div>
			</div>
			
			<?php
			
			include "connect.php";
			
			$id=$_SESSION['id'];
			//echo $id;
			$array = oci_parse($c, "select * from employee natural join librarian where emp_id='$id' ");

								oci_execute($array);

								if(($row = oci_fetch_array($array, OCI_BOTH)) != false) {
									
									$name= $row[1] ;
									
									$salary= $row[2] ;
									$join=$row[3];
									$email=$row[5];
									$address=$row[6];
									$shelf=$row[8];
									$book=$row[9];
									
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
						<td>Shelfs under you : </td>
						<td>'.$shelf.'</td>
						<td></td>
					  </tr>

					  <tr>
						<td>Books under you : </td>
						<td>'.$book.'</td>
						
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
		
		
			
			<div class="post">
				<h2 class="title"><a href="#">Create New User Account </a></h2>
				
				<div class="entry">
					<form action="librarian/user.php" method="post" class="smart-green">
						
						<label>
							<span>User Name :</span>
							<input id="name" type="text" name="name" placeholder="Your Full Name" />
						</label>
						
						<label>
							<span>User location:</span>
							<input id="" type="text" name="location" placeholder="Valid Email Address" />
						</label>
						<label>
							<span>User city:</span>
							<input id="" type="text" name="city" placeholder="Your Full Name" />
						</label>
						<label>
							<span>User Email:</span>
							<input id="" type="text" name="email" placeholder="Your Full Name" />
						</label>
						
						<label>
							<span>User Phone Number:</span>
							<input id="" type="text" name="phn1" placeholder="Joining Date" />
						</label>
						
						
						  
						 <label>
							<span>&nbsp;</span> 
							<input type="submit" class="button" value="Create" /> 
						</label>   


					</form>
					</div>
			</div>
			
			<?php
			
			//session_destroy(); 
		
		echo '<div class="post">
				<h2 class="title"><a href="#">All Books Lists</a></h2>';
				
				 $array3 = oci_parse($c, "select title,price,subject,t_book,i_book,(p_book-(t_book+i_book)),p_book from book_list");

								oci_execute($array3);
								
								echo  '<div id="entry">
										<table style="border: 1px solid black;">';
								
								echo ' <tr style="border: 1px solid black;">
											<th style="border: 1px solid black;">Title</th>
											<th style="border: 1px solid black;">Subject</th>
											<th style="border: 1px solid black;">Price</th>
											<th style="border: 1px solid black;">Total Books</th>
											<th style="border: 1px solid black;">Issued Books</th>
											<th style="border: 1px solid black;">Lost Boooks</th>
											<th style="border: 1px solid black;">Purchased Books</th>
										  </tr style="border: 1px solid black;">';
										echo '</table>
									</div>';
								

								while(($row3 = oci_fetch_array($array3, OCI_BOTH)) != false) {
									
									$title= $row3[0] ;
									$price= $row3[1] ;
									$subject=$row3[2];
									$total=$row3[3];
									$issued=$row3[4];
									$lost=$row3[5];
									$purchased=$row3[6];
									
									
								echo  '<div id="entry">
										<table style="border: 1px solid black;">';
										 /*echo ' <tr style="border: 1px solid black;">
											<th style="border: 1px solid black;">Title</th>
											<th style="border: 1px solid black;">Subject</th>
											<th style="border: 1px solid black;">Price</th>
											<th style="border: 1px solid black;">Total Books</th>
											<th style="border: 1px solid black;">Issued Books</th>
											<th style="border: 1px solid black;">Lost Boooks</th>
											<th style="border: 1px solid black;">Purchased Books</th>
										  </tr style="border: 1px solid black;">';*/
										  echo '<tr style="border: 1px solid black;">';
							            echo'<td style="border: 1px solid black;">'.$title.'</td>';
										echo'<td style="border: 1px solid black;">'.$subject.'</td>';
										echo'<td style="border: 1px solid black;">'.$price.'</td>';
										echo'<td style="border: 1px solid black;">'.$total.'</td>';
										echo'<td style="border: 1px solid black;">'.$issued.'</td>';
										echo'<td style="border: 1px solid black;">'.$lost.'</td>';
										echo'<td style="border: 1px solid black;">'.$purchased.'</td>';
										
											
									echo  '</tr>
										  
										</table>
									</div>';
								
									
									
			}
				
			echo '</div>';	
			
		?>
		
		<div class="post">
				<h2 class="title"><a href="#">Insert Books</a></h2>
				
				<div class="entry">
					<form action="librarian/insert_book.php" method="post" class="smart-green">
						
						<label>
							<span>Title :</span>
							<input id="name" type="text" name="title" placeholder="Your Full Name" />
						</label>
						
						<label>
							<span>Price:</span>
							<input id="" type="text" name="price" placeholder="Valid Email Address" />
						</label>
						<label>
							<span>Subject:</span>
							<input id="" type="text" name="subject" placeholder="Your Full Name" />
						</label>
						<label>
							<span>Book no:</span>
							<input id="" type="text" name="no" placeholder="Your Full Name" />
						</label>
						
						<label>
							<span>&nbsp;</span> 
							<input type="submit" class="button" value="Create" /> 
						</label>   


					</form>
					</div>
			</div>
		
		<div class="post">
				<h2 class="title"><a href="#">Issue Books</a></h2>
				
				<div class="entry">
					<form action="librarian/issue.php" method="post" class="smart-green">
						
						<label>
							<span>User name :</span>
							<input id="" type="text" name="user_name" placeholder="Your Full Name" />
						</label>
						<label>
							<span>User Id :</span>
							<input id="" type="text" name="user_id" placeholder="Your Full Name" />
						</label>
						
						<label>
							<span>Issue Date:</span>
							<input id="" type="date" name="issue" placeholder="Valid Email Address" />
						</label>
						<label>
							<span>Book Title:</span>
							<input id="" type="text" name="title" placeholder="Your Full Name" />
						</label>
						<label>
							<span>Book no:</span>
							<input id="" type="text" name="book_no" placeholder="Your Full Name" />
						</label>
						
						
						
						<label>
							<span>&nbsp;</span> 
							<input type="submit" class="button" value="Issue" /> 
						</label>   


					</form>
					</div>
			</div>
			
			<div class="post">
				<h2 class="title"><a href="#">Returned Books</a></h2>
				
				<div class="entry">
					<form action="librarian/return.php" method="post" class="smart-green">
						
						<label>
							<span>User name :</span>
							<input id="" type="text" name="user_name" placeholder="Your Full Name" />
						</label>
						<label>
							<span>User Id :</span>
							<input id="" type="text" name="user_id" placeholder="Your Full Name" />
						</label>
						
						<label>
							<span>Book Title:</span>
							<input id="" type="text" name="title" placeholder="Your Full Name" />
						</label>
						<label>
							<span>Book no:</span>
							<input id="" type="text" name="book_no" placeholder="Your Full Name" />
						</label>
						
						
						
						<label>
							<span>&nbsp;</span> 
							<input type="submit" class="button" value="Issue" /> 
						</label>   


					</form>
					</div>
			</div>
			
			<?php
			
			//session_destroy(); 
		
		echo '<div class="post">
				<h2 class="title"><a href="#">View Payment List</a></h2>';
				//create or replace view payment ("","","","","","") as select user_sc.name,book_no,borrow_no, issue_date,due_date,title from user_sc join borrower  using(name) join book_borrower using(borrow_no) join borrowed_book using(borrow_no) join book_list using(title)
				
				 $array4 = oci_parse($c, "select * from payment");

								oci_execute($array4);
								
								echo  '<div id="entry">
										<table style="border: 1px solid black;">';
								
								echo ' <tr style="border: 1px solid black;">
											<th style="border: 1px solid black;">user_name</th>
											<th style="border: 1px solid black;">book_no</th>
											<th style="border: 1px solid black;">borrow_no</th>
											<th style="border: 1px solid black;">issue_date</th>
											<th style="border: 1px solid black;">due_date</th>
											<th style="border: 1px solid black;">title</th>
											
										  </tr style="border: 1px solid black;">';
										echo '</table>
									</div>';
								

								while(($row4 = oci_fetch_array($array4, OCI_BOTH)) != false) {
									
									$user_name= $row4[0] ;
									$book_no= $row4[1] ;
									$borrow_no=$row4[2];
									$issue_date=$row4[3];
									$due_date=$row4[4];
									$title=$row4[5];
									
									
									
								echo  '<div id="entry">
										<table style="border: 1px solid black;">';
										 /*echo ' <tr style="border: 1px solid black;">
											<th style="border: 1px solid black;">Title</th>
											<th style="border: 1px solid black;">Subject</th>
											<th style="border: 1px solid black;">Price</th>
											<th style="border: 1px solid black;">Total Books</th>
											<th style="border: 1px solid black;">Issued Books</th>
											<th style="border: 1px solid black;">Lost Boooks</th>
											<th style="border: 1px solid black;">Purchased Books</th>
										  </tr style="border: 1px solid black;">';*/
										  echo '<tr style="border: 1px solid black;">';
							            echo'<td style="border: 1px solid black;">'.$user_name.'</td>';
										echo'<td style="border: 1px solid black;">'.$book_no.'</td>';
										echo'<td style="border: 1px solid black;">'.$borrow_no.'</td>';
										echo'<td style="border: 1px solid black;">'.$issue_date.'</td>';
										echo'<td style="border: 1px solid black;">'.$due_date.'</td>';
										echo'<td style="border: 1px solid black;">'.$titlet.'</td>';
										
										
											
									echo  '</tr>
										  
										</table>
									</div>';
								
									
									
			}
				
			echo '</div>';	
			
		?>
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
					<h2>Viewing</h2>
					<ul>
						
						<li><a href="#">View Profile</a></li>
						<li><a href="#">View All Books</a></li>
						<li><a href="#">View Payment List</a></li>
						
					</ul>
				</li>
				<li>
					<h2>Editing</h2>
					<ul>
						<li><a href="#">Customize Profile</a></li>
						<li><a href="#">Create New User Account</a></li>
						<li><a href="#">Insert Books</a></li>
						<li><a href="#">Issue Books</a></li>
						<li><a href="#">Returned Books</a></li>
						
						
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