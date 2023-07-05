<?php
session_start();
include('dataconnection.php');
include "usernavbar.php";

$email = $_GET['email'];
$query = "SELECT * FROM `login` WHERE `email`='$email'";
$result = mysqli_query($conn, $query);
$editres = mysqli_fetch_assoc($result);

if (isset($_POST['update'])) {
  $username = $_POST['username'];
  $phone = $_POST['phone_number'];

  if ((!empty($username)) && (!empty($phone))) {
    if (isset($_FILES['image']) && $_FILES['image']['error'] === UPLOAD_ERR_OK) {
      $file = $_FILES['image'];

      $directory = 'uploads/';

      $newfname = uniqid() . '_' . $file['name'];

      $path = $directory . $newfname;
      if (move_uploaded_file($file['tmp_name'], $path)) {
        $update = "UPDATE `login` SET `username`='$username', `phone_number`='$phone', `image`='$path' WHERE `email`='$email'";
      } else {
        echo "<div class='popup'>
                <h2>Error</h2>
                <p>Failed to move the uploaded file.</p>
                <button class='close'></button>
              </div>";
        exit;
      }
    } else {
      $update = "UPDATE `login` SET `username`='$username', `phone_number`='$phone' WHERE `email`='$email'";
    }

    $latestprof = mysqli_query($conn, $update);

    if ($latestprof) {
      $_SESSION['image'] = $path;
      echo "<div class='popup' style='background-color: #3dec55;'>
              <h2>Notification</h2>
              <p>Profile updated!</p>
              <button class='close'></button>
            </div>";

      echo '<script>
              setTimeout(function(){
                  window.location.href = "userprofile.php?email='.$email.'";
              }, 2000);
            </script>';
    } else {
      echo "<div class='popup'>
              <h2>Oh ouh</h2>
              <p>Something went wrong, please try again</p>
              <button class='close'></button>
            </div>";
    }
  } else {
    echo "<div class='popup'>
            <h2>Oh ouh</h2>
            <p>You are not allowed to leave any of the fields empty</p>
            <button class='close'></button>
          </div>";
  }
}
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
:root {
  --primary: #4bb6b7;
  --secondary: #FFFFFF;
  --gray: #575757;
  --lightgray: #848484;
  --lightgray2: rgba(127, 183, 126, 0.1);
  --darkgray: #2E3238;
  --black: #393e46;
  --green: #00AD7C;
  --yellow: #FFEA61;
  --shadow: 0px 2px 8px 0px var(--lightgray);
}

* {
  margin: 0;
  padding: 0;
  box-sizing: border-box;
  list-style: none;
  font-family: sans-serif;
}

body {
  background-image: url(images/image.gif);
  background-size: cover;
  background-repeat: no-repeat;
  background-attachment: fixed;
}

.wrapper {
  margin: auto;
  margin-top: 150px;
  max-width: 650px;
  height: 350px;
  display: flex;
  box-shadow: 0 1px 20px 0 rgba(75, 182, 183, 0.9);
}

.wrapper .left {
  width: 35%;
  background: rgba(0, 0, 0, 0.7);
  padding: 40px 25px;
  border-top-left-radius: 5px;
  border-bottom-left-radius: 5px;
  text-align: center;
  height:48vh;
}

.wrapper .left  img {
  margin-bottom: 10px;
  border-radius: 5px;
  width: 150px;
  height: 150px;
  object-fit:cover;
  border-radius:50%;
  background:var(--primary);
}

.wrapper .left h4 {
  margin-bottom: 10px;
  color: #fff;
}

.wrapper .left p {
  font-size: 15px;
  color: #fff;
}

.wrapper .right {
  width: 65%;
  background: rgba(255, 255, 255, 0.7);
  border-top-right-radius: 5px;
  border-bottom-right-radius: 5px;
  padding: 30px 25px;
  height:48vh;
}

a.return-link {
  display: inline-block;
  color: #4bb6b7;
  text-decoration: none;
  font-size: 16px;
  margin-top: 10px;
}

