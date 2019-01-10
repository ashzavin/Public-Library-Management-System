<!DOCTYPE HTML>
<html>
<head>
<title>Public Library</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
<link href="css/style (2).css" rel="stylesheet" type="text/css" media="all" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!--webfont-->
<link href='//fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
<script type="text/javascript" src="js/jquery-1.11.1.min.js"></script>
<script type="text/javascript" src="js/login.js"></script>
<script src="js/jquery.easydropdown.js"></script>
<!--Animation-->
<script src="js/wow.min.js"></script>
<link href="css/animate.css" rel='stylesheet' type='text/css' />
<script>
	new WOW().init();
</script>
<script src='js/jquery-1.8.1.min.js' type='text/javascript'></script>
<script src='js/jquery.kwicks.js' type='text/javascript'></script>
<script type='text/javascript'>
	$(function() {
	$('.kwicks').kwicks({
		maxSize : 250,
		spacing : 5,
		behavior: 'menu'
		});
	});
</script>
</head>
<body class="bg">
<div class="header-bg">
<div class="wrap">
	<div class="header">
		<div class="logo">
		  		<a href="index.html">
		  			<img src="Drawing.png"  style="height: 70px;width: 50px"> 
					<img src="Drawing (1).png"> </a>
		 </div>
		<div class="menu">
			<ul class='kwicks kwicks-horizontal'>
				<li><a href="index.html">Home</a></li>
				<li><a href="about.html">About</a></li>
				<li  class="active"><a href="clients.html">Booklist</a></li>
				<li><a href="contact.html">Contact</a></li>
			</ul>
	 </div>
	 <div class="clear"></div>
	</div>
</div>
</div>

