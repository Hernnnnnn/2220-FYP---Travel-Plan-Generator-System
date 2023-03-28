<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<style>
    #fh5co-header-section {
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

    .fh5co-nav-toggle.active i::before, .fh5co-nav-toggle.active i::after {
    background: #fff;
    }

    .fh5co-nav-toggle.dark.active i::before, .fh5co-nav-toggle.dark.active i::after {
    background: #fff;
    }

    .fh5co-nav-toggle:hover, .fh5co-nav-toggle:focus, .fh5co-nav-toggle:active {
    outline: none;
    border-bottom: none !important;
    }

    .fh5co-nav-toggle i {
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

    .fh5co-nav-toggle i::before, .fh5co-nav-toggle i::after {
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

    .fh5co-nav-toggle.dark i {
    position: relative;
    color: #000;
    background: #000;
    transition: all .2s ease-out;
    }

    .fh5co-nav-toggle.dark i::before, .fh5co-nav-toggle.dark i::after {
    background: #000;
    -webkit-transition: 0.2s;
    -o-transition: 0.2s;
    transition: 0.2s;
    }

    .fh5co-nav-toggle i::before {
    top: -7px;
    }

    .fh5co-nav-toggle i::after {
    bottom: -7px;
    }

    .fh5co-nav-toggle:hover i::before {
    top: -10px;
    }

    .fh5co-nav-toggle:hover i::after {
    bottom: -10px;
    }

    .fh5co-nav-toggle.active i {
    background: transparent;
    }

    .fh5co-nav-toggle.active i::before {
    top: 0;
    -webkit-transform: rotateZ(45deg);
    -moz-transform: rotateZ(45deg);
    -ms-transform: rotateZ(45deg);
    -o-transform: rotateZ(45deg);
    transform: rotateZ(45deg);
    }

    .fh5co-nav-toggle.active i::after {
    bottom: 0;
    -webkit-transform: rotateZ(-45deg);
    -moz-transform: rotateZ(-45deg);
    -ms-transform: rotateZ(-45deg);
    -o-transform: rotateZ(-45deg);
    transform: rotateZ(-45deg);
    }

    .fh5co-nav-toggle {
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
    .fh5co-nav-toggle {
        display: block;
        top: 0px;
        margin-top: 2em;
    }
    }

    #fh5co-logo {
    position: relative;
    z-index: 2;
    font-size: 28px;
    text-transform: uppercase;
    margin-top: 35px;
    font-weight: 700;
    float: left;
    padding-left: 40px;
    }

    #fh5co-logo i {
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

    #fh5co-logo a {
    color: #4bb6b7;
    }

    #fh5co-logo a:hover, #fh5co-logo a:focus {
    color: #4bb6b7 !important;
    }

    #fh5co-menu-wrap {
    position: relative;
    z-index: 2;
    display: block;
    float: right;
    margin-top: 15px;
    }

    #fh5co-menu-wrap .sf-menu a {
    padding: 1em .75em;
    }

    @media screen and (max-width: 768px) {
    #fh5co-menu-wrap {
        display: none;
    }
    }

    #fh5co-primary-menu > li > ul li.active > a {
    color: #4bb6b7 !important;
    }
    #fh5co-primary-menu > li > .sf-with-ul:after {
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
    #fh5co-primary-menu > li > ul li {
    position: relative;
    }
    #fh5co-primary-menu > li > ul li > .sf-with-ul:after {
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

    #fh5co-primary-menu .fh5co-sub-menu {
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
    #fh5co-primary-menu .fh5co-sub-menu > li > .fh5co-sub-menu {
    left: 100%;
    }

    #fh5co-primary-menu .fh5co-sub-menu:before {
    position: absolute;
    top: -9px;
    left: 20px;
    width: 0;
    height: 0;
    content: '';
    }

    #fh5co-primary-menu .fh5co-sub-menu:after {
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

    #fh5co-primary-menu .fh5co-sub-menu .fh5co-sub-menu:before {
    top: 6px;
    left: 100%;
    }

    #fh5co-primary-menu .fh5co-sub-menu .fh5co-sub-menu:after {
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

    #fh5co-primary-menu .fh5co-sub-menu a {
    letter-spacing: 0;
    padding: 0 15px;
    font-size: 18px;
    line-height: 34px;
    color: #575757 !important;
    text-transform: none;
    background: none;
    }
    #fh5co-primary-menu .fh5co-sub-menu a:hover {
    color: #4bb6b7 !important;
    }`

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
</style>

<body>
    <header id="fh5co-header-section" class="sticky-banner">
			<div class="container">
				<div class="nav-header">
					<a href="#" class="js-fh5co-nav-toggle fh5co-nav-toggle dark"><i></i></a>
					<h1 id="fh5co-logo"><a href="index.html"><i class="icon-airplane"></i>Travel</a></h1>
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
							<li><a href="flight.html">Flights</a></li>
							<li><a href="hotel.html">Hotel</a></li>
							<li><a href="car.html">Car</a></li>
							<li><a href="blog.html">Blog</a></li>
							<li><a href="contact.html">Contact</a></li>
						</ul>
					</nav>
				</div>
			</div>
		</header>
</body>
</html>