<?php
include('dataconnection.php');
$email = $_GET['email'];
?>
<script src="userpreventreturn.js"></script>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TPGS || Homepage</title>
    <link rel="stylesheet" href="css/style1.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"/>
</head>

<body>
    <?php include "usernavbar.php"; ?>

	<div class="hero-travelplan">
		<img src="images/image.gif" alt="Hero Image">
		<div class="hero-travelplancontent">
			<h1>Welcome to TPGS</h1>
			<p>Discover amazing features and services.</p>
		</div>

		<form action="">
			<div class="travelplaninput">
				<h3>Where to</h3>
				<input type="text" placeholder="Enter destination (States)">
			</div>
			<div class="travelplaninput">
				<h3>Start date</h3>
				<input type="date">
			</div>
			<div class="travelplaninput">
				<h3>End date</h3>
				<input type="date">
			</div>
		</form>
	</div>

    <section class="hot" id="hot">
    <h1 class="hot">Hot <span>Tours</span><hr class="tourline"> </h1>
    <div class="tourbox-container">
        <?php
        $query = "SELECT * FROM locations where option = 1";
        $result = mysqli_query($conn, $query);

        if ($result) {
            while ($row = mysqli_fetch_assoc($result)) {
                $image =  'images/'.$row['image_url']; 
                $location = $row['name']; 
                $description = $row['description'];
        ?>
                <div class="tour-box">
                    <div class="image">
                        <img src="<?php echo $image; ?>">
                        <h3><i class="fas fa-map-marker-alt"></i> <?php echo $location; ?></h3>
                    </div>
                    <div class="content">
                        <p><?php echo $description; ?></p>
						<?php 
							$direction_link = $row['direction_link'];
							$locationdetail_link = $row['locationdetail_link'];						
						?>
                        <a href="<?php echo $direction_link; ?>" target="_blank" class="btn">Direction ></a>
                        <a href="<?php echo $locationdetail_link; ?>" target="_blank" class="btn">View more ></a>
                    </div>
                </div>
            <?php
                }
            }
            ?>
        </div>
    </section>
    <?php include "tpgsteam.php"; ?>
	<?php include "userfooter.php"; ?>

</body>
</html>