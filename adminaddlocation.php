
<?php 
    include 'dataconnection.php';
    $email = $_GET['email'];
    $msg=" ";
    if(isset($_POST['submit']))
    {
        $name=$_POST['name'];
        $detail=$_POST['detail'];
        $imageName = $_FILES['image']['name'];
        $imageTempName = $_FILES['image']['tmp_name'];
        $targetPath = "images/".$imageName;

        $videoName = $_FILES['video']['name'];
        $videoTempName = $_FILES['video']['tmp_name'];
        $videoFile_size = $_FILES['video']['size'];
        $videoTarget = "images/".$videoName;
        if(!$name)
        {
            $msg = "Please key-in location's name!";
        }
        else if(!$detail)
        {
            $msg = "Please key-in location's details!";
        }
        else if(!$imageName)
        {
            $msg = "Please upload location's image!";
        }
        else if(!$videoName)
        {
            $msg = "Please upload location's video";
        }
        else
        {
            if(move_uploaded_file($imageTempName,$targetPath))
        {
            if(move_uploaded_file($videoTempName,$videoTarget))
            {
                $sql = "INSERT INTO `location detail`(lName,lDetails,lImage,lVideo) VALUES ('$name','$detail','$imageName','$videoName')";
                $result = mysqli_query($conn,$sql);
            }

            
        }
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
        margin-left: 10%;
        margin-right: 10%;
        margin-top: 5%;
    }
    .editbox
    {
        border: 1px solid black;
    }
    .edi-box
    {
        text-align: center;
        background: rgba(255, 255, 255, 0.6);
    }
</style>
<body >
    <div class="container1">
        
            <div class="edi-box">
                <h1>Edit Location's Details</h1>
                <form action="" method="post" enctype="multipart/form-data">
                <?php echo $msg?>
                <br>
                <label for="">Location's Name:</label>
                <input type="text" name="name" id="" value="<?php if(isset($_POST['submit'])){echo $_POST['name'];}?>">
                <br>
                <label for="" >Location's Detail:</label>
                <textarea name="detail" id="detail" cols="30" rows="10" placeholder="<?php if(isset($_POST['submit'])){echo $_POST['detail'];}?>"></textarea>
                <br>
                <label for="">Location's Image:</label>
                <label for="file"  class="Choose"><i class="fa fa-camera"></i> Choose a Photo</label>
                <input type="file" id="file" name="image" class="form-control" multiple >
                <br>
                <label for="">Location's Video:</label>
                <label for="video"  class="Choose"><i class="fa fa-camera"></i> Choose a Photo</label>
                <input type="file" id="video" name="video" class="form-control" multiple>
                <br>
                <input type="submit" name="submit" value="Add Location">
                <br>
                <a href="adminmanagelocation.php?email=<?php echo $email?>">Back To Location's details</a>
        </form>
        </div>
    </div>
</body>
</html>
