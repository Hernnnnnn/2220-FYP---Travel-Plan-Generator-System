<?php 
    include 'dataconnection.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TPGS || History</title>
    <!-- <link rel="stylesheet" href="css/style1.css"> -->

    <style>
        body{
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
        min-width: 400px;
        width: 70%;
        height: auto;
        max-width: 90%;
        margin: auto;
        margin-top: 150px;
        margin-bottom: 450px;
        box-shadow: 0 0 20px rgba(0, 0, 0, 0.15);
    }

    table thead th {
    border: none;
    padding: 30px;
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
        padding-bottom: 50px;
        padding-top: 50px;
    }
    th
    {
        /* background: rgba(0,0,0,0.7); */
        color: #fff;
        text-align: center;
        text-transform: uppercase;
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
    </style>
</head>
<body>
<?php include "usernavbar.php"; ?>
<table>
                <tr>
                    <?php 
                    $email = $_GET['email'];
                    if(isset($_POST['search']))
                    {
                        $searchKey=$_POST['search'];
                        $p = "SELECT * From `history` where states LIKE '%$searchKey%' and email = '$email'";

                    }
                    else
                    {
                        $p = "SELECT * From `history` where email = '$email'";
                        $searchKey = "";
                    }
                        
                        $query = mysqli_query($conn,$p);


                    ?>
                    <td colspan="5" style="padding: 10px;"><div class="header">
                    <div class="search-wrapper">
                    <input type="text" name="search" placeholder="Search here" value="<?php echo $searchKey?>">

                    <button type="submit" name="submit"><span class="fa fa-search"></span></button>
                    </div>
                     </div>
                     </form>
                    </td>
                </tr>
                <thead>
                <tr>
                    
                    <th style="padding-left: 50px; padding-right: 50px;">Number</th>
                    <th style="padding-left: 100px; padding-right: 100px;">States</th>
                    <th >DESTINATION</th>
                    <th style="padding-left: 100px; padding-right: 100px;">Date</th>
                </tr>
                </thead>
            <?php
            // include 'dataconnection.php';
                while($red = mysqli_fetch_assoc($query))
                {
                    
            ?>
                <tr>
                    <td><span><?php echo $red['id']?></span></td>
                    <td><?php echo $red['states']?></td>
                    <td style="text-align: center;">
                        <?php echo $red['destinations']?>
                    </td>
                    <td><?php echo $red['createdtime']?></td>
                    
                    
                    

                </tr>
            <?php
                }
            ?>
            </div>
</table>

<?php include "userfooter.php"; ?>    

</body>

</html>