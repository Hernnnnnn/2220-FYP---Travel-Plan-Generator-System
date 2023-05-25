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
        margin:0;
        padding:0;
        color:var(--secondary);
        box-sizing:border-box;
        font-family:"Poppins", sans-serif;
    }

    footer{
        bottom:0px;
        width:100%;
        line-height:20px;
        background:var(--black);
    }

    .main-content{
        display:flex;
    }

    .main-content .box{
        flex-basis:50%;
        padding:10px 20px;
    }

    .box h2{
        font-size:1.125rem;
        font-weight:600;
        text-transform:uppercase;
    }

    .box .content{
        margin:20px 0 0 0;
    }

    .box .content:before{
        position:absolute;
        content:'';
        top:40px;
        height:2px;
        width:100%;
        background:var(--lightgray2);
    }

    .box .content:after{
        position:absolute;
        content:'';
        top:40px;
        height:2px;
        width:15%;
        background:var(--primary);
    }

    .box .content p{
        text-align:justify;
    }

    .left .content .social{
        margin:20px 0 0 0;
    }

    .left .content .social a{
        padding:0 2px;
    }

    .left .content .social a i{
        height:40px;
        width:40px;
        background:#2E3238;
        line-height:40px;
        text-align:center;
        font-size:18px;
        border-radius:5px;
        transition:0.3s;
    }

    .left .content .social a i:hover{
        background:var(--primary);
    }

    .center .content .fa-solid{
        font-size:1.4375rem;
        background:#2E3238;
        height:45px;
        width:45px;
        line-height:45px;
        text-align:center;
        border-radius:50%;
        transition:0.3s;
        cursor:pointer;
    }

    .center .content .fa-solid:hover{
        background:var(--primary);
    }

    .center .content .text{
        font-size:1.0625rem;
        font-weight:600;
        padding-left:10px;
    }

    .center .content .phone{
        margin:10px 0;
    }

    .right form .text{
        font-size:1.0625rem;
        margin-bottom:2px;
        color:var(--lightgray);
    }
    .right form .msg{
        margin-top:10px;
    }

    .right form input, .right form textarea{
        width:100%;
        font-size:1.0625rem;
        background:var(--black);
        padding-left:10px;
        border:1px solid var(--lightgray);
    }

    .right form input:focus,
    .right form textarea:focus{
        outline-color:var(--primary);
    }

    .right form input{
        height:35px;
    }

    .right form .btn{
        margin-top:10px;
    }

    .right form .btn button{
        height:40px;
        width:100%;
        border:none;
        outline:none;
        background:var(--primary);
        font-size:1.0625rem;
        font-weight:500;
        cursor:pointer;
        transition:0.3s;
    }

    .right form .btn button:hover{
        background:#2E3238;
    }

    .bottom{
        text-align:center;
        padding:5px;
        font-size:0.9375rem;
        background:#2E3238;
    }

    .bottom span,
    .bottom i{
        color:var(--lightgray);
    }

    .bottom a{
        color:var(--primary);
        text-decoration:none;
    }

    .bottom a:hover{
        text-decoration:underline;
    }

    @media screen and (max-width:900px){
        footer{
            position:relative;
            bottom:0px;
        }
        .main-content{
            flex-wrap:wrap;
            flex-direction:column;
        }
        .main-content .box{
            margin:5px 0;
        }
    }
</style>

<body>
    <footer>
        <div class="main-content">
            <div class="left box">
                <h2>About Us</h2>
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
                <div class="content">
                    <form action="#">
                        <div class="email">
                            <div class="text">Email *</div>
                            <input type="email" required>
                        </div>
                        <div class="msg">
                            <div class="text">Message *</div>
                            <textarea rows="2" cols="25" required></textarea>
                        </div>
                        <div class="btn">
                            <button type="submit">Send</button>
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