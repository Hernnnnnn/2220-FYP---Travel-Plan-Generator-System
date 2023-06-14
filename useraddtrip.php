<?php 
include 'dataconnection.php';

$email =$_GET['email'];
$day = $_GET['num_days'];
$loc=$_GET['destination'];
$q1 = "SELECT * from generator";
$r=mysqli_query($conn,$q1);
$rz = mysqli_fetch_assoc($r);
while($rzx=mysqli_fetch_array($r))
{
    $d = $rzx['day'];
}
if($day == 0 && $d==0)
{
    $d=$d+1;
    $day=$day+1;
}
else
{
    $day;
}

mysqli_query($conn,"INSERT INTO `generator` (id,day) VaLUes ('". $day+1 ."','". $day+1 ."')");
$day=$day + 1;
header("location: usergenerator.php?email=".$email."&destination=".$loc."&num_days=".$day);

?>