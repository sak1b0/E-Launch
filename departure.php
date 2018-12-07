
<?php
	session_start();
	$p_username = $_SESSION['p_name'];
	include("launch_availability.php");
?>

<!DOCTYPE php>
<!--[if lt IE 7]>      <php class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <php class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <php class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <php class="no-js"> <!--<![endif]-->
	<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>E-Launch</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="Free HTML5 Template by FREEHTML5.CO" />
	<meta name="keywords" content="free html5, free template, free bootstrap, html5, css3, mobile first, responsive" />
	<meta name="author" content="FREEHTML5.CO" />

  <!-- 
	//////////////////////////////////////////////////////

	FREE HTML5 TEMPLATE 
	DESIGNED & DEVELOPED by FREEHTML5.CO
		
	Website: 		http://freehtml5.co/
	Email: 			info@freehtml5.co
	Twitter: 		http://twitter.com/fh5co
	Facebook: 		https://www.facebook.com/fh5co

	//////////////////////////////////////////////////////
	 -->

  	<!-- Facebook and Twitter integration -->
	<meta property="og:title" content=""/>
	<meta property="og:image" content=""/>
	<meta property="og:url" content=""/>
	<meta property="og:site_name" content=""/>
	<meta property="og:description" content=""/>
	<meta name="twitter:title" content="" />
	<meta name="twitter:image" content="" />
	<meta name="twitter:url" content="" />
	<meta name="twitter:giveawayd" content="" />

	<!-- Place favicon.ico and apple-touch-icon.png in the root directory -->
	<link rel="shortcut icon" href="favicon.ico">

	<link href='https://fonts.googleapis.com/css?family=Open+Sans:400,700,300' rel='stylesheet' type='text/css'>
	
	<!-- Animate.css -->
	<link rel="stylesheet" href="css/animate.css">
	<!-- Icomoon Icon Fonts-->
	<link rel="stylesheet" href="css/icomoon.css">
	<!-- Bootstrap  -->
	<link rel="stylesheet" href="css/bootstrap.css">
	<!-- Superfish -->
	<link rel="stylesheet" href="css/superfish.css">
	<!-- Magnific Popup -->
	<link rel="stylesheet" href="css/magnific-popup.css">
	<!-- Date Picker -->
	<link rel="stylesheet" href="css/bootstrap-datepicker.min.css">
	<!-- CS Select -->
	<link rel="stylesheet" href="css/cs-select.css">
	<link rel="stylesheet" href="css/cs-skin-border.css">
	
	<link rel="stylesheet" href="css/style.css">
	<link rel="stylesheet" href="css/w3.css" 
	

	<!-- Modernizr JS -->
	<script src="js/modernizr-2.6.2.min.js"></script>
	<!-- FOR IE9 below -->
	<!--[if lt IE 9]>
	<script src="js/respond.min.js"></script>
	<![endif]-->

	</head>
	<body>
		<div id="fh5co-wrapper">
		<div id="fh5co-page">

		<header id="fh5co-header-section" class="sticky-banner">
			<div class="container">
				<div class="nav-header">
					<a href="#" class="js-fh5co-nav-toggle fh5co-nav-toggle dark"></a>
					<h1 id="fh5co-logo"><a href="index.php"><i class = icon-logo-l></i>E-Launch</a></h1>
					<!-- START #fh5co-menu-wrap -->
					<nav id="fh5co-menu-wrap" role="navigation">
						<ul class="sf-menu" id="fh5co-primary-menu">
							<li class="active"><a href="index.php">Home</a></li>
							<!--<li>
								<a href="vacation.php" class="fh5co-sub-ddown">Vacations</a>
								<ul class="fh5co-sub-menu">
									<li><a href="#">Family</a></li>
									<li><a href="#">CSS3 &amp; HTML5</a></li>
									<li><a href="#">Angular JS</a></li>
									<li><a href="#">Node JS</a></li>
									<li><a href="#">Django &amp; Python</a></li>
								</ul>
							</li> -->
							
							<li><a href="launch.php">Launches</a></li>
							<li><a href="navigation.php">Navigation</a></li>
							<li><a href="giveaway.php">Giveaway</a></li>
							<li><a href="contact.php">Contact</a></li>
							<li><a href="profile.php">Profile</a></li>
						</ul>
					</nav>
				</div>
			</div>
		</header>

		<!-- end:header-top -->


		<div class="fh5co-widget"><a class="weatherwidget-io animate-box" href="https://forecast7.com/en/23d8190d41/dhaka/" data-label_1="DHAKA" data-label_2="WEATHER" data-theme="original" >DHAKA WEATHER</a></div>
<script>
!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0];if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src='https://weatherwidget.io/js/widget.min.js';fjs.parentNode.insertBefore(js,fjs);}}(document,'script','weatherwidget-io-js');
</script>	

