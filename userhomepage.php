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
			<p>Generate your own travel plan now</p>
		</div>

		<div class="hero-form">
			<form id="travelForm" action="usergenerator.php" method="GET">
				<div class="travelplaninput">
					<h3>Where to</h3>
					<select name="destination" class="form-control" required>
						<?php
						$query = "SELECT name FROM locations";
						$result = mysqli_query($conn, $query);
						
							while ($row1 = mysqli_fetch_assoc($result)) {
								$name = $row1['name'];
								echo "<option value='$name'>$name</option>";
							}
						?>
					</select>
				</div>
				<div class="travelplaninput">
					<h3>Start date</h3>
					<input id="startDate" type="date" name="start_date" required>
				</div>
				<div class="travelplaninput">
					<h3>End date</h3>
					<input id="endDate" type="date" name="end_date" required>
				</div>
				<input type="hidden" name="email" value="<?php echo $result['email']; ?>">
				<input type="submit" class="travelbtn" value="Generate Now">
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

	<script>
	document.getElementById('travelForm').addEventListener('submit', function(e) {
		e.preventDefault();

		var destination = document.getElementById('destination').value;
		var startDate = document.getElementById('startDate').value;
		var endDate = document.getElementById('endDate').value;

		var email = document.querySelector('input[name="email"]').value;

		var start = new Date(startDate);
		var end = new Date(endDate);
		var timeDiff = Math.abs(end.getTime() - start.getTime());
		var numDays = Math.ceil(timeDiff / (1000 * 3600 * 24));

		window.location.href = 'usergenerator.php?email=' + email + '&destination=' + destination + '&num_days=' + numDays;
	});
	</script>

</body>
</html>