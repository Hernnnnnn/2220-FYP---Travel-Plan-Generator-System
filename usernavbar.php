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

<?php 
	include 'dataconnection.php';
	$email = $_GET['email'];
	$sql = "SELECT * From `admin` where email = '$email'";
	$r = mysqli_query($conn,$sql);
	$re = mysqli_fetch_assoc($r);
?>
<style>
	.img
	{
		/* position:absolute; */
		width: 35px;
		height: 35px;
		 vertical-align: top;
	}
</style>

<body>
<div id="fh5co-wrapper">
<div id="fh5co-page">
<header id="fh5co-header-section" class="sticky-banner">
			<div class="container">
			
				<div class="nav-header">
						
					
				<!-- <a href="#" class="js-fh5co-nav-toggle fh5co-nav-toggle dark"><i></i></a> -->
					
				<h1 id="fh5co-logo"><a href="index.html"><i class="icon-airplane"></i>TPGS</a></h1>
					<!-- START #fh5co-menu-wrap -->
					<nav id="fh5co-menu-wrap" role="navigation">
						<ul class="sf-menu" id="fh5co-primary-menu">
							<li class="active"><a href="index.html">Home</a></li>
							<li>
								<a href="vacation.html" class="fh5co-sub-ddown">Vacations</a>
								<ul class="fh5co-sub-menu">
									<li><a href="#">Family</a></li>
									<li><a href="#">CSS3 &amp; HTML5</a></li>
									<li><a href="#">Angular JS</a></li>
									<li><a href="#">Node JS</a></li>
									<li><a href="#">Django &amp; Python</a></li>
								</ul>
							</li>
							<li><a href="flight.html"></a></li>
							<li><a href="hotel.html">Hotel</a></li>
							<li><a href="car.html">Car</a></li>
							<li><a href="blog.html">Blog</a></li>
							<li><a href="contact.html">Contact</a></li>
							<li><a href="adminprofile.php?email=<?php echo $re['email']?>"><img class="img" src="images/<?php echo $re['image']?>" width="35px" style="border-radius: 50%;" alt=""></a></li>
						</ul>
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