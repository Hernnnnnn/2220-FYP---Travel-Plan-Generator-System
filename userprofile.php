<?php
session_start();
include('dataconnection.php');
include "usernavbar.php";

if(isset($_POST['submit'])){
    $rating = $_POST['rate']; 
    $feedback = $_POST['feedback'];
    $email = $_GET['email'];

    $q = "INSERT INTO rating (email, rating, feedback) VALUES ('$email', '$rating', '$feedback')";
    $q1 = mysqli_query($conn,$q);
    
    
    // $username = $_SESSION['username'];

//     $checkQuery = "SELECT * FROM login WHERE email = '$email'";
//     $checkResult = mysqli_query($conn, $checkQuery);

//     if(mysqli_num_rows($checkResult) > 0) {
//         $updateQuery = "UPDATE rating SET `rating` = '$rating', feedback = '$feedback' WHERE email = '$email'";
//         if(mysqli_query($conn, $updateQuery)){
//             echo "Rating and feedback updated successfully.";
//         } else{
//             echo "Error: " . mysqli_error($conn);
//         }
//     } else {
//         $insertQuery = "INSERT INTO rating (email, rating, feedback) VALUES ('$email', '$rating', '$feedback')";
//         if(mysqli_query($conn, $insertQuery)){
//             echo "Rating and feedback added successfully.";
//         } else{
//             echo "Error: " . mysqli_error($conn);
//         }
//     }
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

    <script>
        const ratebtn = document.querySelector(".ratebtn");
        const afterpost = document.querySelector(".afterpost");
        const widget = document.querySelector(".star-widget");
        const editrate = document.querySelector(".editrate");
        ratebtn.onclick = () => {
        widget.style.display = "none";
        afterpost.style.display = "block";
        return false;
        };

        editrate.onclick = () => {
        widget.style.display = "block";
        afterpost.style.display = "none";
        return false;
        };
    </script>
	<?php include "userfooter.php"; ?>
</body>
</html>