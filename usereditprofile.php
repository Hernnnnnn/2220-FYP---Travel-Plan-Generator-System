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
	<title>TPGS || Edit Profile</title>
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
<body>
	<div class="editcon">
		<h1>Edit User Profile</h1>
		<div class="profile-section">
			<div class="profile-image">
				<img id="preview-image" src="images/<?php echo $result['image'] ?>" alt="Profile Image">
			</div>
			<div class="profile-details">
				<form action="userprofile.php?email=<?php echo $email; ?>" method="post" enctype="multipart/form-data">
					<div class="form-group">
						<label for="username">Username</label>
						<input type="text" id="username" name="username" value="<?php echo $result['username'] ?>">
					</div>
					<div class="form-group">
						<label for="contact-number">Contact Number</label>
						<input type="text" id="contact-number" name="contact_number" value="<?php echo $result['phone_number'] ?>">
					</div>
					<div class="form-group">
						<label for="profile-image">Profile Image</label>
						<input type="file" id="profile-image" name="profile_image" onchange="previewImage(event)">
					</div>
					<div class="form-group">
						<label for="email">Email</label>
						<input type="email" id="email" name="email" value="<?php echo $result['email'] ?>">
					</div>
					<button type="submit" class="btn">Update Profile</button>
				</form>
			</div>
		</div>
	</div>
	<?php include "userfooter.php"; ?>

</body>
</html>