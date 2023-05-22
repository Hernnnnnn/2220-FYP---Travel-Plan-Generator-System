<?php
session_start();
include('dataconnection.php');
if (isset($_POST["submit"])) {
    $email = mysqli_real_escape_string($conn, $_POST["email"]);
    $password = mysqli_real_escape_string($conn, $_POST['pass']);

    if (empty($email) || empty($password)) { 
        echo "<div class='popup'>
                <h2>Error</h2>
                <p>Email and password fields cannot be empty</p>
                <button class='close'></button>
              </div>";
    } else {
        $sql = mysqli_query($conn, "SELECT * FROM login where email = '$email'");
        $count = mysqli_num_rows($sql);

        if ($count > 0) {
            $fetch = mysqli_fetch_assoc($sql);
            $hashpassword = $fetch["password"];

            if ($fetch["status"] == 0) {
                echo "<div class='popup'>
                        <h2>Error</h2>
                        <p>Please verify your email account before logging in</p>
                        <button class='close'></button>
                      </div>";
            } else if (password_verify($password, $hashpassword)) {
                echo "<div class='popup' style='background-color: #3dec55;'>
                    <h2>Login</h2>
                    <p>Login successful!</p>
                    <button class='close'></button>
                </div>";

                echo '<script>
                        setTimeout(function(){
                            window.location.href = "userhomepage.php?email='.$email.'";
                        }, 5000);
                    </script>';
                exit;
            } else {
                echo "<div class='popup'>
                        <h2>Oh ouh</h2>
                        <p>Incorrect email or password. Please try again.</p>
                        <button class='close'></button>
                      </div>";
            }
        }
    }
}
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
        }, 5000);
    }
});
</script>

<?php
$msg = "";

if (isset($_POST["register"])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = $_POST['pass'];

    $check_query = mysqli_query($conn, "SELECT * FROM login WHERE email = '$email'");
    $rowCount = mysqli_num_rows($check_query);

    if (!empty($email) && !empty($password)) {
        if ($rowCount > 0) {
            echo "<div class='popup'>
                    <h2>Oh ouh</h2>
                    <p>User with email already exists!</p>
                    <button class='close'></button>
                  </div>";
        } else {
            $password_hash = password_hash($password, PASSWORD_BCRYPT);

            $result = mysqli_query($conn, "INSERT INTO login (username, email, password, status) VALUES ('$name','$email', '$password_hash', 0)");

            if ($result) {
                $otp = rand(100000, 999999);
                $_SESSION['otp'] = $otp;
                $_SESSION['mail'] = $email;
                require "phpmailer/PHPMailerAutoload.php";
                $mail = new PHPMailer(true); // Enable exceptions

                try {
                    $mail->isSMTP();
                    $mail->Host = 'smtp.gmail.com';
                    $mail->Port = 587;
                    $mail->SMTPAuth = true;
                    $mail->SMTPSecure = 'tls';

                    $mail->Username = 'allenleekheehern@gmail.com';
                    $mail->Password = 'lpuvtqrahhscqgsk';

                    $mail->setFrom('allenleekheehern@gmail.com', 'OTP Verification');
                    $mail->addAddress($email);

                    $mail->isHTML(true);
                    $mail->Subject = "Your verify code from TPGS";
                    $mail->Body = "<p>Dear user,</p><h3>Your verify OTP code is $otp</h3><br><p>With regards,</p><b>TPGS Team</b>";

                    $mail->send();

                    echo "<div class='popup' style='background-color: #3dec55;'>
                            <h2>OTP</h2>
                            <p>Registration Successful, OTP sent to</p><p>$email</p>
                            <button class='close'></button>
                        </div>";

                    echo '<script>
                            setTimeout(function(){
                                window.location.href = "userverification.php";
                            }, 5000);
                        </script>';
                } catch (Exception $e) {
                    echo "<div class='popup'>
                            <h2>Oh ouh</h2>
                            <p>Register Failed, Invalid Email: $e->getMessage()</p>
                            <button class='close'></button>
                        </div>";
                }
            }
        }
    } else {
        echo "<div class='popup'>
                <h2>Error</h2>
                <p>Email and password fields cannot be empty</p>
                <button class='close'></button>
            </div>";
    }
}
?>

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

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TPGS || Reg/Log</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"/>
    <link rel="stylesheet" href="css/registrationlogin.css">
