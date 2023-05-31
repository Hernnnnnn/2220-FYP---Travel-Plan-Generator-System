<?php
    include 'dataconnection.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <?php
    session_start();
    if(!$_SESSION['email'])
{
    header("Location:adminloginpage.php");
}
    include 'adminnavbar.php';
    $email = $_GET['email'];
    $loc=$_GET['localname'];
    $sql = "SELECT * From `".$loc."food`";
	$r = mysqli_query($conn,$sql);
	$re = mysqli_fetch_assoc($r);
    ?>
</head>
<style>
    body
    {
    background-image: url(images/image.gif);
    background-size: cover; 
    background-repeat: no-repeat;
    background-attachment: fixed;
    }

     table 
    {
        overflow-x: scroll;
        border-collapse: collapse;
        margin: 25px 0;
        font-size: 0.9em;
        font-family: sans-serif;
        /* min-width: 400px; */
        width: 70%;
        height: 50%;
        margin: auto;
        margin-top: 20px;
        margin-bottom: 20px;
        box-shadow: 0 0 20px rgba(0, 0, 0, 0.15);
    }

    table thead th {
    border: none;
    padding: 10px;
    font-size: 14px;
    color: #fff; 
    background: rgba(0,0,0,0.7);
    text-align: center; 
}
    /* table
    {
        /* position: absolute; 
        margin: auto;
        margin-top: 150px;
        width: 60%;
        height: 400px;
        background: rgba(255, 255, 255, 0.7);
        color: #343c4e;
        border-collapse: collapse;
        border-spacing: 0;
        border-radius: 12px 12px 0 0;
        overflow: hidden;
    } */
    
    td
    {
        background: rgba(255, 255, 255, 0.7);
        text-align: center;
        padding-bottom: 15px;
        padding-top: 15px;

    }
    th
    {
        /* background: rgba(0,0,0,0.7); */
        color: #fff;
        text-align: center;
        text-transform: uppercase;
    }

    input[type="checkbox"].toggle
    {
        opacity: 0;
        position: absolute;
    }
    
    input[type="checkbox"].toggle,label
    {
        display: flex;
        align-items: center;
        cursor: pointer;
        position: relative;
    }

    input[type="checkbox"].toggle,label::before
    {
        content: "";
        width: 4em;
        height: 2em;
        background-color: hsl(0, 80%, 90%);
        border-radius: 1em;
        margin-right: .25em;
        transition: background-color 200ms ease-in-out;
    }

    label
    {
        margin-bottom: 25px;
    }

    input[type="checkbox"].toggle:checked,label
    {
        color: red;
    }
    input[type="checkbox"].toggle + label::after {
  display: flex;
  justify-content: center;
  align-items: center;
  position: absolute;
  content: "\2715";
  /* font-size: em; */
  height: .9em;
  left: .2em;
  width: 1.8em;
  height: 1.8em;
  background-color: hsl(0, 80%, 60%);
  color: white;
  border-radius: 1em;
  transition: background-color 200ms ease-in-out, transform 200ms ease-in-out;
}
input[type="checkbox"].toggle:checked + label::before {
  background-color: hsl(100, 70%, 90%);
}

input[type="checkbox"].toggle:checked + label::after {
  content: "\2713";
  transform: translateX(100%);
  background-color: hsl(100, 70%, 60%);
}

input[type="checkbox"].toggle:disabled + label {
  color: #777;
}

input[type="checkbox"].toggle:disabled + label::before {
  background-color: #CCC;
}

input[type="checkbox"].toggle:disabled + label::after {
  background-color: #777;
}

.header
    {
        display: flex;
        padding: 1rem;
        margin: 0;
    }
