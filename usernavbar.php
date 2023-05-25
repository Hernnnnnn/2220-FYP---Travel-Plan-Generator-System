<?php
include('dataconnection.php');
$email = $_GET['email'];
$sql = "SELECT * From `login` where email = '$email'";
$check = mysqli_query($conn,$sql);
$result = mysqli_fetch_assoc($check);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TPGS || Navbar</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"/>
</head>

<style>
    :root{
        --primary:#4bb6b7;
        --secondary:#FFFFFF;
        --gray:#575757;
        --lightgray:#848484;
        --lightgray2:rgb(127,183,126,0.1);
        --black:#393e46;

        --shadow:0px 2px 8px 0px var(--lightgray);
    }

    * {
        margin: 0;
        padding: 0;
        list-style-type: none;
        box-sizing: border-box;
        font-family: "Poppins", sans-serif;
    }

    h2{
        font-size:1.8rem;
        font-weight:700;
        color:var(--primary);
    }

    .logo{
        width:3rem;
        height:3rem;
    }

    body{
        height:100vh;
        width:100%;
        background-color:var(--primary);
    }

    .navbar{
        display:flex;
        align-items:center;
        height:70px;
        background-color:var(--secondary);
        padding:0 8%;
    }

    .navbar-logo{
        cursor:pointer;
    }

    .navbar-list{
        width:100%;
        text-align:right;
        padding-right:2rem;
    }

    .navbar-list li{
        display:inline-block;
        margin:0 1rem;
    }

    .navbar-list li a{
        font-size:1rem;
        font-weight:600;
        text-decoration:none;
        color:var(--lightgray);
    }

    .profile-dropdown{
        position:relative;
        width:fit-content;
    }

    .profile-dropdown-btn:hover{
        background-color:var(--lightgray2);
        box-shadow:var(--shadow);
    }

    .profile-dropdown-btn{
        display:flex;
        align-items:center;
        justify-content:space-between;
        color:var(--lightgray);
        padding-right:1rem;
        font-size:1rem;
        font-weight:600;
        border:1px solid var(--lightgray);
        border-radius:40px;
        cursor:pointer;
        width:150px;
        transition:box-shadow 0.2s,background-color 0.2s;
    }

    .profile-dropdown-btn span{
        margin:0 0.5rem;
        margin-right:0;
    }

    .profile-dropdown-list{
        position:absolute;
        top:68px;
        width:220px;
        right:0;
        background-color:var(--secondary);
        border-radius:10px;
        box-shadow:var(--shadow);
        max-height:0;
        overflow:hidden;
        transition:max-height 0.3s;
    }

    .profile-dropdown-list.active{
        max-height:500px;
    }

    .profile-dropdown-list hr{
        border:0.5px solid var(--primary);
    }

    .profile-dropdown-list-item{
        padding:0.5rem 0 0.5rem 1rem;
        transition:background-color 0.2s,padding-left 0.2s;
    }

    .profile-dropdown-list-item:hover{
        padding-left:1.5rem;
        background-color:var(--lightgray2);
    }

    .profile-dropdown-list-item a{
        display:flex;
        align-items:center;
        text-decoration:none;
        font-size:0.9rem;
        font-weight:600;
        color:var(--lightgray);
    }

    .profile-dropdown-list-item a i{
        margin-right:0.8rem;
        font-size:1.1rem;
        width:2.3rem;
        height:2.3rem;
        background-color:var(--primary);
        color:var(--secondary);
        line-height:2.3rem;
        text-align:center;
        border-radius:50%;
    }
</style>

<body>
        <nav class="navbar">
            <img src="images/TPGS_Logo.png" class="logo">
            <h2>TPGS</h2>
                <ul class="navbar-list">
                    <li><a href="userhomepage.php?email=<?php echo $email; ?>">Home</a></li>
                    <li><a href="#">Itinerary</a></li>
                    <li><a href="#">Location</a></li>
                    <li><a href="#">Feedback</a></li>
                    <li><a href="#">About</a></li>
                </ul>
            <div class="profile-dropdown">
                <div class="profile-dropdown-btn" onclick="toggle()">
                    <div class="profile-img">
                        <img src="images/<?php echo $result['image']; ?>" style="width:3rem; height:3rem; border-radius:50%; background-size:cover;" alt=" ">
                    </div>
                    <span>
                        <?php echo $result['username']?>
                        <i class="fa-solid fa-angle-down"></i>
                    </span>
                </div>

                <ul class="profile-dropdown-list">
                    <li class="profile-dropdown-list-item">
                        <a href="#">
                            <i class="fa-regular fa-user"> </i>
                            Edit Profile
                        </a>
                    </li>

                    <li class="profile-dropdown-list-item">
                        <a href="#">
                            <i class="fa-solid fa-sliders"></i> </i>
                            Settings
                        </a>
                    </li>

                    <li class="profile-dropdown-list-item">
                        <a href="#">
                            <i class="fa-regular fa-circle-question"> </i>
                            Help Desk
                        </a>
                    </li>
                    <hr>
                    <li class="profile-dropdown-list-item">
                        <a href="#">
                            <i class="fa-solid fa-arrow-right-from-bracket"> </i>
                            Log out
                        </a>
                    </li>
                </ul>
            </div>
           
        </nav>
    </div>

    <script>
        let profileDropdownList = document.querySelector(".profile-dropdown-list");
        let btn = document.querySelector(".profile-dropdown-btn");

        //display or hide profile dropdown list
        const toggle = ()=> profileDropdownList.classList.toggle("active");

        window.addEventListener('click',function(e){
            //hide dropdown list if user click outside dropdown btn
            if(!btn.contains(e.target))profileDropdownList.classList.remove('active');
        });
    </script>
</body>
</html>