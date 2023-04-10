

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin || Profile</title>
    <?php
    include 'adminnavbar.php';
    $email = $_GET['email'];
    $sql = "SELECT * From `admin` where email = '$email'";
	$r = mysqli_query($conn,$sql);
	$re = mysqli_fetch_assoc($r);
    ?>
    
</head>
<style>
    *
{
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    list-style: none;
    font-family: sans-serif;
}
body
{
    background-image: url(images/image.gif);
    background-size: cover; 
    background-repeat: no-repeat;
    background-attachment: fixed;
}
.wrapper
{
    /* position: relative; */
    margin: auto;
    margin-top: 150px;
    max-width: 650px;
    height: 350px;
    display: flex;
    box-shadow: 0 1px 20px 0 rgba(75, 182, 183,0.9);
}
.wrapper .left
{
    width: 35%;
    background: rgba(0,0,0,0.7);
    padding: 40px 25px;
    border-top-left-radius: 5px;
    border-bottom-left-radius: 5px;
    text-align: center;
}
.wrapper .left img
{
    margin-bottom: 10px;
    border-radius: 5px;
}
.wrapper .left h4
{
    margin-bottom: 10px;
    color: #fff;

}
.wrapper .left p
{
    font-size: 15px;
    color: #fff;

}

.wrapper .right
{
    width: 65%;
    background: rgba(255, 255, 255, 0.7);
    border-top-right-radius: 5px;
    border-bottom-right-radius: 5px;
    padding: 30px 25px;
}
.wrapper .right .info
{
    margin-bottom: 25px;
}

.wrapper .right .info h3
{
    margin-bottom: 15px;
    padding-bottom: 5px;
    border-bottom:  1px solid black;
    color: #343c4e;
    text-transform: uppercase;
    letter-spacing: 5px;
    
}
.wrapper .right .info_data
{
    display: flex;
    justify-content: space-between;
}
.wrapper .right .info_data .data
{
    width: 45%;
}
.wrapper .right .info_data .data h4
{
    color: #353c4e;
    margin-bottom: 5px;
}
.wrapper .right .info_data .data p
{
    font-size: 15px;
    margin-bottom: 10px;
    color: #6c757d;
}
.settingimg
{
    width: 20px;
    display: block;
    position: absolute;
    /* right: 2px; */
    /* text-align: center; */
    margin-left: 320px;
}
</style>
<body >
            <div class="wrapper">
                <div class="left">
                    
                    <img src="images/<?php echo $re['image']?>" alt="Admin" width="100">
                    <h4><?php echo $re['username']?></h4>
                    <p>Admin of Travel Plan Generator</p>
                </div>
                <div class="right">
                <a href="adminprofileedit.php?email=<?php echo $re['email'];?>"><img src="images/setting1.png" class="settingimg" ></a>
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