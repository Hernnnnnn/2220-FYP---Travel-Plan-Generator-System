<?php
include('dataconnection.php');
$query = "SELECT * FROM `userfeedback`";
$r = mysqli_query($conn, $query);
$rresult = mysqli_fetch_assoc($r);

$email = $rresult['email'];
$sql = "SELECT * FROM `login` WHERE email = '$email'";
$check = mysqli_query($conn, $sql);
$result = mysqli_fetch_assoc($check);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"/>
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css">
</head>
<style>
:root {
  --primary: #4bb6b7;
  --secondary: #FFFFFF;
  --gray: #575757;
  --lightgray: #848484;
  --lightgray2: rgba(127, 183, 126, 0.1);
  --darkgray: #2E3238;
  --black: #393e46;
  --green: #00AD7C;
  --yellow: #FFEA61;
  --shadow: 0px 2px 8px 0px var(--lightgray);
}

.displayrev .revslide{
    padding-bottom:2rem;
}

.displayrev .revbox{
    padding:2rem;
    text-align:center;
    box-shadow:0 1rem 2rem var(--lightgray2);
    border-radius:.5rem;
}

.displayrev .revbox img{
    height:13rem;
    width:13rem;
    border-radius:50%;
    object-fit:cover;
    margin-bottom:1rem;
}

.displayrev .revbox h3{
    color:var(--black);
    font-size:2.5rem;
}

.displayrev .revbox p{
    color:var(--darkgray);
    font-size:1.5rem;
    padding:1rem 0;
}

.displayrev .revbox .stardis i{
    color:var(--yellow);
    font-size:1.7rem;
}
</style>

<body class="review">
    <div class="centertitle">
        <h2>Client Review<hr class="underlinetitle"> </h2>
    </div>
    <div class="swiper-container review-content">
    <div class="swiper-wrapper">
        <?php
        include('dataconnection.php');
        $query = "SELECT * FROM `userfeedback`";
        $r = mysqli_query($conn, $query);

        while ($vresult = mysqli_fetch_assoc($r)) 
        {
            $email = $vresult['email'];
            $sql = "SELECT * FROM `login` WHERE email = '$email'";
            $check = mysqli_query($conn, $sql);
            $result = mysqli_fetch_assoc($check);

            $stars = $vresult['review'];
            ?>
            <div class="swiper-slide">
                <div class="box">
                    <i class="fas fa-quote-left quote"></i>
                    <p><?php echo $vresult['feedback']; ?></p>
                    <div class="content">
                        <div class="info">
                            <div class="user"><?php echo $result['username']; ?></div>
                            <div class="studid">User of TPGS</div>
                            <div class="stars">
                                <?php
                                for ($i = 1; $i <= 5; $i++) {
                                    if ($i <= $stars) {
                                        echo '<i class="fas fa-star"></i>';
                                    } else {
                                        echo '<i class="fas fa-star-o"></i>';
                                    }
                                }
                                ?>
                            </div>
                        </div>
                        <div class="image">
                            <img src="images/<?php echo $result['image']; ?>">
                        </div>
                    </div>
                </div>
            </div>
        <?php } ?>
    </div>
</div>

<script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>

<script>
    var swiper = new swiper(".revslide", {
        
        spaceBetween:20,
        loop:true,
        autoplay:{
            delay:2500,
            disableOnInteraction:false,
        },
        breakpoints:{
            640:{
                slidesPerview:1,
            },
            768:{
                slidesPerview:2,
            },
            1024:{
                slidesPerview:3,
            },
        }
    });
</script>
</body>
</html>


