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
                <input type="password" id="passwd" placeholder="Password">
                <span id="togglebtn"></span>
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
        
            <button>Register</button>
        </form>
        </div>    
        
        <div class="form-container login-container">
        <form action="#">
            <h1>User Login</h1>
            <input type="email" id="email" placeholder="Email">
            <input type="password" id="passwd" placeholder="Password">

            <div class="content">
            <div class="checkbox">
                <input type="checkbox" name="checkbox" id="checkbox">
                <label>Remember me</label>
            </div>
            <div class="pass-link">
                <a href="#">Forgot password?</a>
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

    <script src="registrationlogin.js"></script>

</body>
</html>