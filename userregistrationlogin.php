<?php session_start(); ?>
<?php
    include('dataconnection.php');

    if(isset($_POST["register"])){
        $email = $_POST["email"];
        $password = $_POST["password"];

        $check_query = mysqli_query($connect, "SELECT * FROM login where email ='$email'");
        $rowCount = mysqli_num_rows($check_query);

        if(!empty($email) && !empty($password)){
            if($rowCount > 0){
                ?>
                <script>
                    alert("User with email already exist!");
                </script>
                <?php
            }else{
                $password_hash = password_hash($password, PASSWORD_BCRYPT);

                $result = mysqli_query($connect, "INSERT INTO login (email, password, status) VALUES ('$email', '$password_hash', 0)");
    
                if($result){
                    $otp = rand(100000,999999);
                    $_SESSION['otp'] = $otp;
                    $_SESSION['mail'] = $email;
                    require "Mail/phpmailer/PHPMailerAutoload.php";
                    $mail = new PHPMailer;
    
                    $mail->isSMTP();
                    $mail->Host='smtp.gmail.com';
                    $mail->Port=587;
                    $mail->SMTPAuth=true;
                    $mail->SMTPSecure='tls';
    
                    $mail->Username='email account';
                    $mail->Password='email password';
    
                    $mail->setFrom('email account', 'OTP Verification');
                    $mail->addAddress($_POST["email"]);
    
                    $mail->isHTML(true);
                    $mail->Subject="Your verify code";
                    $mail->Body="<p>Dear user, </p> <h3>Your verify OTP code is $otp <br></h3>
                    <br><br>
                    <p>With regrads,</p>
                    <b>TPGS Team</b>";
    
                            if(!$mail->send()){
                                ?>
                                    <script>
                                        alert("<?php echo "Register Failed, Invalid Email "?>");
                                    </script>
                                <?php
                            }else{
                                ?>
                                <script>
                                    alert("<?php echo "Register Successfully, OTP sent to " . $email ?>");
                                    window.location.replace('userverification.php');
                                </script>
                                <?php
                            }
                }
            }
        }
    }

?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration / Login</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"/>
    <link rel="stylesheet" href="css/registrationlogin.css">
</head>

<body>
    <div class="container" id="container">
        <div class="form-container register-container">
        <form action="#">
            <h1>User Registration</h1>
            <input type="text" id="name" placeholder="Name">
            <input type="email" id="email" placeholder="Email">
            <div class="password">
                <input type="password" id="passwd" placeholder="Password" pattern="^\S+$">
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
        
            <button name="register" type="register">Register</button>
        </form>
        </div>    
        
        <div class="form-container login-container">
        <form action="#">
            <h1>User Login</h1>
            <input type="email" id="email" placeholder="Email">
            <input type="password" id="passwd" placeholder="Password" pattern="^\S+$">

            <div class="content">
            <div class="checkbox">
                <input type="checkbox" name="checkbox" id="checkbox">
                <label>Remember me</label>
            </div>
            <div class="pass-link">
                <a href="userrecoverpassword.php">Forgot password?</a>
            </div>
            </div>
            <button>Login</button>
        </form>
        </div>

        <div class="overlay-container">
            <div class="overlay">
                <div class="overlay-panel overlay-left">
                    <h1 class="title">Hello <br> Welcome </h1>
                    <p>if you don't have an account, login here and have fun</p>
                    <button class="ghost" id="login">Login
                        <i class="fa-regular fa-arrow-left"></i>
                    </button>
                </div>

                <div class="overlay-panel overlay-right">
                    <h1 class="title">Start your <br> journey now </h1>
                    <p>if you don't have an account, join us now</p>
                    <button class="ghost" id="register">Register
                        <i class="fa-regular fa-arrow-right"></i>
                    </button>
                </div>
            </div>
        </div>
    </div>

    <script src="userregistrationlogin.js"></script>
    
<script>
        let togglePassword = document.getElementById('togglebtn');
        let password = document.getElementById('passwd');

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

    togglePassword.addEventListener('click', function(){
        if(password.type === "password"){
            password.type = "text";
            togglePassword.classList.remove('fa-eye-slash');
            togglePassword.classList.add('fa-eye');
        }else{
            password.type = "password";
            togglePassword.classList.remove('fa-eye');
            togglePassword.classList.add('fa-eye-slash');
        }
    });
</script>
</body>
</html>

