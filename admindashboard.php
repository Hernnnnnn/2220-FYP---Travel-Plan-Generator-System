<?php
session_start();
if(!$_SESSION['email'])
{
    header("Location:adminloginpage.php");
}
include 'dataconnection.php';
    // $email = $_GET['email'];
?>

<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin || Dashboard</title>
    <link rel="stylesheet" href="https://maxst.icons8.com/vue-static/landings/line-awesome/font-awesome-line-awesome/css/all.min.css">
    <!-- <link rel="stylesheet" href="css/adminprofile.css"> -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/morris.js/0.5.1/morris.css">
    

<style>
    
    
    
    main
    {
        /* margin-top: 50px; */
        padding: 5rem 3rem;
        background: transparent;
        min-height: calc(100vh-90vh);
    }

    .cards
    {
        display: grid;
        grid-template-columns: repeat(3,1fr);
        grid-gap: 2rem;
        /* margin-top: 1rem; */
    }
    .card-single
    {
        display: flex;
        justify-content: space-between;
        background: #fff;
        /* margin: 10px; */
        padding: 1.8rem;
        border-radius: 2px;
    }
    .card-single div:last-child span
    {
        font-size: 3rem;
        color: #ff0a54;
    }
    .card-single div:first-child span
    {
        color: black;
    }
    .card-single:last-child{
        background: #ff0a54;
    }
    .card-single:last-child h1,
    .card-single:last-child div:first-child span,
    .card-single:last-child div:last-child span
    {
        color: #fff;
    }
    .chart-grid
    {
        /* display: grid;
        grid-template-columns: 60% auto;
        margin-top: 2rem; */
        height: 100%;
        color: white;
        width: auto;
        min-width: 450px;
        margin: auto;
        position: relative;
        /* justify-content: center; */
        /* text-align: center; */
        background: white;
        text-align: center;
        border-radius: 2px;
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
        max-width: 800px;
        margin: auto;
        margin-top: 20px;
        margin-bottom: 10px;
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
    
    table td
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
</style>

</head>
<?php 
    include 'adminnavbar.php';
    ?>
<body>
    <!-- <header> -->
    
    <!-- </header> -->
    
    <main>
        <div class="cards">
            <div class="card-single">
                <div>
                <h1>
                    <?php
                    $r = "SELECT * from `login`";
                    $r_query = mysqli_query($conn,$r);
                        if($user_total = mysqli_num_rows($r_query))
                        {
                            echo $user_total;
                        }
                        else
                        {
                            echo "No Data";
                        }
                    ?>
                </h1>
                <span>Users</span>
                </div>
                <div>
                    <span class="fa fa-users"></span>
                </div>
            </div>
        
        
            <div class="card-single">
                <div>
                <h1>
                <?php
                    $r = "SELECT * from `userfeedback` where type = 'feedback'";
                    $r_query = mysqli_query($conn,$r);
                        if($user_total = mysqli_num_rows($r_query))
                        {
                            echo $user_total;
                        }
                        else
                        {
                            echo "No Data";
                        }
                    ?>
                </h1>
                <span>Feedback</span>
                </div>
                <div>
                    <span class="fa fa-clipboard"></span>
                </div>
            </div>
        
            <!-- <div class="card-single">
                <div>
                    <h1>16</h1>
                    <span>Orders</span>
                </div>
                <div>
                    <span class="fa fa-shopping-bag"></span>
                </div>
            </div> -->
            
            <div class="card-single">
                <div>
                    <h1>
                    <?php
                    $r = "SELECT * from `history`";
                    $r_query = mysqli_query($conn,$r);
                        if($user_total = mysqli_num_rows($r_query))
                        {
                            echo $user_total;
                        }
                        else
                        {
                            echo "No Data";
                        }
                    ?>
                    </h1>
                    <span>Planner Generated</span>
                </div>
                <div>
                    <span class="fa fa-shopping-bag"></span>
                </div>
            </div>
        </div>
    </main>
    <table>
                </tr>
                <thead>
                <tr>
                    
                    <th style="padding-right:80px; padding-left:80px;">Number</th>
                    <th>Username</th>
                    <th>States</th>
                    <th>Destination</th>
                </tr>
                </thead>
            <?php
            
            // include 'dataconnection.php';
            $q="SELECT * From `history`";
            $query = mysqli_query($conn,$q);
                while($red = mysqli_fetch_assoc($query))
                {
                    $email = $red['email'];
                    $sql = "SELECT * FROM `login` WHERE email = '$email'";
                    $check = mysqli_query($conn, $sql);
                    $result = mysqli_fetch_assoc($check);
                    
            ?>
                <tr>
                    <td><span style="font-size:1.5rem;"><?php echo $red['id']?></span></td>
                    
                    <td><span style="font-size:1.5rem;"><?php echo $result['username']?></span></td>

                    <td><span style="font-size:1.5rem;"><?php echo $red['states']?></span></td>
                    <td><span style="font-size:1.5rem;"><?php echo $red['destinations']?></span></td>
                    
                    
                    

                </tr>
            <?php
                }
            ?>
            <tr>
                <td colspan="5"><a class="back"href="adminManagelocation.php?email=<?php echo $email?>">Back to Manage Location</a></td>
            </tr>
            </table>
</div>
</div>
</body>
</html>