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
    <link rel="stylesheet" href="css/style1.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"/>
</head>

<body class="usernav">
        <nav class="navbar">
            <img src="images/TPGS_Logo.png" class="logo">
            <h2>TPGS</h2>
                <ul class="navbar-list">
                    <li><a href="userhomepage.php?email=<?php echo $email; ?>">Home</a></li>
                    <li><a href="usergenerator.php?email=<?php echo $email; ?>">Itinerary</a></li>
                    <li><a href="userhpstate.php?email=<?php echo $email; ?>">State</a></li>
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
                        <a href="userprofile.php?email=<?php echo $email; ?>">
                            <i class="fa-regular fa-user"> </i>
                            Edit Profile
                        </a>
                    </li>

                    <li class="profile-dropdown-list-item">
                        <a href="userfeedback.php?email=<?php echo $email; ?>">
                            <i class="fa-regular fa-circle-question"> </i>
                            Help Desk
                        </a>
                    </li>
                    <hr>
                    <li class="profile-dropdown-list-item">
                        <a href="userregistrationlogin.php">
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