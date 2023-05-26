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
    <title>TPGS || Review</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"/>
    <link rel="stylesheet" href="css/style.css"/>
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
        box-sizing:border-box;
        font-family:"Poppins", sans-serif;
    }

    html,body{
        display:grid;
        height:100% ;
        align-items:center;

    }

    .wrapper{
        max-width:1200px;
        padding:0 20px;
        display:flex;
        align-items:center;
        justify-content:center;
    }
</style>

<body>
    <div class="review-wrapper">
        <div class="box">
            <i class="fas fa-quote-left quote"></i>
            <p>I love TPGS so much, because after I know this page exist, I use it everytime as my travel planner.</p>
            <div class="content">
                <div class="info">
                    <div class="user">Lee Chong Wei</div>
                    <div class="date"></div>
                        <div class="stars">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="far fa-star"></i>
                        </div>
                </div>
                <div class="image">
                    <img src="images/<?php echo $result['image']; ?>" style="width:3rem; height:3rem; border-radius:50%; background-size:cover;" alt=" ">
                </div>
            </div>
        </div>
        <div class="box">
            <i class="fas fa-quote-left quote"></i>
            <p>I love TPGS so much, because after I know this page exist, I use it everytime as my travel planner.</p>
            <div class="content">
                <div class="info">
                    <div class="user">Lee Chong Wei</div>
                    <div class="date"></div>
                        <div class="stars">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="far fa-star"></i>
                        </div>
                </div>
                <div class="image">
                    <img src="images/<?php echo $result['image']; ?>" style="width:3rem; height:3rem; border-radius:50%; background-size:cover;" alt=" ">
                </div>
            </div>
        </div>
        <div class="box">
            <i class="fas fa-quote-left quote"></i>
            <p>I love TPGS so much, because after I know this page exist, I use it everytime as my travel planner.</p>
            <div class="content">
                <div class="info">
                    <div class="user">Lee Chong Wei</div>
                    <div class="date"></div>
                        <div class="stars">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="far fa-star"></i>
                        </div>
                </div>
                <div class="image">
                    <img src="images/<?php echo $result['image']; ?>" style="width:3rem; height:3rem; border-radius:50%; background-size:cover;" alt=" ">
                </div>
            </div>
        </div>
    </div>
</body>
</html>