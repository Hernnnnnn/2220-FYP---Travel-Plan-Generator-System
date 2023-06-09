<?php
include('dataconnection.php');
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
:root{
  --primary:#4bb6b7;
  --secondary:#FFFFFF;
  --gray:#575757;
  --lightgray:#848484;
  --lightgray2:rgb(127,183,126,0.1);
  --darkgray:#2E3238;
  --black:#393e46;
  --green:#00AD7C;
  --yellow:#FFEA61;

  --shadow:0px 2px 8px 0px var(--lightgray);
}

.review {
  display: grid;
  height: 100%;
  place-items: center;
}

.centertitle {
  max-width: 100%;
  line-height: 50px;
  font-size: 1.125rem;
  font-weight: 600;
  text-transform: uppercase;
  text-align: center;
  color: var(--secondary);
  background: var(--green); 
  height: 60px;
}

hr.underlinetitle {
  border: none;
  margin: 0 auto;
  margin-top: -5px;
  height: 3px;
  width: 150px;
  background-color: var(--secondary);
}

.review-content {
  max-width: 100%;
  padding: 0 20px 0 20px;
  display: grid;
  grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
  grid-gap: 20px; 
  align-items: center;
  justify-content: space-between;
  height: auto;
  background: var(--green);
}

.review-content .box {
  background: var(--secondary);
  border-radius: 3px;
  padding: 25px;
  width: 100%; /* Set the width to 100% to occupy equal space */
}

@media (max-width: 768px) {
  .review-content {
    grid-template-columns: 1fr; /* Display boxes in a single column on smaller screens */
  }
}

.review-content .box i.quote{
  font-size:20px;
  color:var(--primary);
}

.review-content .box .content{
  padding-top:10px;
  display:flex;
  align-items:center;
  justify-content:space-between;
}

.review-content .box .info .user{
  font-size:17px;
  font-weight:600;
}

.review-content .box .info .studid{
  font-size:16px;
  color:var(--lightgray);
  font-weight:600;
}

.review-content .box .info .stars{
  margin-top:2px;
}

.box .info .stars i{
  color:var(--primary);
}

.review-content .box .content .image{
  height:75px;
  width:75px;
  padding:3px;
  border-radius:50%;
  background:var(--primary);
}

.box .content .image img{
  height:100%;
  width:100%;
  object-fit:cover;
  border-radius:50%;
  border:2px solid var(--secondary);
}

</style>

<body class="review">
    <div class="centertitle">
        <h2>Client Review<hr class="underlinetitle"> </h2>
    </div>
    <div class="swiper-container review-content">
    <div class="swiper-wrapper">
        <?php
        $query = "SELECT * FROM `userfeedback`";
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
        
    var swiper = new Swiper(".review-content", {
        spaceBetween:20,
        loop:true,
        autoplay:{
            delay:2500,
            disableOnInteraction:false,
        },
        breakpoints:{
            640:{
                slidesPerview:3,
            },
            768:{
                slidesPerview:4,
            },
            1024:{
                slidesPerview:5,
            },
        }
    });
</script>
</body>
</html>


