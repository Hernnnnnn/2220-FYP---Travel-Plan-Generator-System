<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Navbar</title>
	

	
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<style>
        @font-face {
  font-family: 'icomoon';
  src: url("../fonts/icomoon/icomoon.eot?srf3rx");
  src: url("../fonts/icomoon/icomoon.eot?srf3rx#iefix") format("embedded-opentype"), url("../fonts/icomoon/icomoon.ttf?srf3rx") format("truetype"), url("../fonts/icomoon/icomoon.woff?srf3rx") format("woff"), url("../fonts/icomoon/icomoon.svg?srf3rx#icomoon") format("svg");
  font-weight: normal;
  font-style: normal;
}
    *{
        padding: 0;
        margin: 0;
        text-decoration: none;
        list-style: none;
        box-sizing: border-box;
    }
    header
    {
        width: 100%;
        height: 80px;
        /* background-color: black; */
        display: flex;
        align-items: center;
        justify-content: space-between;
        padding: 0 100px;
    }
    .logo a
    {
        font-size: 28px;
        font-weight: bold;
        color: #4bb6b7;
  font-family: "Open Sans", Arial, sans-serif;

    }

    .hamburger
    {
        display: none;
    }

    .nav-bar ul
    {
        display: flex;
    }

    .nav-bar ul li a
    {
        display: block;
        color: #848484;
        font-size: 15px;
        padding: 10px 25px;
        border-radius: 50px;
        transition: 0.2s;
        margin: 0 5px;
        font-weight: bold;
    font-family: "Open Sans", Arial, sans-serif;

    }

    .nav-bar ul li a:hover
    {
        color: #4bb6b7;

    }
    .nav-bar ul li a.active
    {
        color: #4bb6b7;
    }
    @media only screen and (max-width: 1320px)
    {
        header
        {
            padding: 0 50px;
        }
    }
    @media only screen and (max-width: 1100px)
    {
        header
        {
            padding: 0 30px;
        }
    }
    @media only screen and (max-width: 900px)
    {
        .hamburger
        {
            display: block;
            cursor: pointer;
        }
        .hamburger .line
        {
            width: 30px;
            height: 3px;
            background: black;
            margin: 6px 0;
        }
        .nav-bar
        {
            height: 0;
            /* display: none; */
            position:absolute;
            top: 80px;
            left: 0;
            right: 0;
            width: 100vw;
            transition: 0.2s;
            overflow: hidden;
        }
        .nav-bar.active
        {
            height: 450px;
        }
        .nav-bar ul 
        {
            display: block;
            width: fit-content;
            margin: 80px auto 0 auto;
            text-align: center;
            transition: 0.5s;
            opacity: 0;
        }
        .nav-bar.active ul
        {
            opacity: 1;
        }
        .nav-bar ul li a
        {
            margin-bottom: 20px;
        }

    }
</style>
	
	

</head>

<body>
<header>
    <h1 class="logo"><a href=""><i class="fa fa-plane"></i>TPGS</a></h1>
    <div class="hamburger">
        <div class="line"></div>
        <div class="line"></div>
        <div class="line"></div>
    </div>
    <nav class="nav-bar">
    <ul>
        <li><a href="" class="active"><i class="fa fa-home"></i> Home</a></li>
        <li><a href="">User</a></li>
        <li><a href="">Location's details</a></li>
        <li><a href="">Home</a></li>
        <li><a href="">Home</a></li>
        <li><a href="">Home</a></li>
        <li><a href="adminprofile.php?email=<?php echo $re['email']?>"><img class="img" src="images/<?php echo $re['image']?>" width="35px" style="border-radius: 50%;" alt=""></a></li>

    </ul>
    </nav>
    </header>
    <script>
		hamburger = document.querySelector(".hamburger");
		hamburger.onclick = function()
		{
			navBar = document.querySelector(".nav-bar");
			navBar.classList.toggle("active");
		}
	</script>
</body>
</html>