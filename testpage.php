<?php
include('dataconnection.php');
$email = $_GET['email'];
$query = "SELECT 'loc_name', 'loc_image', 'loc_video' from location";
$result = mysqli_query($conn, $query);

if (!$result) {
    die('Error: ' . mysqli_error($conn));
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TPGS || Navbar</title>
    <link rel="stylesheet" href="css/style1.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"/>
</head>

<body>
<?php include "usernavbar.php"; ?>
    <section class="hot" id="hot">
        <h1 class="hot">Hot <span>Tours</span> </h1>
        <div class="box-container">
            <?php
            // Check if there are any rows returned
            if (mysqli_num_rows($result) > 0) {
                // Loop through the result set and display each location
                while ($row = mysqli_fetch_assoc($result)) {
                    $locationname = $row['loc_name'];
                    $locationimage = $row['loc_image'];
                    $locationvideo = $row['loc_video'];
            ?>
            <div class="box">
                <div class="image">
                    <img src="images/<?php echo $locationimage; ?>" alt="">
                    <h3><i class="fas fa-map-marker-alt"><?php echo $locationname; ?></i></h3>
                </div>
            </div>
            <?php
                }
            } else {
                echo "No locations found.";
            }
            ?>
        </div>
    </section>

    <div id="fh5co-tours" class="fh5co-section-gray">
			<div class="container">
				<div class="row">
					<div class="col-md-8 col-md-offset-2 text-center heading-section animate-box">
						<h3>Hot Tours</h3>
						<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
					</div>
				</div>
				<div class="row">
					<div class="col-md-4 col-sm-6 fh5co-tours animate-box" data-animate-effect="fadeIn">
						<div href="#"><img src="images/kuala lumpur.jpg" alt="Free HTML5 Website Template by FreeHTML5.co" class="img-responsive">
							<div class="desc">
								<span></span>
								<h3>Kuala Lumpur</h3>
								<span></span>
								<span class="price"></span>
								<a class="btn btn-primary btn-outline" href="userhplocation_kl.php">View more<i class="icon-arrow-right22"></i></a>
							</div>
						</div>
					</div>
					<div class="col-md-4 col-sm-6 fh5co-tours animate-box" data-animate-effect="fadeIn">
						<div href="#"><img src="images/melaka.jpg" alt="Free HTML5 Website Template by FreeHTML5.co" class="img-responsive">
							<div class="desc">
								<span></span>
								<h3>Melaka</h3>
								<span></span>
								<span class="price"></span>
								<a class="btn btn-primary btn-outline" href="userhplocation_mlk.php">View more <i class="icon-arrow-right22"></i></a>
							</div>
						</div>
					</div>
					<div class="col-md-4 col-sm-6 fh5co-tours animate-box" data-animate-effect="fadeIn">
						<div href="#"><img src="images/penang.jpg" alt="Free HTML5 Website Template by FreeHTML5.co" class="img-responsive">
							<div class="desc">
								<span></span>
								<h3>Penang</h3>
								<span></span>
								<span class="price"></span>
								<a class="btn btn-primary btn-outline" href="userhplocation_pen.php">View more <i class="icon-arrow-right22"></i></a>
							</div>
						</div>
					</div>
					<div class="col-md-12 text-center animate-box">
						<p><a class="btn btn-primary btn-outline btn-lg" href="#">See All Offers <i class="icon-arrow-right22"></i></a></p>
					</div>
				</div>
			</div>
		</div>
    <?php include "tpgsteam.php"; ?>
	<?php include "userfooter.php"; ?>
</body>
</html>