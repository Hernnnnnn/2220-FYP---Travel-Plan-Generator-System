<?php
    session_start();
    if(!$_SESSION['email'])
{
    header("Location:adminloginpage.php");
}
?>
    
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin || Location</title>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    
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

     table 
    {
        overflow-x: scroll;
        border-collapse: collapse;
        margin: 25px 0;
        /* font-size: 20px; */
        font-family: sans-serif;
        /* min-width: 400px; */
        width: 60%;
        margin: auto;
        margin-top: 90px;
        margin-bottom: 50px;
        box-shadow: 0 0 20px rgba(0, 0, 0, 0.15);
    }

    table thead th {
    border: none;
    padding: 50px;
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
        padding-bottom: 20px;
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
        padding: 10px;
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
    .update1
    {
        color: white;
        margin: 10px;
        margin-left: 0;
        /* border: 1px solid black; */
        padding: 10px;
        border-radius: 25px;
        background-color: #ed4337;
        font-weight: bold;
    }
    .update1:hover
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
    
    .icon
    {
        font-size: 25px;
    }
    .icon:hover
    {
        font-size: 35px;
        color: black;
        transition: 0.5s;
    }
    .image2
    {
        padding-top: 20px;
        padding-bottom: 20px;
    }
    .center
    {
        position:fixed;
        display: inline-block;
        top: 50%;
        left: 50%;
        transform: translate(-50%,-50%);
    }
    .popup
    {
        width: 350px;
        height: 280px;
        padding: 30px 20px;
        background: #f5f5f5;
        border-radius: 10px;
        box-sizing: border-box;
        z-index: 2;
        text-align: center;
        opacity: 0;
        top: -200%;
        transform: translate(-50%,-50%) scale(0.5);
        transition: opacity 300ms ease-in-out,top 1000ms ease-in-out,transform 1000ms ease-in-out;
    }

    .popup.active
    {
        opacity: 1;
        top: 50%;
        transform: translate(-50%,-50%) scale(1);
        transition: transform 3000ms cubic-bezier(0.18,0.89,0.43,1.19);
    }

    .popup .icon
    {
        margin: 5x 0px;
        width: 50px;
        height: 50px;
        border: 2px solid #34f234;
        text-align: center;
        display: inline-block;
        border-radius: 50%;
        line-height: 60px;
    }
    .popup .icon i
    {
        font-size: 30px;
        color: #34f234;
        font-weight: bold;
    }

    .popup .title
    {
        margin: 5px 0px;
        font-size: 30px;
        font-weight: 600;
    }

    .popup .dismiss-btn
    {
        margin-top: 15px;
    }

    .popup .dismiss-btn button
    {
        padding: 10px 20px;
        background: #111;
        color: #f5f5f5;
        border: 2px solid #111;
        font-size: 16px;
        font-weight: 600;
        outline: none;
        border-radius: 10px;
        cursor: pointer;
        transition: all 3000ms ease-in-out;
    }

    .popup .dismiss-btn button:hover
    {
        color: #111;
        background: #f5f5f5;
    }
</style>
<?php include 'adminnavbar.php';
    $email = $_GET['email'];
    $sql = "SELECT * From `admin` where email = '$email'";
	$r = mysqli_query($conn,$sql);
	$re = mysqli_fetch_assoc($r);
    ?>
<body >
    <div class="popup center">
        <div class="icon">
            <i class="fa fa-check"></i>
        </div>
        <div class="title">
            Success!!
        </div>
        <!-- <div class="dismiss-btn">
            <button id="dismiss-popup-btn">
                Dimiss
            </button>
        </div> -->
    </div>
    <form method="post">
            <table>
                <tr>
                    <?php 
                    if(isset($_POST['search']))
                    {
                        $searchKey=$_POST['search'];
                        $p = "SELECT * From `locations` where `name` LIKE '%$searchKey%'";

                    }
                    else
                    {
                        $p = "SELECT * From `locations`";
                        $searchKey = "";
                    }
                        
                        $query = mysqli_query($conn,$p);


                    ?>
                    <td colspan="9" style="padding: 10px;"><div class="header">
                    <div class="search-wrapper">
                    <input type="text" name="search" placeholder="Search here" value="<?php echo $searchKey?>">

                    <button type="submit" name="submit"><span class="fa fa-search"></span></button>
                    </div>
                    <a class="addlocat" href="adminaddlocation.php?email=<?php echo $email;?>">Add State</a>
                     </div>
                     </form>
                    </td> 
                </tr>
                <thead>
                <tr>
                    
                    <th>States</th>
                    <th>States Details</th>
                    <th>States Image</th>
                    <th>States Video</th>
                    <th>Derection Link</th>
                    <th>States Details Link</th>
                    <th></th>
                    <th></th>
                    <th></th>
                </tr>
                </thead>
            <?php
            // include 'dataconnection.php';

                while($loc = mysqli_fetch_array($query))
                {
                    
            ?>
                <tr>
                    <td><span style="font-weight: bold; font-size: 15px;"><?php echo $loc['name']?></span></td>
                    <td><div class="test"><?php echo $loc['description']?></div></td>
                    <td class="image2"><img style="width: 60%;" src="images/<?php echo $loc['image_url']?>" alt=""></td>
                    <?php 
                        $id=$loc['id'];
                        $localname = $loc['name'];
                    ?>
                    <td><?php echo $loc['direction_link']?></td>
                    <td><?php echo $loc['locationdetail_link']?></td>
                    <td>
                    <a class="update" href="adminupdatelocationdetails.php?email=<?php echo $email?>&&id=<?php echo $id?>">Edit</a>
                    </td>
                    <td>
                    <?php
                   $status = $loc["option"];
                    if($status==1)
                    {
                        echo '<a class="update" id="open-popup-btn" onclick="show()"  href="admineditoption.php?email='.$email.'&&id='.$id.'&&option='.$status.'">Hot</a>';
                    }
                    else if($status==0)
                    {
                        echo '<a onclick="show()" class="update1" href="admineditoption.php?email='.$email.'&&id='.$id.'&&option='.$status.'">Wow</a>';
                    }
                    ?>
                    </td>
                    <td class="setting">
                    
                    <a class="icon"href="adminlocatmoredetailsfood.php?email=<?php echo $email?>&&id=<?php echo $id?>&&localname=<?php echo $localname?>"><span class="glyphicon glyphicon-apple"></span></a>
                    <a class="icon" href="adminlocatmoredetailsplace.php?email=<?php echo $email?>&&id=<?php echo $id?>&&localname=<?php echo $localname?>"><span class="fa fa-globe" ></span></a>
                    </td>
                    <td>
                    <a class="icon" href="admindellocat.php?email=<?php echo $email?>&&id=<?php echo $id?>&&localname=<?php echo $localname?>"><span class="fa fa-close" ></span></a>
                    </td>
                    
                    

                </tr>
            <?php
                }
            ?>
            </form>
            </table>
            
</div>
</div>

</body>
<script>
    function show()
    {
        {
        document.getElementsByClassName("popup")[0].classList.add("active");
    }
}   
    document.getElementById("dismiss-popup-btn").addEventListener("click",function(){
        document.getElementsByClassName("popup")[0].classList.remove("active");
    })

    
</script>

</html>
