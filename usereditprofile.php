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
  <form action="userprofile.php?email=<?php echo $email; ?>" method="post" enctype="multipart/form-data">
    <div class="profile-image">
      <img id="preview-image" src="images/<?php echo $result['image'] ?>" alt="Profile Image">
      <label for="profile-image" style="text-align:center;">Profile Image</label>
      <input type="file" id="profile-image" name="profile_image" onchange="previewImage(event)">
      <button class="upbtn profile-image-btn">Choose File</button>
    </div>
    <div class="profile-details">
        <div class="form-group">
          <label for="username">Username</label>
          <input type="text" id="username" name="username" value="<?php echo $result['username'] ?>">
        </div>
        <div class="form-group">
          <label for="contact-number">Phone Number</label>
          <input type="text" id="contact-number" name="contact_number" value="<?php echo $result['phone_number'] ?>">
        </div>
        <div class="form-group">
          <label for="email">Email</label>
          <input type="email" id="email" name="email" value="<?php echo $result['email'] ?>">
        </div>
        <button type="submit" class="upbtn">Update Profile</button>
      </form>
    </div>
  </div>
</div>

<script>
  function previewImage(event) {
    var reader = new FileReader();
    reader.onload = function() {
      var preview = document.getElementById('preview-image');
      preview.src = reader.result;
    };
    reader.readAsDataURL(event.target.files[0]);
  }
</script>


	<?php include "userfooter.php"; ?>
</body>
</html>