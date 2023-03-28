<?php
    include "config.php";
    $msg=" ";
    if(isset($_POST['submit']))
    {
        $user = mysqli_real_escape_string($conn,$_POST["username"]);
        $password=mysqli_real_escape_string($conn,$_POST['pass']);
        
        $sql = "SELECT * FROM `admin` WHERE username = '{$user}' AND password = '{$password}'";
        $result = mysqli_query($conn,$sql);
        
        $r = mysqli_num_rows($result);
        $re = mysqli_fetch_assoc($result);
        if($r === 1)
        {
            header("location: adminpage.php?username=".$re['username']);
        }
        else{
            $msg = "<div class='error'>Email or Password do not match.</div>";
        }
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="adminLogin.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>

    <title>Travel Planning System |  Admin Login</title>

</head>
<body>
    
   <div class="box">
    <div class="container">

        <div class="top">
            <header>Admin Login</header>
        </div>
        <?php echo $msg;?>
<form action="" method="post">
        <div class="input-field">
            <input type="text" name="username" class="input" value="<?php if(isset($_POST['submit'])){echo $user;}?>" placeholder="Username" id="">
            <i class='bx bx-user' ></i>
        </div>

        <div class="input-field">
            <input type="Password" name="pass" class="input" placeholder="Password" id="">
            <i class='bx bx-lock-alt'></i>
        </div>

        <div class="input-field">
            <input type="submit" name="submit" class="submit" value="Login" id="">
        </div>

        <div class="two-col">
            <div class="one">
               <input type="checkbox" name="" id="check">
               <label for="check"> Remember Me</label>
            </div>
        </div>
        </form>
    </div>
</div>  
</body>
</html>