.search-wrapper
    {
        border: 1px solid black;
        border-radius: 30px;
        height: 50px;
        margin: 0;
        /* align-items: center; */
        overflow-x: hidden;
        /* margin: auto; */
    }
    .search-wrapper button
    {
        display: inline-block;
        padding: 0rem .5rem;
        color: black;
        border: none;
        background-color: transparent;
        margin-right: 15px;
    }

    .search-wrapper span
    {
        font-size: 15px;
        margin-left: 10px;
    }
    .search-wrapper input
    {
        height: 100%;
        padding: .5rem;
        border: none;
        outline: none;
        background: transparent;
        color: gray;
        padding-left: 20px;
    }
    .update
    {
        color: white;
        margin: 10px;
        margin-left: 0;
        /* border: 1px solid black; */
        padding: 15px;
        border-radius: 25px;
        background-color: #4bb6b7;
        font-weight: bold;
    }

    .update:hover
    {
        color: black;
        background: rgba(255, 255, 255, 0.4);
        font-weight: bold;
    }
    .addlocat
    {
        margin-top: auto;
        margin-bottom: auto;
        margin-left: auto;
        background: #4bb6b7;
        color: white;
        padding: 15px;
        font-weight: bold;
        border-radius: 25px;
    }
    .addlocat:hover
    {
        color: black;
        background: rgba(255, 255, 255, 0.4);
        font-weight: bold;
        
    }
    .fa-close
    {
        font-size: 40px;
        color: #4bb6b7;
    }

    .fa-cog{
        font-size: 40px;
        color: #4bb6b7;
    }

    .fa-cog:hover
    {
        color: lightblue;
    }
    .fa-close:hover
    {
        color: red;
    }
    .title
    {
        text-align: center;
        font-size: 45px;
        /* border-radius: 25px; */
        background: rgba(0,0,0, 0.7);

        /* margin-left: ;  */
        color: #fff;
        padding: 20px;
        width: 350px;
        border-radius: 25px;
        margin: auto;
        margin-top: 50px;
    }
    .back
    {
        color: black;
        /* font-style: italic; */
        font-weight: bold;
        text-decoration: underline;
        float: left;
        margin-left: 25px;
    }
    .back:hover
    {
        color: #4bb6b7;
        font-style: italic;
    }
    
</style>
<body>
    <div class="set">
<div class="title"><?php echo $loc?></div>

    </div>
<div class="grid">
<form method="post">
            <table>
                <tr>
                    <?php 
                    if(isset($_POST['search']))
                    {
                        $searchKey=$_POST['search'];
                        $p = "SELECT * From `".$loc."food` where foodname LIKE '%$searchKey%'";

                    }
                    else
                    {
                        $p = "SELECT * From `".$loc."food`";
                        $searchKey = "";
                    }
                        
                        $query = mysqli_query($conn,$p);


                    ?>
                    <td colspan="4" style="padding: 10px;"><div class="header">
                    <div class="search-wrapper">
                    <input type="text" name="search" placeholder="Search here" value="<?php echo $searchKey?>">

                    <button type="submit" name="submit"><span class="fa fa-search"></span></button>
                    </div>
                    <a class="addlocat" href="adminaddfood.php?email=<?php echo $email;?>&&localname=<?php echo $loc?>">Add Food</a>
                     </div>
                     </form>
                    </td>
                </tr>
                <thead>
                <tr>
                    
                    <th>Food's Name</th>
                    <th>Food's Image</th>
                    <th></th>
                    <th></th>
                </tr>
                </thead>
            <?php
            // include 'dataconnection.php';
                while($red = mysqli_fetch_assoc($query))
                {
                    
            ?>
                <tr>
                    <td><span style="font-weight: bold; font-size: 19px;"><?php echo $red['foodname']?></span></td>
                    <td><img style="width: 40%;" src="<?php echo $red['foodimage']?>" alt=""></td>
                    <td>
                    <a href="admindellocat.php?email=<?php echo $email?>&&id=<?php echo $id?>"><span class="fa fa-close"></span></a></td>
                    <td>
                    <a href="adminlocatmoredetails.php?email=<?php echo $email?>&&id=<?php echo $id?>&&localname=<?php echo $loc?>"><span class="fa fa-cog"></span></a>
                    </td>
                    

                </tr>
            <?php
                }
            ?>
            <tr>
                <td colspan="4"><a class="back"href="adminManagelocation.php?email=<?php echo $email?>">Back to Manage Location</a></td>
            </tr>
            </div>
</body>
</html>