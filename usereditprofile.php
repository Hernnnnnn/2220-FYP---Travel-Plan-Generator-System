<?php
session_start();
include('dataconnection.php');
include "usernavbar.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>TPGS || User Profile</title>
</head>
<style>
	body{
    background-image: url(images/image.gif);
    background-size: cover; 
    background-repeat: no-repeat;
    background-attachment: fixed;
    }
</style>
<body>
	<div class="wrapper">
		<div class="left">
			<img src="images/<?php echo $result['image']?>" width="100">
			<h4><?php echo $result['username']?></h4>
			<p>User of Travel Plan Generator</p>

			<button name="submit" type="submit" class="editprofbtn" onclick="window.location.href = 'usereditprofile.php?email=<?php echo $email; ?>';">Edit Profile</button>
		</div>
		
		<div class="right">
			<div class="info">
				<h3>Information</h3>
				<div class="info_data">
					<div class="data">
						<h4>Email</h4>
						<p><?php echo $result['email']?></p>
						<div class="data">
							<h4>Phone</h4>
							<p><?php echo $result['phone_number']?> </p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<?php include "userfooter.php"; ?>
</body>
</html>