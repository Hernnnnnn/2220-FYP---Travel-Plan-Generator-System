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
	<title>TPGS || Penang</title>
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
	
	<link rel="stylesheet" href="css/style.css">
	<link rel="stylesheet" href="placedetail.css">
	<link rel="stylesheet" href="sw.css" >


	<!-- Modernizr JS -->
	<script src="js/modernizr-2.6.2.min.js"></script>
	<!-- FOR IE9 below -->
	<!--[if lt IE 9]>
	<script src="js/respond.min.js"></script>
	<![endif]-->


	</head>
  <body>
		<div class="fh5co-hero">
			<div class="fh5co-overlay"></div>
			<div class="fh5co-cover" data-stellar-background-ratio="0.5" style="background-image: url(images/image.gif); ">
				<div class="desc">
					<div class="container">
						<div class="row">
							<div class="col-sm-5 col-md-5">
								<div class="tabulation animate-box">

								  <!-- Nav tabs -->
								   <ul class="nav nav-tabs" role="tablist">
								      <li role="presentation" class="active">
								      	<a href="#flights" aria-controls="flights" role="tab" data-toggle="tab">Itinerary Planner</a>
								      </li>
								   </ul>

								   <!-- Tab panes -->
									<div class="tab-content">
									 <div role="tabpanel" class="tab-pane active" id="flights">
										<div class="row">
											<div class="col-xxs-12 col-xs-6 mt">
												<div class="input-field">
													<label for="from">From:</label>
													<input type="text" class="form-control" id="from-place" placeholder="Los Angeles, USA"/>
												</div>
											</div>
											<div class="col-xxs-12 col-xs-6 mt">
												<div class="input-field">
													<label for="from">To:</label>
													<input type="text" class="form-control" id="to-place" placeholder="Tokyo, Japan"/>
												</div>
											</div>
											<div class="col-xxs-12 col-xs-6 mt alternate">
												<div class="input-field">
													<label for="date-start">Start Date</label>
													<input type="text" class="form-control" id="date-start" placeholder="mm/dd/yyyy"/>
												</div>
											</div>
											<div class="col-xxs-12 col-xs-6 mt alternate">
												<div class="input-field">
													<label for="date-end">End date</label>
													<input type="text" class="form-control" id="date-end" placeholder="mm/dd/yyyy"/>
												</div>
											</div>
											<div class="col-sm-12 mt">
												<section>
													<label for="class">Class:</label>
													<select class="cs-select cs-skin-border">
														<option value="" disabled selected>Economy</option>
														<option value="economy">Economy</option>
														<option value="first">First</option>
														<option value="business">Business</option>
													</select>
												</section>
											</div>
											<div class="col-xxs-12 col-xs-6 mt">
												<section>
													<label for="class">Adult:</label>
													<select class="cs-select cs-skin-border">
														<option value="" disabled selected>1</option>
														<option value="1">1</option>
														<option value="2">2</option>
														<option value="3">3</option>
														<option value="4">4</option>
													</select>
												</section>
											</div>
											<div class="col-xxs-12 col-xs-6 mt">
												<section>
													<label for="class">Children:</label>
													<select class="cs-select cs-skin-border">
														<option value="" disabled selected>1</option>
														<option value="1">1</option>
														<option value="2">2</option>
														<option value="3">3</option>
														<option value="4">4</option>
													</select>
												</section>
											</div>
											<div class="col-xs-12">
												<input type="submit" class="btn btn-primary btn-block" value="Search Flight">
											</div>
										</div>
									 </div>

									 <div role="tabpanel" class="tab-pane" id="hotels">
									 	<div class="row">
											<div class="col-xxs-12 col-xs-12 mt">
												<div class="input-field">
													<label for="from">City:</label>
													<input type="text" class="form-control" id="from-place" placeholder="Los Angeles, USA"/>
												</div>
											</div>
											<div class="col-xxs-12 col-xs-6 mt alternate">
												<div class="input-field">
													<label for="date-start">Return:</label>
													<input type="text" class="form-control" id="date-start" placeholder="mm/dd/yyyy"/>
												</div>
											</div>
											<div class="col-xxs-12 col-xs-6 mt alternate">
												<div class="input-field">
													<label for="date-end">Check Out:</label>
													<input type="text" class="form-control" id="date-end" placeholder="mm/dd/yyyy"/>
												</div>
											</div>
											<div class="col-sm-12 mt">
												<section>
													<label for="class">Rooms:</label>
													<select class="cs-select cs-skin-border">
														<option value="" disabled selected>1</option>
														<option value="economy">1</option>
														<option value="first">2</option>
														<option value="business">3</option>
													</select>
												</section>
											</div>
											<div class="col-xxs-12 col-xs-6 mt">
												<section>
													<label for="class">Adult:</label>
													<select class="cs-select cs-skin-border">
														<option value="" disabled selected>1</option>
														<option value="1">1</option>
														<option value="2">2</option>
														<option value="3">3</option>
														<option value="4">4</option>
													</select>
												</section>
											</div>
											<div class="col-xxs-12 col-xs-6 mt">
												<section>
													<label for="class">Children:</label>
													<select class="cs-select cs-skin-border">
														<option value="" disabled selected>1</option>
														<option value="1">1</option>
														<option value="2">2</option>
														<option value="3">3</option>
														<option value="4">4</option>
													</select>
												</section>
											</div>
											<div class="col-xs-12">
												<input type="submit" class="btn btn-primary btn-block" value="Search Hotel">
											</div>
										</div>
									 </div>

									 <div role="tabpanel" class="tab-pane" id="packages">
									 	<div class="row">
											<div class="col-xxs-12 col-xs-6 mt">
												<div class="input-field">
													<label for="from">City:</label>
													<input type="text" class="form-control" id="from-place" placeholder="Los Angeles, USA"/>
												</div>
											</div>
											<div class="col-xxs-12 col-xs-6 mt">
												<div class="input-field">
													<label for="from">Destination:</label>
													<input type="text" class="form-control" id="to-place" placeholder="Tokyo, Japan"/>
												</div>
											</div>
											<div class="col-xxs-12 col-xs-6 mt alternate">
												<div class="input-field">
													<label for="date-start">Departs:</label>
													<input type="text" class="form-control" id="date-start" placeholder="mm/dd/yyyy"/>
												</div>
											</div>
											<div class="col-xxs-12 col-xs-6 mt alternate">
												<div class="input-field">
													<label for="date-end">Return:</label>
													<input type="text" class="form-control" id="date-end" placeholder="mm/dd/yyyy"/>
												</div>
											</div>
											<div class="col-sm-12 mt">
												<section>
													<label for="class">Rooms:</label>
													<select class="cs-select cs-skin-border">
														<option value="" disabled selected>1</option>
														<option value="economy">1</option>
														<option value="first">2</option>
														<option value="business">3</option>
													</select>
												</section>
											</div>
											<div class="col-xxs-12 col-xs-6 mt">
												<section>
													<label for="class">Adult:</label>
													<select class="cs-select cs-skin-border">
														<option value="" disabled selected>1</option>
														<option value="1">1</option>
														<option value="2">2</option>
														<option value="3">3</option>
														<option value="4">4</option>
													</select>
												</section>
											</div>
											<div class="col-xxs-12 col-xs-6 mt">
												<section>
													<label for="class">Children:</label>
													<select class="cs-select cs-skin-border">
														<option value="" disabled selected>1</option>
														<option value="1">1</option>
														<option value="2">2</option>
														<option value="3">3</option>
														<option value="4">4</option>
													</select>
												</section>
											</div>
											<div class="col-xs-12">
												<input type="submit" class="btn btn-primary btn-block" value="Search Packages">
											</div>
										</div>
									 </div>
									</div>

								</div>
							</div>
							<div class="desc2 animate-box">
								<div class="col-sm-7 col-sm-push-1 col-md-7 col-md-push-1">
									<p>HandCrafted by <a href="http://frehtml5.co/" target="_blank" class="fh5co-site-name">FreeHTML5.co</a></p>
									<h2>Exclusive Limited Time Offer</h2>
									<h3>Fly to Hong Kong via Los Angeles, USA</h3>
									<span class="price">$599</span>
									<!-- <p><a class="btn btn-primary btn-lg" href="#">Get Started</a></p> -->
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>

		</div>


        <div class="place_detail">
            <div class="container_placedetail">
                <div class="placedetail_title">
                    <h1>Penang</h1>
                    <p>Penang, also called Penang Island, Malay Pinang or Pulau Pinang, island of Malaysia, lying in the Strait of Malacca off the northwest coast of peninsular Malaya, from which it is separated by a narrow strait whose smallest width is 2.5 miles (4 km)</p>

                </div>

            <div class="placedetail_img">
                <video  controls autoplay loop >
                    <source src="images/penang.mp4">
                </video>
            </div>

           

        </div>

    </div>

	<div class="introduction">
		<h1 >What to know before visiting Penang</h1>
		<div class="introduction-description">
			<h2 >about Kuala Lumpur</h2>
			<p>Malaysia’s capital Kuala Lumpur is known for its skyscrapers and cultural diversity. Rise to the top of the iconic Petronas Twin Towers–the world’s tallest twin towers; or brave the glass-bottomed viewing box at the Sky Deck in KL Tower!

				A city bustling with excitement from day to night, Kuala Lumpur offers you a splashing good time at Sunway Lagoon. Spend time walking up the steps of the Batu Caves, a picturesque limestone hill. A melting pot of culture from all over the world, the local cuisine is bound to tantalize your taste buds! Simply go on a street food hunt and you’ll understand why. To escape the heat, take a day trip to Genting Highlands, a hilltop City of Entertainment.</p>
			
		</div>
	</div>
	<div class="container-1">

		<h1 class="heading">Top sights in Kuala Lumpur</h1>
	 
		<div class="box-container">
	 
		   <div class="box">
			  <div class="image">
				 <img src="images/KLCCC.jpg" alt="">
			  </div>
			  <div class="content">
				 <h3>KLCC</h3>
				 <p> KLCC Twin Towers, are a pair of 88-storey supertall skyscrapers in Kuala Lumpur</p>
				 <a href="#" class="btn">read more</a>
				 <div class="icons">
					<span> <i class="fas fa-calendar"></i> </span>
					
				 </div>
			  </div>
		   </div>
	 
		   <div class="box">
			  <div class="image">
				 <img src="images/pavilion.jpg" alt="">
			  </div>
			  <div class="content">
				 <h3>pavilion</h3>
				 <p>Pavilion Kuala Lumpur is a shopping centre  in Kuala Lumpur, Malaysia.</p>
				 <a href="#" class="btn">read more</a>
				 <div class="icons"></div>
			  </div>
		   </div>
	 
		   <div class="box">
			  <div class="image">
				 <img src="images/thean-hou.jpg" alt="">
			  </div>
			  <div class="content">
				 <h3>Thean-hou</h3>
				 <p> Theon Hou is an ancient temple which is also a popular tourist attraction</p>
				 <a href="#" class="btn">read more</a>
				 <div class="icons">
					<span> <i class="fas fa-calendar"></i> 21st may, 2022 </span>
					<span> <i class="fas fa-user"></i> by admin </span>
				 </div>
			  </div>
		   </div>
	 
		   <div class="box">
			  <div class="image">
				 <img src="images/KLL.jpg" alt="">
			  </div>
			  <div class="content">
				 <h3>Aquaria KLCC</h3>
				 <p>One of the top Kuala Lumpur tourist places is Aquaria which is said to be one of the largest aquariums in Southeast Asia.</p>
				 <a href="#" class="btn">read more</a>
				 <div class="icons">
					<span> <i class="fas fa-calendar"></i> 21st may, 2022 </span>
					<span> <i class="fas fa-user"></i> by admin </span>
				 </div>
			  </div>
		   </div>
	 
		   <div class="box">
			  <div class="image">
				 <img src="images/KL ZOO.jpg" alt="">
			  </div>
			  <div class="content">
				 <h3>Kl Tower Mini Zoo</h3>
				 <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quod, adipisci!</p>
				 <a href="#" class="btn">read more</a>
				 <div class="icons">
					<span> <i class="fas fa-calendar"></i> 21st may, 2022 </span>
					<span> <i class="fas fa-user"></i> by admin </span>
				 </div>
			  </div>
		   </div>
	 
		   <div class="box">
			  <div class="image">
				 <img src="images/KL BATU CABUSr.jpg" alt="">
			  </div>
			  <div class="content">
				 <h3>Batu Caves</h3>
				 <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quod, adipisci!</p>
				 <a href="#" class="btn">read more</a>
				 <div class="icons">
					<span> <i class="fas fa-calendar"></i> 21st may, 2022 </span>
					<span> <i class="fas fa-user"></i> by admin </span>
				 </div>
			  </div>
		   </div>
	 
		  
	 
		</div>
	 
		<div id="load-more"> load more </div>
	 
	 </div>


    

	
	<div class="container-2 swiper">
		<h2>Popular food</h2>
		<div class="slide-container">
		  <div class="card-wrapper swiper-wrapper">
			<div class="card swiper-slide">
			  <div class="image-box">
				<img src="images/kuala lumpur.jpg" alt="" />
			  </div>
			  <div class="food-details">
	
				<div class="title-description">
				  <h3 class="title">David Cardlos</h3>
				  <h4 class="description">Full Stack Developer</h4>
				</div>
			  </div>
			</div>
			<div class="card swiper-slide">
			  <div class="image-box">
				<img src="images/kuala lumpur.jpg" alt="" />
			  </div>
			  <div class="food-details">
			
				<div class="title-description">
				  <h3 class="title">Siliana Ramis</h3>
				  <h4 class="description">Photographer</h4>
				</div>
			  </div>
			</div>
			<div class="card swiper-slide">
			  <div class="image-box">
				<img src="images/kuala lumpur.jpg" alt="" />
			  </div>
			  <div class="food-details">
			
				<div class="title-description">
				  <h3 class="title">Richard Bond</h3>
				  <h4 class="description">Data Analyst</h4>
				</div>
			  </div>
			</div>
			<div class="card swiper-slide">
			  <div class="image-box">
				<img src="images/kuala lumpur.jpg" alt="" />
			  </div>
			  <div class="food-details">
		
				<div class="title-description">
				  <h3 class="title">Priase</h3>
				  <h4 class="description">App Developer</h4>
				</div>
			  </div>
			</div>
			<div class="card swiper-slide">
			  <div class="image-box">
				<img src="images/kuala lumpur.jpg" alt="" />
			  </div>
			  <div class="food-details">
			
				<div class="title-description">
				  <h3 class="title">James Laze</h3>
				  <h4 class="description">Blogger</h4>
				</div>
			  </div>
			</div>
		  </div>
		</div>
		<div class="swiper-button-next swiper-navBtn"></div>
		<div class="swiper-button-prev swiper-navBtn"></div>
		<div class="swiper-pagination"></div>
	  </div>
  

	<script src="place.js"></script>
	<script src="loadmore.js"></script>
	<script src="swiper-bundle.min.js"></script>
    <script src="sw.js"></script>
  </body>
</html>