<div class="wrap">


  
					<div class="content">
						<div class="services">
							<h5>Books</h5>
							
							<?php
								include "connect.php";
						
								 $subjectt= $_POST["subject"];
								 $titlee= $_POST["title"];
								 $authorr= $_POST["author"];
								 echo $subjectt;
								 echo $titlee;
								 
								 
								 $titlee1=$titlee.'%';
								 $authorr1=$authorr.'%';

								 
								

								$array = oci_parse($c, "select title,price,subject,t_book,image,a_name,p_name from book_list join written_by using (title) join author using (a_name) join published_by using (title) join publisher using (p_name)
                                where upper(title) like 
								'$titlee1' or lower(title) like '$titlee1' or initcap(title) like '$titlee1' and upper(a_name) like '$authorr1' or lower(a_name) like '$authorr1' or initcap(a_name) like'$authorr1' and subject='$subjectt' ");

								oci_execute($array);

								while (($row = oci_fetch_array($array, OCI_BOTH)) != false) {
									
									$title= $row[0] ;
									$price= $row[1] ;
									$subject= $row[2] ;
									$total=$row[3];
									$image=$row[4];
									$author=$row[5];
									$publisher=$row[6];
									
									
									echo '<div class="section group">';
									echo '<div class="listview_1_of_2 images_1_of_2">';
									echo '<div class="listimg listimg_2_of_1">
										 <img src="book_cover/'.$image.'">
									</div>
								    <div class="text list_2_of_1">';
										echo '<h3>'.$title.'</h3>';
										echo '<p>The book is on about '.$subject.'.Author of this book is '.$author.' and was published by '.$publisher.'. The price of the book is '.$price.'. We have '.$total.' copies of this book.</p>';
										echo '<div class="btn">';
											echo '<span class="button-wrap"><a href="../service.php?var='.$author.'" class="button button-pill ">Author</a>';
											echo '<a href="details.html" class="button button-pill ">Publications</a></span>';
										echo '</div>
								   </div>
								</div>
								</div>';	
								}
							?>
								
							
							<div class="section group">
								<div class="listview_1_of_2 images_1_of_2">
									<div class="listimg listimg_2_of_1">
										  <img src="images/003.jpg">
									</div>
								    <div class="text list_2_of_1">
										<h3>Book3</h3>
										<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt  ut labore et dolore.</p>
										<div class="btn">
											<span class="button-wrap"><a href="details.html" class="button button-pill ">Author</a>
											<a href="details.html" class="button button-pill ">Publications</a></span>
										</div>
								   </div>
							   </div>			
								<div class="listview_1_of_2 images_1_of_2">
									<div class="listimg listimg_2_of_1">
										  <img src="images/004.jpg">
									</div>
									<div class="text list_2_of_1">
										<h3>Book4</h3>
										<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt  ut labore et dolore.</p>
										<div class="btn">
											<span class="button-wrap"><a href="details.html" class="button button-pill ">Author</a>
											<a href="details.html" class="button button-pill ">Publications</a></span>
										</div>
									</div>
								</div>
							</div>
							<div class="section group">
								<div class="listview_1_of_2 images_1_of_2">
									<div class="listimg listimg_2_of_1">
										  <img src="images/005.jpg">
									</div>
								    <div class="text list_2_of_1">
										<h3>Book5</h3>
										<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt  ut labore et dolore.</p>
										<div class="btn">
											<span class="button-wrap"><a href="details.html" class="button button-pill ">Author</a>
											<a href="details.html" class="button button-pill ">Publications</a></span>
										</div>
								   </div>
							   </div>			
								<div class="listview_1_of_2 images_1_of_2">
									<div class="listimg listimg_2_of_1">
										  <img src="images/006.jpg">
									</div>
									<div class="text list_2_of_1">
										<h3>Book6</h3>
										<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt  ut labore et dolore.</p>
										<div class="btn">
											<span class="button-wrap"><a href="details.html" class="button button-pill ">Author</a>
											<a href="details.html" class="button button-pill ">Publications</a></span>
										</div>
									</div>
								</div>
							</div>
							<div class="section group">
								<div class="listview_1_of_2 images_1_of_2">
									<div class="listimg listimg_2_of_1">
										  <img src="images/007.jpg">
									</div>
								    <div class="text list_2_of_1">
										<h3>Book7</h3>
										<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt  ut labore et dolore.</p>
										<div class="btn">
											<span class="button-wrap"><a href="details.html" class="button button-pill ">Author</a>
											<a href="details.html" class="button button-pill ">Publications</a></span>
										</div>
								   </div>
							   </div>			
								<div class="listview_1_of_2 images_1_of_2">
									<div class="listimg listimg_2_of_1">
										  <img src="images/008.jpg">
									</div>
									<div class="text list_2_of_1">
										<h3>Book8</h3>
										<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt  ut labore et dolore.</p>
										<div class="btn">
											<span class="button-wrap"><a href="details.html" class="button button-pill ">Author</a>
											<a href="details.html" class="button button-pill ">Publications</a></span>
										</div>
									</div>
								</div>
							</div>
							<div class="clear"></div>
						</div>
						 </div>
					<!---End-content---->
					<div class="clear"> </div>
				</div>
<div class="footer-bg">
<div class="wrap">
<div class="footer">
		<div class="f_grid">
		<div class="social">
				<ul class="follow_icon">
					<li><a href="#" style="opacity: 1;"><img src="images/fb.png" alt=""></a></li>
					<li><a href="#" style="opacity: 1;"><img src="images/g+.png" alt=""></a></li>
					<li><a href="#" style="opacity: 1;"><img src="images/tw.png" alt=""></a></li>
					<li><a href="#" style="opacity: 1;"><img src="images/pinterest.png" alt=""></a></li>
				</ul>
			</div>
		</div>
		<div class="f_grid1">
			<ul class="f_nav">
				<li class="active"><a href="index.html">Home</a></li>
				<li><a href="about.html">About</a></li>
				<li><a href="clients.html">Clients</a></li>
				<li><a href="contact.html">Contact</a></li>
			</ul>
			<div class="copy">
				<p class="w3-link">© All Rights Reserved | Design by Group3</a></p>
			</div>
			<div class="clear"></div>
		</div>
		<div class="f_logo">
			<a href="index.html">
		  			<img src="Drawing.png"  style="height: 70px;width: 50px"> 
					<img src="Drawing (1).png"> </a>
 		</div>
		<div class="clear"></div>
</div>
</div>
</div>
</body>
</html>