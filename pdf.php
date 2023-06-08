<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Manage Category Page</title>
    
</head>
<style>
        /*  Table CSS */
    table {
            border-collapse: collapse;
            width: 100%;
            
        }
        th, td {
            border: 1px solid black;
            padding: 8px;
            text-align: left;
            
            flex-wrap: wrap;
            justify-content: center;
            align-items: center;

            
        }
        th {
            background-color:#ddd;
        }

        @media print {
            #print {
                display: none;
            }
            #backbtn
            {
                display: none;
            }
        }
        
        #print{
            margin-left: 150px;
        }
        button
        {
            margin-left: 150px;
        }
        #print
        {
            margin-left: 150px;
            background-color: #039be5;
            color: #fff;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }
        #backbtn
        {
            background-color: #039be5;
            color: #fff;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }

    
        .logo
        {
          width:150px;
          margin: 0;
          height:60px;
          padding: 0;
        }

</style>
    <?php
        include 'dataconnection.php';
    ?>
    
    <h1 style="margin-left:70px;"><img class="logo" src="admin_img/logo.png" alt="comet logo">Category Information</h1>

   
        <table cellpadding="0px" cellspacing="0px"  rules="none" frame="border" style="box-shadow: 3px 3px 5px grey">
            <tr>
                <th colspan="2">
                    Category Information
                </th>
            </tr>
            
            <tr>
                <td><b>Category ID : </b></td>
                <td><b>Category Title : </b></td>

                <?php
                    include("includes.php");
                    
                    // Check connection
					if (!$conn) {
						die("Connection failed: " . mysqli_connect_error());
					}

                $i = 0;
                $get_cat = "SELECT * FROM generator";
                $run_cat = mysqli_query($conn, $get_cat);

                while($row_cat = mysqli_fetch_assoc($run_cat))
                {
                    $cat_id = $row_cat['id'];
                    $cat_title = $row_cat['destination'];

                    $i++;
                ?>
                    <tr>
                        <td><?php echo $i; ?></td>
                        <td><?php echo $cat_title; ?></td>
                    </tr>
                <?php
                }
                ?>
            </tr>
        </table>
    </div>
    <br/>
        <button id="print" onclick="window.print();" style='margin-left: 40px'>Print Report</button>
        <a href="print_report.php"><button id="backbtn" name="backbtn" style='margin-left: 1180px'>Back to View List</button></a>
    
        <?php
    if(isset($_POST["backbtn"]))
    {
        header("location: View report.php");
        exit();
    }

    ?>
</div>

</body>

</html>