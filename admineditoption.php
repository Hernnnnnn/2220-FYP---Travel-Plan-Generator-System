<?php
    include 'dataconnection.php';
    $status = $_GET['option'];
    $id=$_GET['id'];
    $email=$_GET['email'];
    if($status ==1)
    {
        $status=0;
        $q = "UPDATE `locations` set `option`='$status' where id = '$id'";
        mysqli_query($conn,$q);
    }
    else if($status ==0)
    {
        $status =1;
        $q = "UPDATE `locations` set `option`='$status' where id = '$id'";
        mysqli_query($conn,$q);
    }
    
    header("Location: adminmanagelocation.php?email=".$email);
    

?>

<script>
setTimeout(show,-1000)

    setTimeout(function() {
  window.location.href = "adminmanagelocation.php?email=" + encodeURIComponent("<?php echo $email; ?>");
}, 10000); 
</script>