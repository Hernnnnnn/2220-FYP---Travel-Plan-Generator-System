<?php
include('dataconnection.php');
$email = $_GET['email'];
$sql = "SELECT * FROM `login` WHERE email = '$email'";
$check = mysqli_query($conn, $sql);
$result = mysqli_fetch_assoc($check);

$query = "SELECT * FROM userfeedback WHERE type = 'feedback'";
$res = mysqli_query($conn, $query);
$feedback = "";

while ($row = mysqli_fetch_assoc($res)) {
    $feedback .= "<p>" . $row['feedback'] . "</p>";
}
$username = $result['username'];
$check1 = "SELECT userfeedback.email FROM userfeedback JOIN login ON userfeedback.email = login.username WHERE login.username = '$username'";
$re = mysqli_query($conn, $check1);
$row = mysqli_fetch_assoc($re);

$review = $_GET['review'];
$query1 = "SELECT * FROM userfeedback WHERE review = '$review'";
$r = mysqli_query($conn, $query1);
$reviewresult = mysqli_fetch_assoc($r);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
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
    color:var(--primary);
    font-size:2.5rem;
}
</style>
<body>
    <section class="displayrev" id="displayrev">
    <h1 class="hot">Client <span>Review</span><hr class="tourline"> </h1>
    <div class="revslide">
        <div class="revwrapper">
            <div class="revslider">
                <div class="revbox">
                    <img src="<?php echo $result['image']; ?>" alt="">
                    <h3><?php echo $result['username']; ?></h3>
                    <p><?php echo $feedback; ?></p>
                    <div class="stardis">
                        <?php 
                        if (isset($reviewresult['review'])) {
                            if ($reviewresult['review'] == 5) {
                                echo "<span class='fa fa-star'></span><span class='fa fa-star'></span><span class='fa fa-star'></span><span class='fa fa-star'></span><span class='fa fa-star'></span>";
                            } elseif ($reviewresult['review'] == 4) {
                                echo "<span class='fa fa-star'></span><span class='fa fa-star'></span><span class='fa fa-star'></span><span class='fa fa-star'></span>";
                            } elseif ($reviewresult['review'] == 3) {
                                echo "<span class='fa fa-star'></span><span class='fa fa-star'></span><span class='fa fa-star'></span>";
                            } elseif ($reviewresult['review'] == 2) {
                                echo "<span class='fa fa-star'></span><span class='fa fa-star'></span>";
                            } elseif ($reviewresult['review'] == 1) {
                                echo "<span class='fa fa-star'></span>";
                            }
                        } else {
                            echo "No review available.";
                        }
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
</body>
</html>


