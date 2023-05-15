<?php
session_start();
if(!$_SESSION['email'])
{
    header("Location:adminLogin.php");
}
include 'dataconnection.php';
    $email = $_GET['email'];
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
        grid-template-columns: repeat(4,1fr);
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
                <h1>14</h1>
                <span>Projects</span>
                </div>
                <div>
                    <span class="fa fa-clipboard"></span>
                </div>
            </div>
        
            <div class="card-single">
                <div>
                    <h1>16</h1>
                    <span>Orders</span>
                </div>
                <div>
                    <span class="fa fa-shopping-bag"></span>
                </div>
            </div>
            <div class="card-single">
                <div>
                    <h1>$60 K</h1>
                    <span>Income</span>
                </div>
                <div>
                    <span class="fa fa-shopping-bag"></span>
                </div>
            </div>
        </div>
    </main>
    <div class="chart-grid">
        <div class="chart-follow">
            <h3>Follower</h3>
            <span class="las la-cog"></span>
            <div id="myfirstchart" style="height: 250px;"></div>
        </div>
    </div>
</div>
</div>
</body>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.0/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/morris.js/0.5.1/morris.min.js"></script>
        <script src="dashboard.js"></script>
</html>