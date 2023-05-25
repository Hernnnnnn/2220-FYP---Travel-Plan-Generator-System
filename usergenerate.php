<?php
session_start();
include('dataconnection.php');
include "usernavbar.php";
?>

<!DOCTYPE html>
	<html class="no-js">
	<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>TPGS || Itinerary</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="Free HTML5 Template by FREEHTML5.CO" />
	<meta name="keywords" content="free html5, free template, free bootstrap, html5, css3, mobile first, responsive" />
	<meta name="author" content="FREEHTML5.CO" />

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
	<link rel="stylesheet" href="css/usergenerate.css">
	<link rel="stylesheet" href="css/style.css">

	<!-- Modernizr JS -->
	<script src="js/modernizr-2.6.2.min.js"></script>

	</head>
	<body>
		<div id="fh5co-wrapper">
		<div id="fh5co-page">

		<div class="sidenav">
			<a href="#about">About</a>
			<a href="#services">Services</a>
			<a href="#clients">Clients</a>
			<a href="#contact">Contact</a>
			<button class="dropdown-btn">Itinerary 
			  <i class="fa fa-caret-down"></i>
			</button>
			<div class="dropdown-container">
			  <a href="#">day 1</a>
			  <a href="#">day  2</a>
			  <a href="#">day  3</a>
			</div>
		
		  </div>
		  
		  <div class="main">
		
		  </div>

		  <div class="wrapper">
			<div id="search-container">
			  <input
				type="search"
				id="search-input"
				placeholder="Search product name here.."
			  />
			  <button id="search">Search</button>
			</div>
			<div id="buttons">
			  <button class="button-value" onclick="filterProduct('all')">All</button>
			  <button class="button-value" onclick="filterProduct('Hotel')">
				Hotel
			  </button>
			  <button class="button-value" onclick="filterProduct('RESTAURANT')">
			    Food & Beverage
			  </button>
			  <button class="button-value" onclick="filterProduct('DESTINATION')">
				Location
			  </button>
			</div>
			<div id="products"></div>
		  </div>

