<?php
session_start();?>
<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

<!------ Include the above in your HEAD tag ---------->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TPGS || Verification</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"/>
    <link rel="stylesheet" href="css/registrationlogin.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
</head>

<style>
    .popup {
    position: fixed;
    bottom: 20px;
    right: 20px;
    background-color: #f44336;
    text-align: center;
    color: white;
    padding: 16px;
    border-radius: 5px;
    z-index: 1;
    opacity: 0.9;
    visibility: visible;
    animation: popup 0.5s ease-in-out forwards;
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
    0% {opacity: 0; bottom: -50px}
    100% {opacity: 0.9; bottom: 30px}
    }
</style>

<body>
    <div class="container" id="container">
        <div class="form-container login-container">
		
        <form action="" method="post">
        
            <h1>User Verification</h1>
            <input name="otp_code" type="text" placeholder="OTP Code" required autofocus>
            <button name="verify" type="submit">Verify</button>
            
            
        </form>
        </div>

        <div class="overlay-container">
            <div class="overlay">
                <div class="overlay-panel overlay-right">
                    <h1 class="title">We are happy <br> to see you here</h1>
                    <p>Hope you like TPGS</p>
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
            }, 5000);
        }
    });
    </script>
</body>

</html>

<?php 
    include('dataconnection.php');
    if(isset($_POST["verify"])){
        $otp = $_SESSION['otp'];
        $email = $_SESSION['mail'];
        $otp_code = $_POST['otp_code'];

        if($otp != $otp_code){
            echo "<div class='popup'>
                    <h2>Oh ouh</h2>
                    <p>Invalid OTP code</p>
                    <button class='close'></button>
                </div>";
        }else{
            mysqli_query($conn, "UPDATE login SET status = 1 WHERE email = '$email'");
            echo "<div class='popup' style='background-color: #3dec55;'>
                    <h2>Registration Successful</h2>
                    <p>Congratulations, your account</p><p>has been successfully created.</p>
                    <button class='close'></button>
                </div>";
    
            echo '<script>
                    setTimeout(function(){
                        window.location.href = "userhomepage.php?email='.$email.'";
                    }, 5000);
                </script>';
            exit;
        }
    }
?>