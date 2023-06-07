<?php
session_start();
include('dataconnection.php');
include "usernavbar.php";

$email = $_GET['email'];
if(isset($_POST['update']))
{
    $imageName = $_FILES['image']['name'];
    $sql = "UPDATE `login` SET image ='$imageName' WHERE email='$email'";
    $result = mysqli_query($conn,$sql);
}

$email = $_GET['email'];
$query = mysqli_query($conn, "SELECT * FROM `login` WHERE email = '$email'");
$result = mysqli_fetch_assoc($query);
$msg = '';

if(isset($_POST['update']))
{
    $username = $_POST['username'];
    mysqli_query($conn, "UPDATE `login` SET username ='$username' WHERE email='$email'");
    $msg = "Information updated successfully!";
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>TPGS || Edit Profile</title>
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
.wrapper .right .info_data form
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
<body>
    <div class="wrapper">
        <div class="left">
            <img src="images/<?php echo $result['image'] ?>" width="100">
            <h4><?php echo $result['username'] ?></h4>
            <p>User of Travel Plan Generator</p>
        </div>

        <div class="right">
            <a href="userprofile.php?email=<?php echo $result['email']; ?>"><img src="images/back.png" class="settingimg"></a>
            <div class="info">
                <h3>Edit Information</h3>
                <div class="info_data">
                    <div class="data">
                        <?php echo $msg; ?>
                        <form action="" method="post">
                            <h4>Username</h4>
                            <input type="text" name="username" value="<?php echo $result['username'] ?>">
                            <input type="submit" name="update" value="Update">
                        </form> 
                        <form action="" method="post" enctype="multipart/form-data">
                            <h4>Choose a new profile picture</h4>
                            <br>
                            <input type="file" id="file" name="image" class="form-control" multiple>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>