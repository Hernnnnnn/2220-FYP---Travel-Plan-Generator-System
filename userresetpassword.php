<?php session_start() ;
include('dataconnection.php');
?>
<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TPGS || Reset Password</title>
    <link rel="stylesheet" href="https://cdn.lineicons.com/4.0/lineicons.css"/>
    <link rel="stylesheet" href="css/registrationlogin.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"/>
<body>
    <div class="container" id="container">
        
        <div class="form-container login-container">
		
        <form action="" method="post">
        
            <h1>Reset Password</h1>
            <div class="password-input">
                <input name="pass" type="password" id="login-password" placeholder="Password">
                <span id="login-togglebtn" class="fas fa-eye-slash"></span>
            </div>
            <div class="validation">
                    <ul>
                        <li id="length">Minimum 8 character</li>
                        <li id="number">At least one number</li>
                        <li id="lower">At least one lowercase character</li>
                        <li id="upper">At least one uppercase character</li>
                        <li id="special">At least one special character</li>
                    </ul>
            </div>
            <button name="submit" type="submit">Reset</button>
        </form>
        </div>

        <div class="overlay-container">
            <div class="overlay">
                <div class="overlay-panel overlay-right">
                    <h1 class="title">Forgotten <br> your password ? </h1>
                    <p>Not a problem</p>
                </div> 
            </div>
        </div>
    </div>

    <script src="registrationlogin.js"></script>

    <script>
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

    <script>
    document.addEventListener('DOMContentLoaded', function() {
        let loginPassword = document.getElementById('login-password');
        let loginToggleBtn = document.getElementById('login-togglebtn');

        loginToggleBtn.addEventListener('click', function () {
            if (loginPassword.type === 'password') {
                loginPassword.type = 'text';
                loginToggleBtn.classList.remove('fa-eye-slash');
                loginToggleBtn.classList.add('fa-eye');
            } else {
                loginPassword.type = 'password';
                loginToggleBtn.classList.remove('fa-eye');
                loginToggleBtn.classList.add('fa-eye-slash');
            }
        });
    });
    </script>
</body>
</html>
<?php
    if(isset($_POST["submit"])){
        include('dataconnection.php');
        $psw = $_POST["password"];

        $token = $_SESSION['token'];
        $Email = $_GET['email'];

        $hash = password_hash( $psw , PASSWORD_DEFAULT );

        $sql = mysqli_query($conn, "SELECT * FROM login WHERE email='$Email'");
        $query = mysqli_num_rows($sql);
  	    $fetch = mysqli_fetch_assoc($sql);

        if($Email){
            $new_pass = $hash;
            mysqli_query($conn, "UPDATE login SET password='$new_pass' WHERE email='$Email'");
            ?>
            <script>
                window.location.replace("userregistrationlogin.php");
                alert("<?php echo "Your password has been succesful reset"?>");
            </script>
            <?php
        }else{
            ?>
            <script>
                alert("<?php echo "Please try again"?>");
            </script>
            <?php
        }
    }
?>

