
<?php
    if(isset($_POST["hidden_status"]))
    {
        
        header("Location: editstatus.php?id=".$_POST['ID']);
        
    }
?>
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
        font-size: 0.9em;
        font-family: sans-serif;
        /* min-width: 400px; */
        width: 60%;
        margin: auto;
        margin-top: 100px;
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
    }
    th
    {
        /* background: rgba(0,0,0,0.7); */
        color: #fff;
        text-align: center;
        text-transform: uppercase;
    }
    th,td
    {
        padding: 12px 15px;
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
    
</style>
<body >
            
            <table>
                <thead>
                <tr>
                    <th>ID</th>
                    <th>Image</th>
                    <th>Username</th>
                    <th>Password</th>
                    <th>Email</th>
                    <th>Status</th>

                </tr>
                </thead>
            <?php
            // include 'dataconnection.php';

            $p = "SELECT * From `login`";
                $query = mysqli_query($conn,$p);
                while($user = mysqli_fetch_assoc($query))
                {
            ?>
            <form method="post">
                <tr>
                    <td><?php echo $user['ID']?></td>
                    <td><?php echo $user['image']?></td>
                    <td><?php echo $user['username']?></td>
                    <td><?php echo $user['password']?></td>
                    <td><?php echo $user['email']?></td>
                    <td>
                    <input type="hidden" name="ID" id="ID" value="<?php echo $user['ID']?>">
                    <input type='checkbox' class='toggle' id='check<?php echo $user['ID']?>' <?php if($user['status']==1){echo "checked";}?>>
                        <label for='check<?php echo $user['ID']?>'></label>
                        <input type="hidden" id="hidden_status" name="hidden_status"value="<?php echo $user['status']?>">
                        
                        
                    </td>
                

                </tr>
            <?php
                }
            ?>
            <input type="submit" name="submit" id="submit">
            </form>
            </table>
            
</div>
</div>

</body>
<script>

</script>
</html>
