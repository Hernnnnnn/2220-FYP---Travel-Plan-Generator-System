<?php
include('dataconnection.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TPGS || Footer</title>
    <link rel="stylesheet" href="css/style1.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"/>
</head>

<body>
    <footer>
        <div class="footer-content">
            <div class="left box">
                <h2>About Us</h2>
                <hr class="underline">
                <div class="content">
                    <p>Our team is formed at Multimedia University Malacca Campus, consisting of Lee Khee Hern, Nicholas Wong Ding Xuan, and Teng De Hui.</p>
                    <div class="social">
                        <a href="#"><i class="fa-brands fa-facebook-f"></i></a>
                        <a href="#"><i class="fa-brands fa-instagram"></i></a>
                        <a href="#"><i class="fa-brands fa-youtube"></i></a>
                    </div>
                </div>
            </div>

            <div class="center box">
                <h2>Address</h2>
                <hr class="underline">
                <div class="content">
                    <div class="location">
                    <i class="fa-solid fa-location-dot"></i>
                    <span>Bukit Beruang, Malacca</span>
                    </div>

                    <div class="phone">
                    <i class="fa-solid fa-phone"></i>
                    <span>+6017-8208893</span>
                    </div>

                    <div class="email">
                    <i class="fa-solid fa-envelope"></i>
                    <span>allenleekheehern@gmail.com</span>
                    </div>
                </div>
            </div>

            <div class="right box">
                <h2>Contact Us</h2>
                <hr class="underline">
                <div class="content">
                    <form action="usercontactus.php?email=<?php echo $email; ?>" method="post">
                        <div class="btn">
                            <button type="submit">Need Help?</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <div class="bottom">
                <span class="credit">Created By <a href="#">TPGS Team</a> | </span>
                <i class="fa-regular fa-copyright"><span> 2023 All rights reserved.</span></i>
        </div>
    </footer>
</body>
</html>