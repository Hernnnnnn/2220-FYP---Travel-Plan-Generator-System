

<?php
    session_start();
    include "dataconnection.php";
    $msg=" ";
    if(isset($_POST['submit']))
    {
        $email = mysqli_real_escape_string($conn,$_POST["email"]);
        $password=mysqli_real_escape_string($conn,$_POST['pass']);
        
        $sql = "SELECT * FROM `admin` WHERE email = '{$email}' AND password = '{$password}'";
        $result = mysqli_query($conn,$sql);
        
        $r = mysqli_num_rows($result);
        $re = mysqli_fetch_assoc($result);
        $sql2 = "SELECT * From `admin`";
        $result2=mysqli_query($conn,$sql2);
        $re2 = mysqli_fetch_assoc($result2);
        if($password == $re2["password"] && $email ==$re2["email"])
        {
            $_SESSION['email']=$email;
            header("location: dashboard.php?email=".$re['email']);
            die;
        }
        else if(!$email)
        {
            $msg = "<div class='error'><i class='fa fa-exclamation-circle '></i>  &nbsp; Please fill in your email</div>";
        }
        else if(!$password)
        {
            $msg = "<div class='error'><i class='fa fa-exclamation-circle '></i>  &nbsp;Please fill in your password</div>";
        }
        else if($password != $re2["password"] || $email !=$re2["email"])
        {
            $msg = "<div class='error'><i class='fa fa-exclamation-circle '></i>  &nbsp;Email or password do not match</div>";

        }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin || Login</title>
    <link rel="stylesheet" href="https://cdn.lineicons.com/4.0/lineicons.css"/>
    <link rel="stylesheet" href="css/registrationlogin.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script>
        
        Response.setHeader("Cache-Control")
    </script>


    <style>
        .error
        {
            color: #d43838;
            background-color: #fcd1d1;
            /* font-weight: bold; */
            margin: 10px;
            padding: 10px;
            width: 100%;
            /* font-size: 10pt; */
            border-radius: 10px;
            /* text-transform: uppercase; */
            text-align: center;
        }
    </style>

</head>
<body>
    <div class="container" id="container">
        <div class="form-container login-container">
		
        <form action="" method="post">
        
            <h1>Admin Login</h1>
            <i class='fa fa-triangle-exclamation'></i>
            
            <?php echo $msg;?>
            <input name="email" type="email" placeholder="Email">
            <input name="pass" type="password" id="login-password" placeholder="Password">
            <span id="login-togglebtn" class="fas fa-eye-slash"></span>
            <!-- <div class="content">
            <div class="checkbox">
                <input type="checkbox" name="checkbox" id="checkbox">
                <label>Remember me</label>
            </div>
            
            </div> -->
            <button name="submit" type="submit">Login</button>
            
            
        </form>
        </div>

        <div class="overlay-container">
            <div class="overlay">
                
            <div class="overlay-panel overlay-right">
            <h1 class="title">Are you ready <br> to start your job? </h1>
                    <p>Boss doesn't care are you ready or not</p>
                </div>
                </div>
            </div>
        </div>
    </div>

    <script src="showhidepassword.js"></script>
</body>
</html>