<div class="fh5co-hero" style = "    height: 1000px;">
	<div class="fh5co-overlay">
		<div class="fh5co-cover" data-stellar-background-ratio="0.5" sytle="background-image: url(images/cover_bg_1.jpg);">
			<div class="desc">
				<?php
					if($start==$destination){
						//echo "<h3 style ='text-align :center;'>Start and Destination can not be same!</h3>";
						//echo "<h4 style ='text-align :center;'>Please select your start and destination point correctly.</h4>";
						echo "<script type='text/javascript'>alert('Start and Destination can not be same!')</script>";
						
					}
					else if($start != 'Dhaka' && $destination != 'Dhaka'){
						//echo "<h3 style ='text-align :center;'>Sorry,this route is not avaiable.</h3>";
						echo "<script type='text/javascript'>alert('Sorry,this route is not avaiable!')</script>";
					}
					else{
						$qry = "select * from terminal where name = '$start'";
						$res = $conn->query($qry) or die('bad query');
						$row = $res->fetch_assoc();
						$start_id=$row["id"];
						$qry = "select * from terminal where name = '$destination'";
						$res = $conn->query($qry) or die('bad query');
						$row = $res->fetch_assoc();
						$destination_id=$row["id"];
			
						$qry = "select * from route where from_t_id = '$start_id' AND to_t_id = '$destination_id'";
						$res = $conn->query($qry) or die('bad query');
						$row = $res->fetch_assoc();
						$route_id=$row["id"];
						
						$qry = "select * from launch,launchroute,(select id from launch,(SELECT * from offdates,(select L_id as lid from launchroute where r_id = '$route_id') as AV where offdates.L_ID = av.lid and offdates.offdate = '$j_date' group by L_ID) as A WHERE A.l_id = launch.id) as A2 WHERE A2.id <> launch.id and launchroute.R_ID = '$route_id' and launchroute.L_ID = launch.id ";
						$res = $conn->query($qry) or die('bad query');
						//echo "<h4> Showing available launches:</h4>";
						include("launch_table.php");
					}
				?>
			</div>
		</div>
	</div>
