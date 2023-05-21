<?php
    session_start();
    if(!$_SESSION['email'])
	{
    	header("Location:userregistrationlogin.php");
	}
		include "usernavbar.php";
		include 'dataconnection.php';
		$email = $_GET['email'];
		$sql = "SELECT * From `login` where email = '$email'";
		$r = mysqli_query($conn,$sql);
		$re = mysqli_fetch_assoc($r);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TPGS || Profile</title>
    <link rel="stylesheet" href="css/adminprofile.css">
</head>
<style>
    body
    {
    background-image: url(images/image.gif);
    background-size: cover; 
    background-repeat: no-repeat;
    background-attachment: fixed;
    
    }
</style>
<body >
            <div class="wrapper">
                <div class="left">
                    
                    <img src="images/<?php echo $re['image']?>" alt="login" width="100">
                    <h4><?php echo $re['username']?></h4>
                    <p>I love TPGS</p>
                </div>
                <div class="right">
                <a href="usereditprofile.php?email=<?php echo $re['email'];?>"><img src="images/setting.png" class="settingimg" ></a>
                    <div class="info">
                    
                        <h3>Information</h3>
                        <div class="info_data">
                            <div class="data">
                                <h4>Email</h4>
                                <p><?php echo $re['email']?></p>
                                <div class="data">
                                    <h4>Phone</h4>
                                    <p>0112112122</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
</div>
</div>

</body>
</html>