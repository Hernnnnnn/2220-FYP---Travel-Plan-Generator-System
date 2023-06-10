<?php
session_start();
include('dataconnection.php');
include "usernavbar.php";

if (isset($_POST['submit'])) {
    $type = mysqli_real_escape_string($conn, $_POST['type']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $feedback = mysqli_real_escape_string($conn, $_POST['feedback']);
    $satisfy = mysqli_real_escape_string($conn, $_POST['review']);

    $query = "SELECT email FROM login WHERE email = '$email'";
    $result = mysqli_query($conn, $query);
    
    if ($result && mysqli_num_rows($result) > 0) {
        $row = mysqli_fetch_assoc($result);
        $email = $row['email'];d

        $insertQuery = "INSERT INTO userfeedback (email, type, feedback, review) VALUES ('$email', '$type', '$feedback', '$satisfy')";
        
        if (mysqli_query($conn, $insertQuery)) {
            echo "<div class='popup' style='background-color: #3dec55;'>
                    <h2>Notification</h2>
                    <p>Submited!</p>
                    <button class='close'></button>
                </div>";

            echo '<script>
                    setTimeout(function(){
                        window.location.href = "userhomepage.php?email='.$email.'";
                    }, 2000);
                </script>';
        } else {
            echo "Error: " . mysqli_error($conn);
        }
    } else {
        echo "User not found. Please make sure you are registered.";
    }
}

mysqli_close($conn);
?>
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

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TPGS || Contact Us / Feedback</title>
    <link rel="stylesheet" href="css/feedback.css" >
</head>
<style>
body
{
    background-image: url(images/image.gif);
    background-size: cover; 
    background-repeat: no-repeat;
    background-attachment: fixed;
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
<div class="container-xxl py-4">
    <div class="row ">
        <div class="col-md-10 offset-md-1 custom_content">
            <h1 style="text-align:center;color:white;padding:15px 0px;">Contact Us / Feedback Form</h1>
            <form action="userfeedback.php?email=<?php echo $result['email']?>" method="POST" enctype="multipart/form-data">
                <div class="row">
                    <div class="col-md-6">
                        <label for="type" class="form-label">Type*</label>
                        <select name="type" class="form-control" required>
                            <option value="feedback">Feedback</option>
                            <option value="inquiry">Inquiry</option>
                        </select>
                    </div>
                    <div class="col-md-6">
                        <label for="email" class="form-label">Email*</label>
                        <input type="email" class="form-control" placeholder="Enter your email" name="email" value="<?php echo $result['email']?>" disabled />
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-12">
                        <label for="name" class="form-label">Message*</label>
                        <textarea name="feedback" id="" cols="30" rows="7" class="form-control" placeholder="Send Me Your Message" required></textarea>
                    </div>

                </div>

                <div class="row mt-5 offset-md-1">
                    <div class="form-check col-md-2">
                        <input class="form-check-input" type="radio" name="review" id="flexRadioDefault1" value="5" checked>
                        <label class="form-check-label" for="flexRadioDefault1">
                        <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i>
                        </label>
                    </div>
                    <div class="form-check col-md-2">
                        <input class="form-check-input" type="radio" name="review" id="flexRadioDefault2" value='4'>
                        <label class="form-check-label" for="flexRadioDefault2">
                        <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i>
                    </div>

                    <div class="form-check col-md-2">
                        <input class="form-check-input" type="radio" name="review" id="flexRadioDefault3" value='3'>
                        <label class="form-check-label" for="flexRadioDefault3">
                        <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i>
                        </label>
                    </div>
                    <div class="form-check col-md-2">
                        <input class="form-check-input" type="radio" name="review" id="flexRadioDefault4" value='2'>
                        <label class="form-check-label" for="flexRadioDefault4">
                            <i class="fas fa-star"></i><i class="fas fa-star"></i>
                        </label>
                    </div>
                    <div class="form-check col-md-2">
                        <input class="form-check-input" type="radio" name="review" id="flexRadioDefault5" value='1'>
                        <label class="form-check-label" for="flexRadioDefault5">
                            <i class="fas fa-star"></i>
                        </label>
                    </div>
                </div>

                <div class="text-center pt-5 pb-3">
                    <button type="submit" class="btn btn-primary" name="submit">Submit</button>
                </div>
            </form>
        </div>
    </div>
</div>
<?php include "userfooter.php"; ?>

</body>
</html>