</head>

<body>
    <div class="container" id="container">
        <div class="form-container register-container">
        <form action="#" method="post">
            <h1>User Registration</h1>
            <input type="text" id="name" placeholder="Name" name="name">
            <input type="email" id="email" placeholder="Email" name="email">
            <div class="password">
                <input type="password" id="passwd" name="pass" placeholder="Password" pattern="^\S+$">
                <span id="togglebtn" class="fas fa-eye-slash"></span>
            <div class="validation">
                    <ul>
                        <li id="length">Minimum 8 character</li>
                        <li id="number">At least one number</li>
                        <li id="lower">At least one lowercase character</li>
                        <li id="upper">At least one uppercase character</li>
                        <li id="special">At least one special character</li>
                    </ul>
                </div>
            </div>
            <button name="register" type="submit">Register</button>
        </form>
    </div>
        
<div class="form-container login-container">
  <form action="#" method="post">
    <h1>User Login</h1>
    <?php echo $msg;?>
    <input name="email" type="email" placeholder="Email">
    <div class="password-input">
        <input name="pass" type="password" id="login-password" placeholder="Password">
        <span id="login-togglebtn" class="fas fa-eye-slash"></span>
    </div>

    <div class="content">
        <div class="checkbox">
            <input type="checkbox" name="checkbox" id="checkbox">
                <label>Remember me</label>
            </div>
                <div class="pass-link">
                    <a href="userrecoverpassword.php">Forgot password?</a>
                </div>
            </div>
                <button name="submit" type="submit">Login</button>
        </form>
    </div>

    <div class="overlay-container">
        <div class="overlay">
            <div class="overlay-panel overlay-left">
                <h1 class="title">Hello <br> Welcome </h1>
                    <p>if you don't have an account, login here and have fun</p>
                        <button class="ghost" id="loginp">Login
                            <i class="fa-regular fa-arrow-left"></i>
                        </button>
    </div>

    <div class="overlay-panel overlay-right">
        <h1 class="title">Start your <br> journey now </h1>
            <p>if you don't have an account, join us now</p>
                <button class="ghost" id="registerp">Register
                    <i class="fa-regular fa-arrow-right"></i>
                </button>
            </div>
        </div>
    </div>

    <script src="userregistrationlogin.js"></script>
    <script src="showhidepassword.js"></script>

<script>
    $msg = "";

        let minlength = document.getElementById('length');
        let digit = document.getElementById('number');
        let lowercase = document.getElementById('lower');
        let uppercase = document.getElementById('upper');
        let specialchar = document.getElementById('special');
        let spaceerror = document.getElementById('space');

        function checkPassword(data){
            const length = new RegExp('(?=.{8,})');
            const number = new RegExp('(?=.*[0-9])');
            const lower = new RegExp('(?=.*[a-z])');
            const upper = new RegExp('(?=.*[A-Z])');
            const special = new RegExp('(?=.*[!@#$%^&*])');
            const space = new RegExp('(?=.*[\\s])');

            if(length.test(data)){
                minlength.classList.add('valid');
            }else{
                minlength.classList.remove('valid');
            }

            if(number.test(data)){
                digit.classList.add('valid');
            }else{
                digit.classList.remove('valid');
            }

            if(lower.test(data)){
                lowercase.classList.add('valid');
            }else{
                lowercase.classList.remove('valid');
            }

            if(upper.test(data)){
                uppercase.classList.add('valid');
            }else{
                uppercase.classList.remove('valid');
            }

            if(special.test(data)){
                specialchar.classList.add('valid');
            }else{
                specialchar.classList.remove('valid');
            }

            if(space.test(data)){
                spaceerror.classList.add('error');
            }else{
                spaceerror.classList.remove('error');
            }
        }

    password.addEventListener('input', function(){
        checkPassword(password.value);
    });
</script>
</body>
</html>

