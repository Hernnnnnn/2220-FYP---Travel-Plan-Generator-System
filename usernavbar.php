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
    #header-section {
    padding: 0;
    position: relative;
    left: 0;
    width: 100%;
    z-index: 1022;
    background: #fff;
    }

    .nav-header {
    position: relative;
    float: left;
    width: 100%;
    }   

    .nav-toggle.active i::before, .nav-toggle.active i::after {
    background: #fff;
    }

    .nav-toggle.dark.active i::before, .nav-toggle.dark.active i::after {
    background: #fff;
    }

    .nav-toggle:hover, .nav-toggle:focus, .nav-toggle:active {
    outline: none;
    border-bottom: none !important;
    }

    .nav-toggle i {
    position: relative;
    display: -moz-inline-stack;
    display: inline-block;
    zoom: 1;
    *display: inline;
    width: 30px;
    height: 2px;
    color: #fff;
    font: bold 14px/.4 Helvetica;
    text-transform: uppercase;
    text-indent: -55px;
    background: #fff;
    transition: all .2s ease-out;
    }

    .nav-toggle i::before, .nav-toggle i::after {
    content: '';
    width: 30px;
    height: 2px;
    background: #fff;
    position: absolute;
    left: 0;
    -webkit-transition: 0.2s;
    -o-transition: 0.2s;
    transition: 0.2s;
    }

    .nav-toggle.dark i {
    position: relative;
    color: #000;
    background: #000;
    transition: all .2s ease-out;
    }

    .nav-toggle.dark i::before, .nav-toggle.dark i::after {
    background: #000;
    -webkit-transition: 0.2s;
    -o-transition: 0.2s;
    transition: 0.2s;
    }

    .nav-toggle i::before {
    top: -7px;
    }

    .nav-toggle i::after {
    bottom: -7px;
    }

    .nav-toggle:hover i::before {
    top: -10px;
    }

    .nav-toggle:hover i::after {
    bottom: -10px;
    }

    .nav-toggle.active i {
    background: transparent;
    }

    .nav-toggle.active i::before {
    top: 0;
    -webkit-transform: rotateZ(45deg);
    -moz-transform: rotateZ(45deg);
    -ms-transform: rotateZ(45deg);
    -o-transform: rotateZ(45deg);
    transform: rotateZ(45deg);
    }

    .nav-toggle.active i::after {
    bottom: 0;
    -webkit-transform: rotateZ(-45deg);
    -moz-transform: rotateZ(-45deg);
    -ms-transform: rotateZ(-45deg);
    -o-transform: rotateZ(-45deg);
    transform: rotateZ(-45deg);
    }

    .nav-toggle {
    position: absolute;
    top: 0px;
    right: 0px;
    z-index: 9999;
    display: block;
    margin: 0 auto;
    display: none;
    cursor: pointer;
    }
    @media screen and (max-width: 768px) {
    .nav-toggle {
        display: block;
        top: 0px;
        margin-top: 2em;
    }
    }

    #logo {
    position: relative;
    z-index: 2;
    font-size: 28px;
    text-transform: uppercase;
    margin-top: 35px;
    font-weight: 700;
    float: left;
    padding-left: 40px;
    }

    #logo i {
    position: absolute;
    top: 0;
    left: 0;
    font-size: 16px;
    color: #4bb6b7;
    background: rgba(0, 0, 0, 0.06);
    padding: 10px;
    -webkit-border-radius: 50%;
    -moz-border-radius: 50%;
    -ms-border-radius: 50%;
    border-radius: 50%;
    }

    #logo a {
    color: #4bb6b7;
    }

    #logo a:hover, #logo a:focus {
    color: #4bb6b7 !important;
    }

    #menu-wrap {
    position: relative;
    z-index: 2;
    display: block;
    float: right;
    margin-top: 15px;
    }

    #menu-wrap .sf-menu a {
    padding: 1em .75em;
    }

    @media screen and (max-width: 768px) {
    #menu-wrap {
        display: none;
    }
    }

    #primary-menu > li > ul li.active > a {
    color: #4bb6b7 !important;
    }
    #primary-menu > li > .sf-with-ul:after {
    border: none !important;
    font-family: 'icomoon';
    speak: none;
    font-style: normal;
    font-weight: normal;
    font-variant: normal;
    text-transform: none;
    line-height: 1;
    /* Better Font Rendering =========== */
    -webkit-font-smoothing: antialiased;
    -moz-osx-font-smoothing: grayscale;
    position: absolute;
    float: right;
    margin-right: -0px;
    top: 50%;
    font-size: 12px;
    margin-top: -7px;
    content: "\e922";
    color: rgba(0, 0, 0, 0.5);
    }
    #primary-menu > li > ul li {
    position: relative;
    }
    #primary-menu > li > ul li > .sf-with-ul:after {
    border: none !important;
    font-family: 'icomoon';
    speak: none;
    font-style: normal;
    font-weight: normal;
    font-variant: normal;
    text-transform: none;
    line-height: 1;
    /* Better Font Rendering =========== */
    -webkit-font-smoothing: antialiased;
    -moz-osx-font-smoothing: grayscale;
    position: absolute;
    float: right;
    margin-right: 10px;
    top: 20px;
    font-size: 12px;
    content: "\e924";
    color: rgba(0, 0, 0, 0.5);
    }

    #primary-menu .sub-menu {
    padding: 10px 7px 10px;
    background: #fff;
    left: 0;
    -webkit-border-radius: 5px;
    -moz-border-radius: 5px;
    -ms-border-radius: 5px;
    border-radius: 5px;
    -webkit-box-shadow: 0 5px 15px rgba(0, 0, 0, 0.15);
    -moz-box-shadow: 0 5px 15px rgba(0, 0, 0, 0.15);
    -ms-box-shadow: 0 5px 15px rgba(0, 0, 0, 0.15);
    -o-box-shadow: 0 5px 15px rgba(0, 0, 0, 0.15);
    box-shadow: 0 5px 15px rgba(0, 0, 0, 0.15);
    }
    #primary-menu .sub-menu > li > .sub-menu {
    left: 100%;
    }

    #primary-menu .sub-menu:before {
    position: absolute;
    top: -9px;
    left: 20px;
    width: 0;
    height: 0;
    content: '';
    }

    #primary-menu .sub-menu:after {
    position: absolute;
    top: -8px;
    left: 21px;
    width: 0;
    height: 0;
    border-right: 8px solid transparent;
    border-bottom: 8px solid #fff;
    border-bottom: 8px solid white;
    border-left: 8px solid transparent;
    content: '';
    }

    #primary-menu .sub-menu .sub-menu:before {
    top: 6px;
    left: 100%;
    }

    #primary-menu .sub-menu .sub-menu:after {
    top: 7px;
    right: 100%;
    border: none !important;
    }

    .site-header.has-image #primary-menu .sub-menu {
    border-color: #ebebeb;
    -webkit-box-shadow: 0 5px 15px 4px rgba(0, 0, 0, 0.09);
    -moz-box-shadow: 0 5px 15px 4px rgba(0, 0, 0, 0.09);
    -ms-box-shadow: 0 5px 15px 4px rgba(0, 0, 0, 0.09);
    -o-box-shadow: 0 5px 15px 4px rgba(0, 0, 0, 0.09);
    box-shadow: 0 5px 15px 4px rgba(0, 0, 0, 0.09);
    }
    .site-header.has-image #primary-menu .sub-menu:before {
    display: none;
    }

    #primary-menu .sub-menu a {
    letter-spacing: 0;
    padding: 0 15px;
    font-size: 18px;
    line-height: 34px;
    color: #575757 !important;
    text-transform: none;
    background: none;
    }
    #primary-menu .sub-menu a:hover {
    color: #4bb6b7 !important;}
    /* }` */

    .sf-menu {
    margin: 7px 0 0 0 !important;
    }

    .sf-menu {
    float: right;
    }

    .sf-menu ul {
    box-shadow: none;
    border: transparent;
    min-width: 12em;
    *width: 12em;
    }

    .sf-menu a {
    color: rgba(0, 0, 0, 0.5);
    padding: 0.75em 1em !important;
    font-weight: normal;
    border-left: none;
    border-top: none;
    border-top: none;
    text-decoration: none;
    zoom: 1;
    font-size: 16px;
    border-bottom: none !important;
    font-weight: bold;
    }
    .sf-menu a:hover, .sf-menu a:focus {
    color: #4bb6b7 !important;
    }

    .sf-menu li.active a:hover, .sf-menu li.active a:focus {
    color: #4bb6b7;
    }

    .sf-menu li,
    .sf-menu ul li,
    .sf-menu ul ul li,
    .sf-menu li:hover,
    .sf-menu li.sfHover {
    background: transparent;
    }

    .sf-menu ul li a,
    .sf-menu ul ul li a {
    text-transform: none;
    padding: 0.2em 1em !important;
    letter-spacing: 1px;
    font-size: 14px !important;
    }

    .sf-menu li:hover a,
    .sf-menu li.sfHover a,
    .sf-menu ul li:hover a,
    .sf-menu ul li.sfHover a,
    .sf-menu li.active a {
    color: #4bb6b7;
    }

    .sf-menu ul li:hover,
    .sf-menu ul li.sfHover {
    background: transparent;
    }

    .sf-menu ul li {
    background: transparent;
    }

    .action .profile {
    position: relative;
    width: 60px;
    height: 60px;
    border-radius: 50%;
    overflow: hidden;
    cursor: pointer;
    }

    .action .profile img {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        object-fit: cover;
    }

    .action .menu {
        position: relative;
        top: 80px;
        right: -10px;
        padding: 10px 20px;
        background: #fff;
        width: 200px;
        box-sizing: 0 5px 25px #fff;
        border-radius: 15px;
        transition: 0.5s;
    }

    .action .menu h3 {
        width: 100%;
        text-align: center;
        font-size: 18px;
        padding: 20px 0;
        font-weight: 500;
        font-size: 18px;
        color: #555;
        line-height: 1.2em;
    }
