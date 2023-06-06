
<?php 
session_start();
if(!$_SESSION['email'])
{
    header("Location:adminloginpage.php");
}
    include 'dataconnection.php';
    $email = $_GET['email'];
    $id=$_GET['id'];
    $msg=" ";
    if(isset($_POST['submit']))
    {
        $sql=mysqli_query($conn,"SELECT * from `locations` where id = $id");
        $rz=mysqli_fetch_assoc($sql);
        // $name=$_POST['name'];
        $detail=$_POST['detail'];
        $dlink = $_POST['dlink'];
        $llink = $_POST['llink'];
        $imageName = $_FILES['image']['name'];
        $imageTempName = $_FILES['image']['tmp_name'];
        $targetPath = "images/".$imageName;

        $videoName = $_FILES['video']['name'];
        $videoTempName = $_FILES['video']['tmp_name'];
        $videoFile_size = $_FILES['video']['size'];
        $videoTarget = "images/".$videoName;
        if(!$detail)
        {
            $msg = "Please key-in location's details!";
        }
        else if(!$dlink)
        {
            $msg = "<div class='error'>Please key-in link!</div>";
        }
        else if(!$imageName)
        {
            $msg = "Please upload location's image!";
        }
        else if(!$videoName)
        {
            $msg = "Please upload location's video";
        }
        else if (isset($_FILES['image']) && $_FILES['image']['error'] !== UPLOAD_ERR_NO_FILE) 
        {
            if(move_uploaded_file($imageTempName,$targetPath))
        {
            if(move_uploaded_file($videoTempName,$videoTarget))
            {
                $sql = "UPDATE `locations` set description='$detail',image_url='$imageName',video_url='$videoName',direction_link = '$dlink',locationdetail_link = '$llink' Where id = '$id'";
                $result = mysqli_query($conn,$sql);
            }            
        }
        }
        else if (!isset($_FILES['image']['name']) || $_FILES['image']['name'] === "") {
            // User didn't upload a new image and image name is empty
            $msg = "<div class='error'>Please upload location's image!</div>";
        } else {
            // User didn't upload a new image, but image name is not empty
            echo 'No new image uploaded. Keeping the old image.';
        }
        
        
        
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin || Location(edit)</title>
    
    <?php
    include 'adminnavbar.php';
    $email = $_GET['email'];
    $sql = "SELECT * From `admin` where email = '$email'";
	$r = mysqli_query($conn,$sql);
	$re = mysqli_fetch_assoc($r);
    ?>
   <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
  
</head>
<style>
    
    body
    {
    background-image: url(images/image.gif);
    background-size: cover; 
    background-repeat: no-repeat;
    background-attachment: fixed;
    }

    .container1
    {
        margin: auto;
        margin-top: 3%;
        max-width: 800px;
        margin-bottom: 3%;

    }
    .editbox
    {
        border: 1px solid black;
    }
    .container1 h1
    {
        text-align: center;
        padding: 20px;
        background:rgba(0,0,0, 0.7);
        color: white;
        font-weight: bold;
        border-top-right-radius: 20px;
        border-top-left-radius: 20px;
        margin: 0;
    }
    .edi-box
    {
        /* text-align: center; */
        background: rgba(255, 255, 255, 0.6);
        padding-left: 35px;padding-bottom: 20px;
    }
    .edi-box input[type="text"]
    {
        border: none;
        background: transparent;
        border-bottom: 2px solid black;
        width: 55%;
        margin-bottom: 10px;
    }
    .edi-box input[type="file"]
    {
        display: none;
    }
    /* .edi-box textarea
    {
        background: transparent;
        border: 2px solid black;
    } */
    label
    {
        padding-right: 20px;
    }
    .Choose
    {
        background: #4bb6b7;
        padding: 10px;
        color: white;
        border-radius: 20px;
        margin-top: 12px;
    }
    .Choose:hover
    {
        cursor: pointer;
        color: black;
        background: rgba(255, 255, 255, 0.4);
        font-weight: bold;
    }
    .submit
    {
        text-align: center;
    }
    .submit input
    {
        background: #4bb6b7;
        padding: 10px;
        color: white;
        border-radius: 20px;
        margin-top: 12px;
        width: 40%;
        border: none;
        font-weight: bold;

    }
    .submit input:hover
    {
        cursor: pointer;
        color: black;
        background: rgba(255, 255, 255, 0.4);
        font-weight: bold;
    }
    .back a
    {
        color: black;
        text-decoration: underline;
        font-weight: bold;
    }

    .back a:hover
    {
        font-style: italic;
        text-decoration: none;
        color: #4bb6b7;
    }

</style>
<body >
    <div class="container1">
        <?php
            $sql=mysqli_query($conn,"SELECT * from `locations` where id = $id");
            $rz=mysqli_fetch_assoc($sql); 
        ?>
            
            <h1>Edit <?php echo $rz['name']?>'s Details</h1>
                <div class="edi-box">
                <form action="" method="post" enctype="multipart/form-data">
                <?php echo $msg?>
                <br>
                <label for="" >Location's Detail:</label>
                <textarea name="detail" id="detail" cols="60" rows="5" placeholder=""><?php echo $rz['description']?></textarea>
                <br>
                <label for="">Direction Link:</label>
                <input type="text" name="dlink" value="<?php echo $rz['direction_link']?>">
                <br>
                <label for="">Location Link:</label>
                <input type="text" name="llink" value="<?php echo $rz['locationdetail_link']?>">
                <br>
                <label for="">Location's Image:</label><img width="30%" src="images/<?php echo $rz['image_url'];?>" alt="">
                <label for="file"  name="choosei"class="Choose"><i class="fa fa-camera"></i> Choose a Photo</label>
                <input type="file" id="file" name="image" class="form-control" multiple value="images/<?php echo $rz['image_url'];?>">
                <br>
                <br>
                <label for="">Location's Video:</label>
                <video width="300px" controls autoplay loop>
                    <source src="images/<?php echo $rz['video_url']?>">
                </video>
                <label for="video"  class="Choose"><i class="fa fa-camera"></i> Choose a Video</label>
                <input type="file" id="video" name="video" class="form-control" multiple>
                <br>
                <div class="submit">
                <input type="submit" name="submit" value="Update Location">
                </div>
                <br>
                <div class="back">
                <a href="adminmanagelocation.php?email=<?php echo $email?>">Back to Location's details</a>
                </div>
                
        </form>
        </div>
    </div>
</body>
</html>
