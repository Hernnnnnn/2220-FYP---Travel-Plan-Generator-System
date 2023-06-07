<?php

use Dompdf\Dompdf;

require('vendor/autoload.php');
include 'dataconnection.php'; 

$res = mysqli_query($conn,"SELECT * from userfeedback");

if(mysqli_num_rows($res)>0)
{
    $html ='<table>';
        $html.='<tr><td>Day</td><td>Locations</td></tr>';

        while($row = mysqli_fetch_assoc($res))
        {
            $htmls.='<tr><td>'.$row['des_day'].'</td><td>'.$row['name'].'</td></tr>';
        }
    $html.='</table>';
}
else
{
    $html="Data not found";
}
// echo $html;
$dompdf = new Dompdf;

$dompdf->loadHtml($html);
$dompdf->setPaper('A4','portrait');
$dompdf->render();
$dompdf->stream('test.pdf');
?>