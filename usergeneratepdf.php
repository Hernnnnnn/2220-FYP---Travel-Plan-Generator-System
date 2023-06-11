<?php

include 'dataconnection.php';
    $loc = $_GET['destination'];
    $email = $_GET['email'];
    $day = $_GET['num_days'];
    $q = "SELECT * From `generator`";
    $p = mysqli_query($conn,$q);

    $destination ="";
    date_default_timezone_set('Asia/Kuala_Lumpur');
    $local_date = date('Y-m-d');
    if(isset($_POST['print']))
    {
        $a = "INSERT INTO `history`(states,createdtime,email) VALUES ('$loc','$local_date','$email')";
        mysqli_query($conn,$a);
        while($r = mysqli_fetch_array($p))
        {
            $data = $r['destination'];
           if(!empty($data))
           {
                $destination .= $data."\n";
                echo $destination;
           }
            $e = "DELETE from `generator`";
            mysqli_query($conn,$e);
            $e1 ="ALTER TABLE `generator` AUTO_INCREMENT = 1";
            mysqli_query($conn,$e1);
           
        }
        $a1 = "UPDATE `history` set destinations = '$destination' where states = '$loc' AND createdtime = '$local_date'";
        mysqli_query($conn,$a1);
        //    echo $destination;
           
        header("Location: userhomepage.php?email=".$email);
    }
    
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Generator Report</title>
</head>
<style>
    @media print {
            #print {
                display: none;
            }
            #backbtn
            {
                display: none;
            }
        }
        h1
        {
            text-align: center;
        }
        table
        {
            margin: auto;
            border-collapse: collapse;
            width: 80%;
            max-width: 800px;
        }
        table th
        {
            text-align: center;
        }
        th, td {
            border: 1px solid black;
            padding: 8px;
            text-align: left;
            
            flex-wrap: wrap;
            justify-content: center;
            align-items: center;
        }
        button
        {
            /* margin-left: 150px; */
            margin-top: 20px;
        }
        .box2
        {
            float: right;
            margin-right: 50px;
            
        }
        .box1
        {
            float: left;
            cursor: pointer;
        }
        .print
        {
            cursor: pointer;
            border: none;
            background: #4bb6b7;
            border-radius: 0.5rem;
            padding: 10px 15px;
        }

        .back button
        {
            cursor: pointer;
            border: none;
            background: #4bb6b7;
            border-radius: 0.5rem;
            padding: 10px 15px;
        }

        .back button:hover
        {
            color: white;
            background: black;
        }

        .print:hover
        {
            color: white;
            background: black;
        }
       

</style>
<body>
    <div class="box">
        
    <h1><?php echo $loc?></h1>
    <form action="" method="post">
    <table>
        <tr>
            <th>Day</th>
            <th>Locations</th>
        </tr>
        <?php 
            while($r = mysqli_fetch_assoc($p))
            {
        ?>
        <tr>
            <td style="text-align: center;"><?php echo $r['day']?></td>
            <td><?php echo $r['destination']?></td>
        </tr>
        <?php
        }
        ?>
    </table>
    <div class="box1">
    <button name="print" class="print" id="print" onclick="window.print();" style='margin-left: 40px'>Print Report</button>
    </div>
    <div class="box2">
    <a href="usergenerator.php?email=<?php echo $email?>&destination=<?php echo $loc?>&num_days=<?php echo $day?>" class="back" id="backbtn"><button name="back">Back To Generator</button></a>
    </form>
    </div>
    </div>
    
</body>
</html>