</style>

<body>
<div id="wrapper">
<div id="page">
    <header id="header-section" class="sticky-banner">
			<div class="container">
				<div class="nav-header">
					<a href="#" class="nav-toggle nav-toggle dark"><i></i></a>
					<h1 id="logo"><a href="index.html"><i class="icon-airplane"></i>TPGS</a></h1>
					<!-- START #menu-wrap -->
					<nav id="menu-wrap" role="navigation">
						<ul class="sf-menu" id="primary-menu">
							<li class="active"><a href="index.html">Home</a></li>
							<li>
								<a href="vacation.html" class="sub-ddown">Vacations</a>
								<ul class="sub-menu">
									<li><a href="#">Family</a></li>
									<li><a href="#">CSS3 &amp; HTML5</a></li>
									<li><a href="#">Angular JS</a></li>
									<li><a href="#">Node JS</a></li>
									<li><a href="#">Django &amp; Python</a></li>
								</ul>
							</li>
							<li><a href="flight.html">Flights</a></li>
							<li><a href="hotel.html">Hotel</a></li>
							<li><a href="car.html">Car</a></li>
							<li><a href="blog.html">Blog</a></li>
							<li><a href="contact.html">Contact</a></li>
                        </ul>
                            <div class="action">
                                <div class="profile">
                                    <img src="images/melaka.jpg">
                                        <div class="menu">
                                            <h3>Someone Famous<br><span>Website Designer</span></h3>
                                            <ul>
                                                <li><i class="lni lni-user"></i><a href="#">My Profile</a></li>
                                                <li><i class="lni lni-pencil-alt"></i><a href="#">Edit Profile</a></li>
                                                <li><i class="lni lni-popup"></i><a href="#">Inbox</a></li>
                                                <li><i class="lni lni-cogs"></i><a href="#">Settings</a></li>
                                                <li><i class="lni lni-question-circle"></i><a href="#">Helps</a></li>
                                                <li><i class="lni lni-exit"></i><a href="#">Logout</a></li>
                                            </ul>
                                        </div>
                                </div>
                            </div>
					</nav>
				</div>
			</div>
		</header>

</body>
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