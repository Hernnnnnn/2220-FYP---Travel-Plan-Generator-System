<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin || Navbar</title>

</head>
<style>
	
	
</style>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="Free HTML5 Template by FREEHTML5.CO" />
	<meta name="keywords" content="free html5, free template, free bootstrap, html5, css3, mobile first, responsive" />
	<meta name="author" content="FREEHTML5.CO" />
	<link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
	<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
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
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="https://maxst.icons8.com/vue-static/landings/line-awesome/font-awesome-line-awesome/css/all.min.css">
	
	<!-- Animate.css -->
	<!-- <link rel="stylesheet" href="css/animate.css"> -->
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

	<script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
	<!-- Modernizr JS -->
	<script src="js/modernizr-2.6.2.min.js"></script>
	<!-- FOR IE9 below -->
	<!-- [if lt IE 9]>
	<script src="js/respond.min.js"></script>
	<![endif] -->
</head>
<?php 
	include 'dataconnection.php';
	$email = $_GET['email'];
	$sql = "SELECT * From `admin` where email = '$email'";
	$r = mysqli_query($conn,$sql);
	$re = mysqli_fetch_assoc($r);
?>
<style>
	@font-face {
  font-family: 'icomoon';
  src: url("../fonts/icomoon/icomoon.eot?srf3rx");
  src: url("../fonts/icomoon/icomoon.eot?srf3rx#iefix") format("embedded-opentype"), url("../fonts/icomoon/icomoon.ttf?srf3rx") format("truetype"), url("../fonts/icomoon/icomoon.woff?srf3rx") format("woff"), url("../fonts/icomoon/icomoon.svg?srf3rx#icomoon") format("svg");
  font-weight: normal;
  font-style: normal;
}
    *{
        padding: 0;
        margin: 0;
        text-decoration: none;
        list-style: none;
        box-sizing: border-box;
    }
    header
    {
        width: 100%;
        height: 90px;
        /* background-color: black; */
        display: flex;
        align-items: center;
        justify-content: space-between;
        padding: 0 100px;

    }
	.logo
	{
		margin-bottom: 40px;
	}
    .logo a
    {
        font-size: 28px;
        font-weight: bold;
        color: #4bb6b7;
  		font-family: "Open Sans", Arial, sans-serif;
		/* margin-top: 10px; */
		
    }
	.nav-bar
	{
		margin-right: 30px;

	}
    .hamburger
    {
        display: none;
		margin-right: 20px;
    }

    .nav-bar ul
    {
        display: flex;

    }

    .nav-bar ul li a
    {
        display: block;
        color: #848484;
        font-size: 15px;
        padding: 10px;
		padding-bottom: 0;
		padding-top: 0;
        border-radius: 50px;
        transition: 0.2s;
        margin: 0px 5px;
		margin-top: 40px;
        font-weight: bold;
    font-family: "Open Sans", Arial, sans-serif;

    }

    .nav-bar ul li a:hover
    {
        color: #4bb6b7;

    }
    .nav-bar ul li a.active
    {
        color: #4bb6b7;
    }
    @media only screen and (max-width: 1320px)
    {
        header
        {
            padding: 0 50px;
        }
    }
    @media only screen and (max-width: 1100px)
    {
        header
        {
            padding: 0 30px;
        }
    }
    @media only screen and (max-width: 900px)
    {
        .hamburger
        {
            display: block;
            cursor: pointer;
        }
        .hamburger .line
        {
            width: 30px;
            height: 3px;
            background: black;
            margin: 6px 0;
        }
        .nav-bar
        {
            height: 0;
            /* display: none; */
            position:absolute;
            top: 80px;
            left: 0;
            right: 0;
            width: 100vw;
            transition: 0.2s;
            overflow: hidden;
			background: white;
			
        }
        .nav-bar.active
        {
            height: 350px;
        }
        .nav-bar ul 
        {
            display: block;
            width: fit-content;
            margin: 0 auto 0 auto;
            text-align: center;
            transition: 0.5s;
            opacity: 0;
			padding: 0;
        }
        .nav-bar.active ul
        {
            opacity: 1;
        }
        .nav-bar ul li a
        {
            margin-bottom: 20px;
        }

    }
	.img
	{
		/* position:absolute; */
		width: 35px;
		height: 35px;
		 vertical-align: top;
	}
	*
	{
		margin: 0;
		padding: 0;
	}
	
	body
    {
        background-image: url(images/image.gif);
        background-size: cover; 
		background-repeat: no-repeat;
		background-attachment: fixed;
		box-sizing: border-box;
		height:150%;
	}
	nav ul li.actived
	{
		color: #4bb6b7;
	}
	
	
</style>
<style>
.material-symbols-outlined {
  font-variation-settings:
  'FILL' 0,
  'wght' 100,
  'GRAD' 0,
  'opsz' 24
}
</style>
<body>

<header id="fh5co-header-section" class="sticky-banner">
			
						
				
				<h1 id="fh5co-logo" class="logo"><a href=""><i class="icon-airplane"></i>TPGS</a></h1>
				<div class="hamburger">
					<div class="line"></div>
					<div class="line"></div>
					<div class="line"></div>
				</div>
					<!-- START #fh5co-menu-wrap -->
					
					<nav class="nav-bar" >
						<ul>
							<li ><a class="actived" href="admindashboard.php?email=<?php echo $re['email']?>"><i class="fa fa-home"></i> Home</a></li>
							<li>
								<a href="adminmanageuser.php?email=<?php echo $re['email']?>" class="fh5co-sub-ddown"><i class="fa fa-user"></i> User</a>
							</li>
							<!-- <li><a href="flight.html"></a></li> -->
							<li>
								<a href="adminmanagelocation.php?email=<?php echo $re['email']?>"><span class="fa fa-map-marker"></span> Location's details</a>
							</li>
							<li>
								<a href="adminlogoutpage.php"><i class='fas fa-sign-out-alt'></i>Log out</a>
							</li>
							<li>
								<a href="adminprofile.php?email=<?php echo $re['email']?>"><img class="img" src="images/<?php echo $re['image']?>" width="35px" style="border-radius: 50%;" alt=""></a>
							</li>
							
						</ul>
						
					</nav>
					
					
				</div>
			</div>
	</header>
	<script>
		hamburger = document.querySelector(".hamburger");
		hamburger.onclick = function()
		{
			navBar = document.querySelector(".nav-bar");
			navBar.classList.toggle("active");
		}
	</script>

				


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
</html>