<div class="product_container">
	<div class = "food-items">
		<!-- item -->
		<div class = "food-item featured">
		  <div class = "food-img">
			<img src = "foods/banana-bread-with-butter-and-milk.jpg" alt = "food image">
		  </div>
		  <div class = "food-content">
			<h2 class = "food-name">Banana Bread With Butter & Milk</h2>
			<div class = "line"></div>
			<h3 class = "food-price">$25.00</h3>
			<ul class = "rating">
			  <li><i class = "fas fa-star"></i></li>
			  <li><i class = "fas fa-star"></i></li>
			  <li><i class = "fas fa-star"></i></li>
			  <li><i class = "fas fa-star"></i></li>
			  <li><i class = "far fa-star"></i></li>
			</ul>
			<p class = "category">Categories: <span>Featured</span></p>
		  </div>
		</div>
		<!-- end of item -->

		<!-- item -->
		<div class = "food-item today-special">
		  <div class = "food-img">
			<img src = "foods/barbecue.jpg" alt = "food image">
		  </div>
		  <div class = "food-content">
			<h2 class = "food-name">Barbecue</h2>
			<div class = "line"></div>
			<h3 class = "food-price">$20.00</h3>
			<ul class = "rating">
			  <li><i class = "fas fa-star"></i></li>
			  <li><i class = "fas fa-star"></i></li>
			  <li><i class = "fas fa-star"></i></li>
			  <li><i class = "fas fa-star"></i></li>
			  <li><i class = "far fa-star"></i></li>
			</ul>
			<p class = "category">Categories: <span>Today's Special</span></p>
		  </div>
		</div>
		<!-- end of item -->

		<!-- item -->
		<div class = "food-item new-arrival">
		  <div class = "food-img">
			<img src = "foods/barbecued-roasted-duck-ramen.jpg" alt = "food image">
		  </div>
		  <div class = "food-content">
			<h2 class = "food-name">Barbecued Roasted Duck Ramen</h2>
			<div class = "line"></div>
			<h3 class = "food-price">$35.00</h3>
			<ul class = "rating">
			  <li><i class = "fas fa-star"></i></li>
			  <li><i class = "fas fa-star"></i></li>
			  <li><i class = "fas fa-star"></i></li>
			  <li><i class = "fas fa-star"></i></li>
			  <li><i class = "far fa-star"></i></li>
			</ul>
			<p class = "category">Categories: <span>New Arrivals</span></p>
		  </div>
		</div>
		<!-- end of item -->

		<!-- item -->
		<div class = "food-item featured">
		  <div class = "food-img">
			<img src = "foods/bread-with-seeds-and-butter.jpg" alt = "food image">
		  </div>
		  <div class = "food-content">
			<h2 class = "food-name">Bread With Seeds & Butter</h2>
			<div class = "line"></div>
			<h3 class = "food-price">$27.00</h3>
			<ul class = "rating">
			  <li><i class = "fas fa-star"></i></li>
			  <li><i class = "fas fa-star"></i></li>
			  <li><i class = "fas fa-star"></i></li>
			  <li><i class = "fas fa-star"></i></li>
			  <li><i class = "far fa-star"></i></li>
			</ul>
			<p class = "category">Categories: <span>Featured</span></p>
		  </div>
		</div>
		<!-- end of item -->

		<!-- item -->
		<div class = "food-item today-special">
		  <div class = "food-img">
			<img src = "foods/breakfast-sandwich-with-hummus-spread-and-fresh-vegetables.jpg" alt = "food image">
		  </div>
		  <div class = "food-content">
			<h2 class = "food-name">Breadfast Sandwich</h2>
			<div class = "line"></div>
			<h3 class = "food-price">$15.00</h3>
			<ul class = "rating">
			  <li><i class = "fas fa-star"></i></li>
			  <li><i class = "fas fa-star"></i></li>
			  <li><i class = "fas fa-star"></i></li>
			  <li><i class = "fas fa-star"></i></li>
			  <li><i class = "far fa-star"></i></li>
			</ul>
			<p class = "category">Categories: <span>Today's Special</span></p>
		  </div>
		</div>
		<!-- end of item -->

		<!-- item -->
		<div class = "food-item new-arrival">
		  <div class = "food-img">
			<img src = "foods/brunch-skillet-with-eggs-and-tomatoes.jpg" alt = "food image">
		  </div>
		  <div class = "food-content">
			<h2 class = "food-name">Brunch Skillet</h2>
			<div class = "line"></div>
			<h3 class = "food-price">$10.00</h3>
			<ul class = "rating">
			  <li><i class = "fas fa-star"></i></li>
			  <li><i class = "fas fa-star"></i></li>
			  <li><i class = "fas fa-star"></i></li>
			  <li><i class = "fas fa-star"></i></li>
			  <li><i class = "far fa-star"></i></li>
			</ul>
			<p class = "category">Categories: <span>New Arrivals</span></p>
		  </div>
		</div>
		<!-- end of item -->

		<!-- item -->
		<div class = "food-item featured">
		  <div class = "food-img">
			<img src = "foods/chicken-breast-steaks-with-beetroot.jpg" alt = "food image">
		  </div>
		  <div class = "food-content">
			<h2 class = "food-name">Chicken Breast Steaks</h2>
			<div class = "line"></div>
			<h3 class = "food-price">$15.00</h3>
			<ul class = "rating">
			  <li><i class = "fas fa-star"></i></li>
			  <li><i class = "fas fa-star"></i></li>
			  <li><i class = "fas fa-star"></i></li>
			  <li><i class = "fas fa-star"></i></li>
			  <li><i class = "far fa-star"></i></li>
			</ul>
			<p class = "category">Categories: <span>Featured</span></p>
		  </div>
		</div>
		<!-- end of item -->

		<!-- item -->
		<div class = "food-item today-special">
		  <div class = "food-img">
			<img src = "foods/chicken-legs-with-tomatoes-peppers-and-oranges.jpg" alt = "food image">
		  </div>
		  <div class = "food-content">
			<h2 class = "food-name">Chicken Legs</h2>
			<div class = "line"></div>
			<h3 class = "food-price">$29.00</h3>
			<ul class = "rating">
			  <li><i class = "fas fa-star"></i></li>
			  <li><i class = "fas fa-star"></i></li>
			  <li><i class = "fas fa-star"></i></li>
			  <li><i class = "fas fa-star"></i></li>
			  <li><i class = "far fa-star"></i></li>
			</ul>
			<p class = "category">Categories: <span>Today's Special</span></p>
		  </div>
		</div>
		<!-- end of item -->

		<!-- item -->
		<div class = "food-item new-arrival">
		  <div class = "food-img">
			<img src = "foods/eggplant-cannelloni.jpg" alt = "food image">
		  </div>
		  <div class = "food-content">
			<h2 class = "food-name">Eggplant Cannelloni</h2>
			<div class = "line"></div>
			<h3 class = "food-price">$35.00</h3>
			<ul class = "rating">
			  <li><i class = "fas fa-star"></i></li>
			  <li><i class = "fas fa-star"></i></li>
			  <li><i class = "fas fa-star"></i></li>
			  <li><i class = "fas fa-star"></i></li>
			  <li><i class = "far fa-star"></i></li>
			</ul>
			<p class = "category">Categories: <span>New Arrivals</span></p>
		  </div>
		</div>
		<!-- end of item -->

		<!-- item -->
		<div class = "food-item featured">
		  <div class = "food-img">
			<img src = "foods/french-fries-with-steak-and-beer.jpg" alt = "food image">
		  </div>
		  <div class = "food-content">
			<h2 class = "food-name">French Fries</h2>
			<div class = "line"></div>
			<h3 class = "food-price">$9.00</h3>
			<ul class = "rating">
			  <li><i class = "fas fa-star"></i></li>
			  <li><i class = "fas fa-star"></i></li>
			  <li><i class = "fas fa-star"></i></li>
			  <li><i class = "fas fa-star"></i></li>
			  <li><i class = "far fa-star"></i></li>
			</ul>
			<p class = "category">Categories: <span>Featured</span></p>
		  </div>
		</div>
		<!-- end of item -->

		<!-- item -->
		<div class = "food-item today-special">
		  <div class = "food-img">
			<img src = "foods/fried-rice-with-shrimps.jpg" alt = "food image">
		  </div>
		  <div class = "food-content">
			<h2 class = "food-name">Fried Rice</h2>
			<div class = "line"></div>
			<h3 class = "food-price">$5.00</h3>
			<ul class = "rating">
			  <li><i class = "fas fa-star"></i></li>
			  <li><i class = "fas fa-star"></i></li>
			  <li><i class = "fas fa-star"></i></li>
			  <li><i class = "fas fa-star"></i></li>
			  <li><i class = "far fa-star"></i></li>
			</ul>
			<p class = "category">Categories: <span>Today's Special</span></p>
		  </div>
		</div>
		<!-- end of item -->

		<!-- item -->
		<div class = "food-item new-arrival">
		  <div class = "food-img">
			<img src = "foods/king-prawns-with-green-lettuce.jpg" alt = "food image">
		  </div>
		  <div class = "food-content">
			<h2 class = "food-name">King Prawns</h2>
			<div class = "line"></div>
			<h3 class = "food-price">$11.00</h3>
			<ul class = "rating">
			  <li><i class = "fas fa-star"></i></li>
			  <li><i class = "fas fa-star"></i></li>
			  <li><i class = "fas fa-star"></i></li>
			  <li><i class = "fas fa-star"></i></li>
			  <li><i class = "far fa-star"></i></li>
			</ul>
			<p class = "category">Categories: <span>New Arrivals</span></p>
		  </div>
		</div>
		<!-- end of item -->

		<!-- item -->
		<div class = "food-item featured">
		  <div class = "food-img">
			<img src = "foods/noodles-with-egg-and-vegetables.jpg" alt = "food image">
		  </div>
		  <div class = "food-content">
			<h2 class = "food-name">Noodles</h2>
			<div class = "line"></div>
			<h3 class = "food-price">$5.00</h3>
			<ul class = "rating">
			  <li><i class = "fas fa-star"></i></li>
			  <li><i class = "fas fa-star"></i></li>
			  <li><i class = "fas fa-star"></i></li>
			  <li><i class = "fas fa-star"></i></li>
			  <li><i class = "far fa-star"></i></li>
			</ul>
			<p class = "category">Categories: <span>Featured</span></p>
		  </div>
		</div>
		<!-- end of item -->

		<!-- item -->
		<div class = "food-item today-special">
		  <div class = "food-img">
			<img src = "foods/pizza-with-a-lot-of-cheese.jpg" alt = "food image">
		  </div>
		  <div class = "food-content">
			<h2 class = "food-name">Cheese Pizza</h2>
			<div class = "line"></div>
			<h3 class = "food-price">$12.00</h3>
			<ul class = "rating">
			  <li><i class = "fas fa-star"></i></li>
			  <li><i class = "fas fa-star"></i></li>
			  <li><i class = "fas fa-star"></i></li>
			  <li><i class = "fas fa-star"></i></li>
			  <li><i class = "far fa-star"></i></li>
			</ul>
			<p class = "category">Categories: <span>Today's Special</span></p>
		  </div>
		</div>
		<!-- end of item -->

		<!-- item -->
		<div class = "food-item new-arrival">
		  <div class = "food-img">
			<img src = "foods/summer-juicy-beef-burger.jpg" alt = "food image">
		  </div>
		  <div class = "food-content">
			<h2 class = "food-name">Juicy beef burger</h2>
			<div class = "line"></div>
			<h3 class = "food-price">$14.00</h3>
			<ul class = "rating">
			  <li><i class = "fas fa-star"></i></li>
			  <li><i class = "fas fa-star"></i></li>
			  <li><i class = "fas fa-star"></i></li>
			  <li><i class = "fas fa-star"></i></li>
			  <li><i class = "far fa-star"></i></li>
			</ul>
			<p class = "category">Categories: <span>New Arrivals</span></p>
		  </div>
		</div>
		<!-- end of item -->

		<!-- item -->
		<div class = "food-item featured">
		  <div class = "food-img">
			<img src = "foods/tacos-with-pulled-pork-fresh-vegetables-and-cream.jpg" alt = "food image">
		  </div>
		  <div class = "food-content">
			<h2 class = "food-name">Tacos with pulled pork</h2>
			<div class = "line"></div>
			<h3 class = "food-price">$22.00</h3>
			<ul class = "rating">
			  <li><i class = "fas fa-star"></i></li>
			  <li><i class = "fas fa-star"></i></li>
			  <li><i class = "fas fa-star"></i></li>
			  <li><i class = "fas fa-star"></i></li>
			  <li><i class = "far fa-star"></i></li>
			</ul>
			<p class = "category">Categories: <span>Featured</span></p>
		  </div>
		</div>
		<!-- end of item -->

		<!-- item -->
		<div class = "food-item today-special">
		  <div class = "food-img">
			<img src = "foods/tiny-pickles-on-top-of-burger.jpg" alt = "food image">
		  </div>
		  <div class = "food-content">
			<h2 class = "food-name">tiny pickles</h2>
			<div class = "line"></div>
			<h3 class = "food-price">$7.00</h3>
			<ul class = "rating">
			  <li><i class = "fas fa-star"></i></li>
			  <li><i class = "fas fa-star"></i></li>
			  <li><i class = "fas fa-star"></i></li>
			  <li><i class = "fas fa-star"></i></li>
			  <li><i class = "far fa-star"></i></li>
			</ul>
			<p class = "category">Categories: <span>Today's Special</span></p>
		  </div>
		</div>
		<!-- end of item -->

		<!-- item -->
		<div class = "food-item new-arrival">
		  <div class = "food-img">
			<img src = "foods/tortilla-chips-with-salsa.jpg" alt = "food image">
		  </div>
		  <div class = "food-content">
			<h2 class = "food-name">tortilla chips</h2>
			<div class = "line"></div>
			<h3 class = "food-price">$26.00</h3>
			<ul class = "rating">
			  <li><i class = "fas fa-star"></i></li>
			  <li><i class = "fas fa-star"></i></li>
			  <li><i class = "fas fa-star"></i></li>
			  <li><i class = "fas fa-star"></i></li>
			  <li><i class = "far fa-star"></i></li>
			</ul>
			<p class = "category">Categories: <span>New Arrivals</span></p>
		  </div>
		</div>
		<!-- end of item -->
	  </div>
</div>
		<!-- end of item -->

		<!-- item -->
		
		<script src="drop.js"></script>
		<script src="searchbar.js"></script>
	</body>
	</html>