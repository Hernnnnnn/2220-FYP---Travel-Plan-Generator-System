<?php include 'auth_check.php'; ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TPGS || Profile</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
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
.wrapper .right .info_data 
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
    margin-left: 350px;
}
input[type="submit"]
{
    border: none;
    width: 190px;
    height: 50px;
    padding: 5px 20px;
    margin-top: 20px;
    /* margin-left: 100px; */
    background: #4bb6b7;
    border-radius: 30px;
    font-size: 20px;
    color: white;
    
}
input[type="submit"]:hover
{
    background-color: #6c757d;
    color: white;
}
.success
{
    color: #2d6a4f;
    background-color: #52b788;
    /* font-weight: bold; */
    margin-bottom: 10px;
    padding: 8px;
    width: 370px;
    /* font-size: 10pt; */
    border-radius: 10px;
    /* text-transform: uppercase; */
    text-align: center;
}
.error
{
    color: #d43838;
    background-color: #fcd1d1;
    /* font-weight: bold; */
    margin-bottom: 10px;
    padding: 8px;
    width: 370px;
    /* font-size: 10pt; */
    border-radius: 10px;
    /* text-transform: uppercase; */
    text-align: center;
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
                <a href="userprofile.php?email=<?php echo $re['email'];?>"><img src="images/back.png" class="settingimg" ></a>
                    <div class="info">
                        <h3>Edit Information</h3>
                        <div class="info_data">
                            <div class="data">
                    <?php echo $msg;?>

                                <h4>Email</h4>
                                <p><?php echo $re['email']?></p>
                                <div class="data">
                                    <form action="" method="post">
                                    <h4>Image</h4>
                                    <input type="file" id="file" name="image" class="form-control" multiple>
                                    <br>
                                    <input type="submit" value="Submit" name="submit">
                                    
                                    </form>
                                    
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