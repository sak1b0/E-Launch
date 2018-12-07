 
<?php
	session_start();
	$conn=mysqli_connect("localhost","root","","launchdb");
	if(isset($_POST['submit'])){

		$Name=$_POST['Name'];
		$Username=$_POST['Username'];
		$_SESSION['p_name'] = $Username;
		$Email=$_POST['Email'];
		$Mobile=$_POST['Mobile'];
		$Password=$_POST['Password'];
		$qry = "select * from passenger where 1";
		$res = $conn->query($qry) or die('bad query');
		$flag=0;
		while($row = $res->fetch_assoc()) {
			if($row["username_p"] != $Username){
				$flag=0;
			}
			else{
				$flag=1;
				break;
			}
		}
		if($flag==1){
			echo "This username in use,please try others.";
		}
		else{
			$query="insert into passenger(name,username_p,email,password,mobile_no)values('$Name','$Username','$Email','$Password','$Mobile')";
				$run=mysqli_query($conn,$query);
				if($run){
					echo"<h2><center>Registration completed</center></h2>";
					header("Location: http://localhost/SADPro_v9/index.php");
				}
				else
				echo"error at inserting data!".mysqli_error($conn);
		}
		
	}

	if(isset($_POST['Login'])){

		$p_username=$_POST['p_uname'];
		$p_password=$_POST['p_psw'];
		$_SESSION['p_name'] = $p_username;
		$qry = "select * from passenger where 1";
		$res = $conn->query($qry) or die('bad query');
		$flag=0;
		while($row = $res->fetch_assoc()) {
			if($row["username_p"] != $p_username || $row["password"] != $p_password){
				$flag=0;
			}
			else{
				$flag=1;
				break;
			}
		}
		
		if($flag==1){
			//echo "Logging successful, Welcome $p_username";
			header("Location: http://localhost/SADPro_v9/index.php");
		}
		else{
				
			echo "<h2><center>Invalid Username or password</center></h2>";
		}
	}

		
?>
<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
	<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Log In</title>
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
	<meta name="twitter:card" content="" />

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
    
  <link rel="stylesheet" href="css/login.css">
	<link rel="stylesheet" href="css/style.css">
	

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
					<h1 id="fh5co-logo"><a href="index.php"><i class = icon-logo-l></i>E-LAUNCH</a></h1>
					<!-- START #fh5co-menu-wrap -->
					<nav id="fh5co-menu-wrap" role="navigation">
						<ul class="sf-menu" id="fh5co-primary-menu">
							<li><a href="index.php">Home</a></li>
						<!--	<li>
								<a href="vacation.php" class="fh5co-sub-ddown">Vacations</a>
								<ul class="fh5co-sub-menu">
									<li><a href="#">Family</a></li>
									<li><a href="#">CSS3 &amp; HTML5</a></li>
									<li><a href="#">Angular JS</a></li>
									<li><a href="#">Node JS</a></li>
									<li><a href="#">Django &amp; Python</a></li>
								</ul>
							</li>
						-->
							<li><a href="launch.php">Launches</a></li>
							<li><a href="navigation.php">Navigation</a></li>
							<li><a href="giveaway.php">Giveaway</a></li>
							<li><a href="contact.php">Contact</a></li>
						</ul>
					</nav>
				</div>
			</div>
		</header>

        <!-- end:header-top -->
        
		<div class="fh5co-hero" style = "height:900px;">
				<div  class="fh5co-overlay"></div>
				<div class="fh5co-cover" data-stellar-background-ratio="0.5" style="background-image: url(images/places/banner.png); height:900px;">
					<div class="desc animate-box">
						<div class="container">
							</div class="row">
							<div  class="form" style="background-color: rgb(244,146,96,.6);">
      
									<ul class="tab-group">
										<li class="tab active"><a href="#signup">Sign Up</a></li>
										<li class="tab"><a href="#login">Log In</a></li>
									</ul>
									
									<div class="tab-content">
										<div id="signup">   
											<h1>Sign Up for Free</h1>
	
											<form action="" method="POST">
											
											
											<div class="field-wrap">
													<label>
														Name<span class="req">*</span>
													</label>
													<input type="text" name="Name" required autocomplete="off" />
												
											</div>

											<div class="field-wrap">
												<label>
													Username<span class="req">*</span>
												</label>
												<input type="text" name="Username"  required autocomplete="off"/>
											</div>
											<div class="field-wrap">
												<label>
													Email Address<span class="req">*</span>
												</label>
												<input type="email" name="Email" required autocomplete="off"/>
											</div>
											<div class="field-wrap">
												<label>
													Phone Number<span class="req">*</span>
												</label>
												<input type="text" name="Mobile" pattern="[0-9]{11}" title="Phone Number.<br> Like: 01#########" required autocomplete="off"/>
											</div>	
											<div class="field-wrap">
												<label>
													Password<span class="req" >*</span>
												</label>
												<input type="password" name="Password" required autocomplete="off"/>
											</div>
											
											<button type="submit" name="submit" class="button button-block"/>Get Started</button>
											
											</form>
						
										</div>
					

										<div id="login">   
											<h1>Welcome Back!</h1>
											
											<form action="" method="POST">
											
											 <div class="field-wrap">
												<label>
													Username<span class="req">*</span>
												</label>
												<input type="text" name="p_uname" required autocomplete="off"/>
											 </div>
											
											<div class="field-wrap">
												<label>
													Password<span class="req">*</span>
												</label>
												<input type="password" name="p_psw"required autocomplete="off"/>
											</div>
											
											<p class="forgot"><a href="#">Forgot Password?</a></p>
											
											<button  name = "Login" class="button button-block"/>Log In</button>
											
											</form>
						
										</div>
										
									</div><!-- tab-content -->
									
						</div> <!-- /form -->
								
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
								<p>We are a small team with the vision to make our water ways more accesable to general public.We are here to help you, reach your destination with minimum hassle.</p>
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
		<!-- LogIn JS-->
		<script  src="js/login.js"></script>
		<!-- Main JS -->
		<script src="js/main.js"></script>
	
	</body>
</html>
	

