<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1" />
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css" />
  <link rel="stylesheet" href="css/style1.css">
</head>

<body>
  <div class="revcentertitle">
        <h2>Client Review<hr class="revunderlinetitle"> </h2>
    </div>
  <div class="swiper mySwiper">
    <div class="swiper-wrapper">
    <?php
        include('dataconnection.php');
        $query = "SELECT * FROM `userfeedback` WHERE `type` = 'feedback' AND `status` = 1";
        $r = mysqli_query($conn, $query);

        while ($vresult = mysqli_fetch_assoc($r)) {
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
                            <img src="<?php echo $result['image']; ?>">
                        </div>
                    </div>
                </div>
            </div>
     <?php }?>
    </div>
    <div class="swiper-button-next"></div>
    <div class="swiper-button-prev"></div>
    <div class="swiper-pagination"></div>
  </div>

<script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js"></script>

<script>
  var swiper = new Swiper(".mySwiper", {
    slidesPerView: 2,
    spaceBetween: 30,
    loop: true,
    autoplay: {
      delay: 2500, 
      disableOnInteraction: false, 
    },
    pagination: {
      el: ".swiper-pagination",
      clickable: true,
    },
    navigation: {
      nextEl: ".swiper-button-next",
      prevEl: ".swiper-button-prev",
    },
  });
</script>
</body>
</html>
