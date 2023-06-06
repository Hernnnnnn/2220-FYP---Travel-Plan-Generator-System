<?php
session_start();
include('dataconnection.php');
include "usernavbar.php";

if (isset($_POST['update'])) {
    $prof = $_FILES['image'];
    $email = $_POST['email'];
    $phone = $_POST['phone_number'];

    $username = $_SESSION['username'];

    if (!empty($prof['name'])) {
        $profName = $prof['name'];
        $profTmpName = $prof['tmp_name'];
        $profError = $prof['error'];

        $targetPath = "images/" . $profName;
        move_uploaded_file($profTmpName, $targetPath);

        $updateQuery = "UPDATE login SET image = '$targetPath' WHERE username = '$username'";
        mysqli_query($conn, $updateQuery);
    }

    $updateQuery = "UPDATE login SET email = '$email', phone_number = '$phone' WHERE username = '$username'";

    if (mysqli_query($conn, $updateQuery)) {
        echo "Profile updated successfully.";
    } else {
        echo "Error updating profile: " . mysqli_error($conn);
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>TPGS || User Profile</title>
    <link rel="stylesheet" href="css/style1.css">
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
	<div class="wrapper" style="align-items: center; height: 60%;">
		<div class="left">
			<img src="images/<?php echo $result['image']?>" width="100">
			<h4><?php echo $result['username']?></h4>
			<p>User of Travel Plan Generator</p>

			<form action=" " method="post" enctype="multipart/form-data">
				<input type="file" name="image">
				<input type="submit" name="update" value="Change Picture" class="editprofbtn">
			<!-- </form>

			<form action="userprofile.php" method="post"> -->
				<input type="email" name="email" value="<?php echo $result['email']?>" required>
				<input type="text" name="phone_number" value="<?php echo $result['phone_number']?>" required>
				<input type="submit" name="update" value="Update Profile" class="editprofbtn">
			</form>
		</div>
		
		<div class="right" style="height: 68%;">
        <div class="info">
            <h3>Information</h3>
            <div class="info_data">
                <div class="data">
                    <h4>Email</h4>
                    <input type="email" name="email" value="<?php echo $result['email']?>" required>
                </div>
                <div class="data">
                    <h4>Phone</h4>
                    <input type="text" name="phone" value="<?php echo $result['phone_number']?>" required>
                </div>
            </div>
        </div>
    </div>
</div>
	<?php include "userfooter.php"; ?>
</body>
</html>