<?php
session_start();
include('dataconnection.php');
include "usernavbar.php";

if (isset($_POST['submit'])) {
    $name = mysqli_real_escape_string($connection, $_POST['name']);
    $email = mysqli_real_escape_string($connection, $_POST['email']);
    $product_name = mysqli_real_escape_string($connection, $_POST['product_name']);
    $product_feedback = mysqli_real_escape_string($connection, $_POST['product_feedback']);
    $review = mysqli_real_escape_string($connection, $_POST['review']);

    // $upload_image=$_FILES["file"]["name"];
    // $folder="http://localhost/project/Feedback/images/";
    // move_uploaded_file($_FILES["file"]["tmp_name"], "$folder".$_FILES["file"]["name"]);
    $img_name = $_FILES['file']['name'];
    $img_size = $_FILES['file']['size'];
    $tmp_name = $_FILES['file']['tmp_name'];
    $error = $_FILES['file']['error'];

    if ($error === 0) {
        if ($img_size > 12500000) {
            $em = "Sorry, your file is too large.";
            echo "processsdf";
        } else {
            $img_ex = pathinfo($img_name, PATHINFO_EXTENSION);
            $img_ex_lc = strtolower($img_ex);

            $allowed_exs = array("jpg", "jpeg", "png");

            if (in_array($img_ex_lc, $allowed_exs)) {
                $new_img_name = uniqid("IMG-", true) . '.' . $img_ex_lc;
                $img_upload_path = 'uploads/' . $new_img_name;
                move_uploaded_file($tmp_name, $img_upload_path);

                $sql = "INSERT INTO final_feedback(username,email,product_name,file,product_feedback,review) VALUES('$name','$email','$product_name','$new_img_name','$product_feedback','$review')";

                $result = mysqli_query($connection, $sql);
                if ($result) {
                    $_SESSION['success_message'] = "Contact form saved successfully.";

?>
                    <script>
                        swal("Good job!", "You clicked the button!", "success");
                    </script>
<?php
                }
            } else {
                $em = "You can't upload files of this type";
                header("Location: index.php?error=$em");
            }
        }
    } else {
       
        echo "error";
    }
    session_destroy();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TPGS || Contact Us / Feedback</title>

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Work+Sans:wght@400;500;600;700&display=swap" rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <link href="lib/animate/animate.min.css" rel="stylesheet">
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <link rel="stylesheet" href="css/feedback.css" >
</head>
<style>
body
{
    background-image: url(images/image.gif);
    background-size: cover; 
    background-repeat: no-repeat;
    background-attachment: fixed;
}


    .form-label {
        margin-bottom: 0.5rem;
        margin-top: 0.5rem;
        color: black;
    }
    .form-check-input {
        width: 1em;
        height: 1em;
        margin-right: 5px;
    }
    .orange {
        color: orange;
    }
    .form-label{
        color:white !important;
    }
</style>
<body>
<div class="container-xxl py-4">
    <div class="row ">
        <div class="col-md-10 offset-md-1 custom_content">
            <h1 style="text-align:center;color:white;padding:15px 0px;">Contact Us / Feedback Form</h1>
            <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="POST" enctype="multipart/form-data">
                <div class="row">
                    <div class="col-md-6">
                        <label for="name" class="form-label">Name*</label>
                        <input type="text" class="form-control" placeholder="Enter your fullname" name="name" required />
                    </div>
                    <div class="col-md-6">
                        <label for="email" class="form-label">Email*</label>
                        <input type="email" class="form-control" placeholder="Enter Your Email" name="email" required />
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-12">
                        <label for="name" class="form-label">Message*</label>
                        <textarea name="message" id="" cols="30" rows="7" class="form-control" placeholder="Send Me Your Message" required></textarea>
                    </div>

                </div>

                <div class="text-center pt-5 pb-3">
                    <button type="submit" class="btn btn-primary" name="submit">Submit</button>
                </div>
            </form>
        </div>
    </div>
</div>

<a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>


<!-- JavaScript Libraries -->
<script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
<script src="lib/wow/wow.min.js"></script>
<script src="lib/easing/easing.min.js"></script>
<script src="lib/waypoints/waypoints.min.js"></script>
<script src="lib/owlcarousel/owl.carousel.min.js"></script>

<!-- Template Javascript -->
<script src="js/main.js"></script>
<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
</body>
</html>