</div>	
		
		
		



		<!--
		<div id="fh5co-blog-section" class="fh5co-section-gray">
			<div class="container">
				<div class="row">
					<div class="col-md-8 col-md-offset-2 text-center heading-section animate-box">
						<h3>Recent From Blog</h3>
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Velit est facilis maiores, perspiciatis accusamus asperiores sint consequuntur debitis.</p>
					</div>
				</div>
			</div>
			<div class="container">
				<div class="row row-bottom-padded-md">
					<div class="col-lg-4 col-md-4 col-sm-6">
						<div class="fh5co-blog animate-box">
							<a href="#"><img class="img-responsive" src="images/place-1.jpg" alt=""></a>
							<div class="blog-text">
								<div class="prod-title">
									<h3><a href="#">30% Discount to E-Launch All Around the World</a></h3>
									<span class="posted_by">Sep. 15th</span>
									<span class="comment"><a href="">21<i class="icon-bubble2"></i></a></span>
									<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
									<p><a href="#">Learn More...</a></p>
								</div>
							</div> 
						</div>
					</div>
					<div class="col-lg-4 col-md-4 col-sm-6">
						<div class="fh5co-blog animate-box">
							<a href="#"><img class="img-responsive" src="images/place-2.jpg" alt=""></a>
							<div class="blog-text">
								<div class="prod-title">
									<h3><a href="#">Planning for Vacation</a></h3>
									<span class="posted_by">Sep. 15th</span>
									<span class="comment"><a href="">21<i class="icon-bubble2"></i></a></span>
									<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
									<p><a href="#">Learn More...</a></p>
								</div>
							</div> 
						</div>
					</div>
					<div class="clearfix visible-sm-block"></div>
					<div class="col-lg-4 col-md-4 col-sm-6">
						<div class="fh5co-blog animate-box">
							<a href="#"><img class="img-responsive" src="images/place-3.jpg" alt=""></a>
							<div class="blog-text">
								<div class="prod-title">
									<h3><a href="#">Visit Tokyo Japan</a></h3>
									<span class="posted_by">Sep. 15th</span>
									<span class="comment"><a href="">21<i class="icon-bubble2"></i></a></span>
									<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
									<p><a href="#">Learn More...</a></p>
								</div>
							</div> 
						</div>
					</div>
					<div class="clearfix visible-md-block"></div>
				</div>

				<div class="col-md-12 text-center animate-box">
					<p><a class="btn btn-primary btn-outline btn-lg" href="#">See All Post <i class="icon-arrow-right22"></i></a></p>
				</div>

			</div>
		</div>

		-->

		<!-- fh5co-blog-section -->
		<div id="fh5co-testimonial" style="background-image:url(images/img_bg_1.jpg);">
		<div class="container">
			<div class="row animate-box">
				<div class="col-md-8 col-md-offset-2 text-center fh5co-heading">
					<h2>Happy Clients</h2>
				</div>
			</div>
			<div class="row">
				<div class="col-md-4">
					<div class="box-testimony animate-box">
						<blockquote>
							<span class="quote"><span><i class="icon-quotes-right"></i></span></span>
							<p>&ldquo; Best online launch ticket seller available in Bangladesh&rdquo;</p>
						</blockquote>
						<p class="author">Maliha, Banker<a href="http://freehtml5.co/" target="_blank"></a> <span class="subtext"></span></p>
					</div>
					
				</div>
				<div class="col-md-4">
					<div class="box-testimony animate-box">
						<blockquote>
							<span class="quote"><span><i class="icon-quotes-right"></i></span></span>
							<p>&ldquo;e Next rising company of Bangladesh, Best wishes!!.&rdquo;</p>
						</blockquote>
						<p class="author">Rafique, CEO-UIU <a href="http://freehtml5.co/" target="_blank"></a> <span class="subtext"></span></p>
					</div>
					
					
				</div>
				
			</div>
		</div>
	</div>
		<footer>
			<div id="footer">
				<div class="container" style="margin-left: 250px;">
					<div class="row row-bottom-padded-md">
						<div class="col-md-2 col-sm-2 col-xs-12 fh5co-footer-link">
							<h3>About E-Launch</h3>
							<p>A group of young lads looking forward to give Bangladeshi people best online ticket buying experience</p>
						</div>
						<div class="col-md-2 col-sm-2 col-xs-12 fh5co-footer-link" style="    margin-left: 65px;">
							<h3>Top Routes</h3>
							<ul>
								<li><a href="#">Dhaka</a></li>
								<li><a href="#">Barisal</a></li>
								<li><a href="#">Saint Martin</a></li>
								<li><a href="#">kuwakata</a></li>
								<li><a href="#">Chadpur</a></li>
							</ul>
						</div>
						<div class="col-md-2 col-sm-2 col-xs-12 fh5co-footer-link">
							<h3>Best Places</h3>
							<ul>
								<li><a href="#">Saint Martin</a></li>
								<li><a href="#">Kuwakata</a></li>
								<li><a href="#">Monpura</a></li>
							</ul>
						</div>
						<div class="col-md-2 col-sm-2 col-xs-12 fh5co-footer-link">
							<h3>Payment Methods</h3>
							<ul>
								<li><a href="#">Bkash</a></li>
								<li><a href="#">Rocket</a></li>
								<li><a href="#">NexusPay</a></li>
							</ul>
						</div>
					</div>
					<div class="row">
						<div class="col-md-6 col-md-offset-2 text-center" style="margin-left:100px;">
							<p class="fh5co-social-icons">
								<a href="#"><i class="icon-twitter2"></i></a>
								<a href="#"><i class="icon-facebook2"></i></a>
								<a href="#"><i class="icon-instagram"></i></a>
								<a href="#"><i class="icon-dribbble2"></i></a>
								<a href="#"><i class="icon-youtube"></i></a>
							</p>
							<p>Copyright 2018 <a href="#"> </a>. All Rights Reserved. <br>Powered <i class="icon-heart3"></i> by <a href="https://images.unsplash.com/photo-1533293046890-f1ab3e5e3af9?ixlib=rb-0.3.5&ixid=eyJhcHBfaWQiOjEyMDd9&s=6881a99773ca42bda1bd724e6b388000&auto=format&fit=crop&w=375&q=80" target="_blank">E-Launch Developers LTD.</a> </a></p>
						</div>
					</div>
				</div>
			</div>
		</footer>

	

	</div>
	<!-- END fh5co-page -->

	</div>
	<!-- END fh5co-wrapper -->

	<!-- jQuery -->


	<script src="js/jquery.min.js"></script>
	<!-- jQuery Easing -->
	<script src="js/jquery.easing.1.3.js"></script>
	<!-- Bootstrap -->
	<script src="js/bootstrap.min.js"></script>
	<!-- Waypoints -->
	<script src="js/jquery.waypoints.min.js"></script>
	<script src="js/sticky.js"></script>

	<!-- Stellar -->
	<script src="js/jquery.stellar.min.js"></script>
	<!-- Superfish -->
	<script src="js/hoverIntent.js"></script>
	<script src="js/superfish.js"></script>
	<!-- Magnific Popup -->
	<script src="js/jquery.magnific-popup.min.js"></script>
	<script src="js/magnific-popup-options.js"></script>
	<!-- Date Picker -->
	<script src="js/bootstrap-datepicker.min.js"></script>
	<!-- CS Select -->
	<script src="js/classie.js"></script>
	<script src="js/selectFx.js"></script>
	
	<!-- Main JS -->
	<script src="js/main.js"></script>

	</body>
</php>

