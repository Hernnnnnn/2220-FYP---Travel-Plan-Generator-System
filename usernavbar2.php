<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User || Navbar</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"/>
</head>

<style>

/* Styling for the navbar */
.sticky-banner {
  position: fixed;
  top: 0;
  left: 0;
  right: 0;
  z-index: 999;
  background-color: #fff;
  box-shadow: 0 1px 2px rgba(0, 0, 0, 0.1);
  height: 70px;
  line-height: 70px;
}

.container {
  margin: 0 auto;
  max-width: 1170px;
  padding: 0 15px;
}
#fh5co-logo i {
  position: relative;
  font-size: 16px;
  color: #4bb6b7;
  background: rgba(0, 0, 0, 0.06);
  padding: 10px;
  border-radius: 50%;
  margin: 5px;
  bottom: 5px;
}

/* Styling for the logo */
#fh5co-logo {
  float: left;
  margin: 0;
  color: #4bb6b7;
}

#fh5co-logo a {
  color: #000;
  font-size: 24px;
  font-weight: bold;
  text-transform: uppercase;
  letter-spacing: 1px;
  display: block;
  padding: 0 15px;
  line-height: 70px;
}

#fh5co-logo a:hover {
  color: #02c0a7;
}

/* Styling for the navigation menu */
#fh5co-menu-wrap {
  float: right;
  margin: 0;
  padding: 0;
  position: relative;
  z-index: 999;
}

#fh5co-primary-menu {
  list-style: none;
  margin: 0;
  padding: 0;
}

#fh5co-primary-menu li {
  float: left;
  margin: 0;
  padding: 0;
  position: relative;
}

#fh5co-primary-menu li a {
  display: block;
  padding: 0 20px;
  font-size: 16px;
  color: #000;
  line-height: 70px;
  text-transform: uppercase;
  text-decoration: none;
  letter-spacing: 1px;
}

#fh5co-primary-menu li a:hover {
  color: #02c0a7;
}

/* Styling for the sub-menu */
.fh5co-sub-menu {
  display: none;
  position: absolute;
  left: 0;
  top: 70px;
  width: 200px;
  background-color: #fff;
  box-shadow: 0 1px 2px rgba(0, 0, 0, 0.1);
}

.fh5co-sub-menu li {
  display: block;
  float: none;
  margin: 0;
  padding: 0;
}

.fh5co-sub-menu li a {
  display: block;
  padding: 10px 20px;
  color: #000;
  font-size: 14px;
  line-height: 1.2;
  text-decoration: none;
  text-transform: none;
  letter-spacing: 0;
}

.fh5co-sub-menu li a:hover {
  background-color: #02c0a7;
  color: #fff;
}

/* Styling for the dropdown arrow */
.fh5co-sub-ddown {
  position: relative;
}

.fh5co-sub-ddown::after {
  content: "\f0d7";
  font-family: FontAwesome;
  position: absolute;
  right: 0;
  top: 50%;
  transform: translateY(-50%);
  font-size: 14px;
  color: #000;
}

.fh5co-sub-ddown:hover::after {
  color: #02c0a7;
}

/* Styling for the user profile image */
.img {
  margin-top: 18px;
}
</style>
<body>
<div id="fh5co-wrapper">
<div id="fh5co-page">
<header id="fh5co-header-section" class="sticky-banner">
			<div class="container">
			
				<div class="nav-header">
					
				<h1 id="fh5co-logo"><i class="fas fa-plane"></i>TPGS</a></h1>
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
</html>