a.return-link img.settingimg {
  width: 20px;
  vertical-align: middle;
  margin-right: 5px;
}

a.return-link:hover {
  color: #6c757d;
}


.wrapper .right .info {
  margin-bottom: 25px;
}

.wrapper .right .info h3 {
  margin-bottom: 15px;
  padding-bottom: 5px;
  border-bottom: 1px solid black;
  color: #343c4e;
  text-transform: uppercase;
  letter-spacing: 5px;
}

.wrapper .right .info_data form {
  display: flex;
  flex-direction: column;
}

.wrapper .right .info_data .data {
  margin-bottom: 20px;
}

.wrapper .right .info_data .data h4 {
  color: #353c4e;
  margin-bottom: 5px;
}

.wrapper .right .info_data .data input[type="text"],
.wrapper .right .info_data .data input[type="email"] {
  width: 100%;
  padding: 10px;
  border: 1px solid var(--lightgray);
  border-radius: 5px;
  margin-bottom: 10px;
}

.wrapper .right .info_data .data input[type="submit"] {
  border: none;
  width: 190px;
  height: 50px;
  padding: 5px 20px;
  margin-top: 20px;
  background: var(--primary);
  border-radius: 30px;
  font-size: 20px;
  color: white;
  cursor: pointer;
}

.wrapper .right .info_data .data input[type="submit"]:hover {
  background-color: var(--secondary);
  color: var(--black);
}

.popup {
  position: fixed;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
  background-color: #f44336;
  text-align: center;
  color: white;
  padding: 16px;
  border-radius: 5px;
  z-index: 1;
  opacity: 0.9;
  visibility: visible;
  animation: popup 0.5s ease-in-out forwards;
  width: 300px; /* Set your desired width */
  height: 200px; /* Set your desired height */
}

.popup .close {
  position: absolute;
  top: 3px;
  right: 5px;
  background: none;
  border: none;
  color: white;
  font-size: 15px;
  cursor: pointer;
  padding: 0;
  outline: none;
}

.popup .close::before {
  content: "✕";
}

.popup .close:hover {
  color: #ccc;
}

@keyframes popup {
  0% {
    opacity: 0;
    bottom: -50px;
  }
  100% {
    opacity: 0.9;
    bottom: 30px;
  }
}
</style>
<body>
<div class="wrapper">
    <div class="left">
        <img src="<?php echo $editres['image']; ?>">
        <h4><?php echo $editres['username'] ?></h4>
        <p>User of Travel Plan Generator</p>
    </div>

    <div class="right">
        <a href="userprofile.php?email=<?php echo $email; ?>"><img src="images/back.png" class="settingimg" style="width:20px; float:right;"></a>
        <div class="info">
            <h3>Edit Information</h3>
            <div class="info_data">
                <div class="data">
                    <form action="" method="post" enctype="multipart/form-data">
                        <h4>Username</h4>
                        <input type="text" name="username" value="<?php echo $editres['username'] ?>">
                        <h4>Phone Number</h4>
                        <input type="text" name="phone_number" pattern="[0-9]{3}-[0-9]{7,8}" value="<?php echo $editres['phone_number'] ?>" required title="Please enter a phone number in the format 011-1234567 or 011-12345678">
                        <h4>Email</h4>
                        <input type="email" name="email" value="<?php echo $editres['email'] ?>" disabled>
                        <h4>Choose a new profile picture</h4>
                        <br>
                        <input type="file" id="file" name="image" class="form-control" accept=".jpg, .jpeg, .png" multiple>
                        <input type="submit" name="update" value="Update">
                    </form> 
                </div>
            </div>
        </div>
    </div>
</div>

<script>
document.addEventListener("DOMContentLoaded", function() {
    var closeButton = document.querySelector('.popup .close');
    if (closeButton) {
        closeButton.addEventListener('click', function() {
            var popup = this.parentNode;
            popup.style.display = 'none';
        });

        setTimeout(function() {
            closeButton.click();
        }, 3000);
    }
});
</script>
</body>
</html>