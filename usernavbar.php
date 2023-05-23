<?php
session_start();
include('dataconnection.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User || Navbar</title>

</head>

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

<style>
	.img
	{
		/* position:absolute; */
		width: 35px;
		height: 35px;
		vertical-align: top;
	}

	.sub-menu-link
	{
		display: flex; 
		align-items: center; 
		color: #525252;
	}

	.sub-menu-link p
	{
		width: 100%;
	}

	.sub-menu-link img
	{
		width: 40px;
		background: #e5e5e5;
		border-radius: 50%;
		padding: 8px;
		margin-right: 15px;
	}

	.sub-menu-link span
	{
		font-size: 22px;
	}
</style>
<body>
<div id="fh5co-wrapper">
<div id="fh5co-page">
<header id="fh5co-header-section" class="sticky-banner">
			<div class="container">
				<div class="nav-header">
				<h1 id="fh5co-logo" style="color: #4bb6b7;"><i class="icon-airplane"></i>TPGS</a></h1>
					<!-- START #fh5co-menu-wrap -->
					<nav id="fh5co-menu-wrap" role="navigation">
						<ul class="sf-menu" id="fh5co-primary-menu">
							<li class="active"><a href="userhomepage.php?email=<?php echo $email; ?>">Home</a></li>
							<li><a href="userhphotel.php?email=<?php echo $email; ?>">Hotel</a></li>
							<li><a href="flight.php?email=<?php echo $email; ?>">Flight</a></li>
							<li><a href="blog.html">Blog</a></li>
							<li><a href="usercontactus.php?email=<?php echo $email; ?>">Contact</a></li>
							<li><a href="userprofile.php?email=<?php echo $re['email']?>"><img class="img" src="images/<?php echo $re['image']?>" width="35px" style="border-radius: 50%;" alt=""></a>
								<ul class="fh5co-sub-menu" style="position: absolute;">
									<li style="display: flex; align-items: center;"><a class="user-info">
										<img class="prof" src="images/<?php echo $re['image']?>" width="45px" style="border-radius: 50%; margin-right: 10px;" alt="">
										<h2 style="font-weight: bold; text-transform: uppercase; float: right;"><?php echo $re['username']?></h2>
										<hr style="border: 0; height: 1px; width: 100%; background: #ccc; margin: 15px 0 10px;">
									</li>

									<li><a href="usereditprofile.php?email=<?php echo $email; ?>" class="sub-menu-link">
										<img src="images/profile.png">
										<p>Edit Profile</p>
										<span>></span>
									</li>

									<li><a href="userprofile.php?email=<?php echo $email; ?>" class="sub-menu-link">
										<img src="images/setting-copy.png">
										<p>Settings & Privacy</p>
										<span>></span>
									</li>

									<li><a href="usercontactus.php?email=<?php echo $email; ?>" class="sub-menu-link">
										<img src="images/help.png">
										<p>Help & Support</p>
										<span>></span>
									</li>


									<li><a href="userregistrationlogin.php" class="sub-menu-link">
										<img src="images/logout.png">
										<p>Logout</p>
										<span>></span>
									</li>
								</ul>
							</li>
					</nav>
				</div>
			</div>
		</header>

</body>

<script src="js/jquery.min.js"></script>
	<!-- jQuery Easing -->
	<!-- <script src="js/jquery.easing.1.3.js"></script> -->
	<!-- Bootstrap -->
	<!-- <script src="js/bootstrap.min.js"></script> -->
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
	<!-- <script src="js/magnific-popup-options.js"></script> -->
	<!-- Date Picker -->
	<script src="js/bootstrap-datepicker.min.js"></script>
	<!-- CS Select -->
	<script src="js/classie.js"></script>
	<!-- <script src="js/selectFx.js"></script> -->
	
	<!-- Main JS -->
	<script src="js/main.js"></script>
</html>