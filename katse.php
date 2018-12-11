<?php
/**
 * Created by PhpStorm.
 * User: margarita.deinekina
 * Date: 06.12.2018
 * Time: 11:08
 */




echo '<!doctype html><html><head>
<title>Tsüklid</title>
<link rel="stylesheet" type="text/css" href="katsestyle.css">
</head><body>';

  //tsüklid
//for
/*
 * for($juhtismisM=algvaartus; $juhtimisM < lõppväärtus; $juhtimisM++){
 * tegevused, mis toimuvad nii kaua, kui $juhtimisM < lõppväärtus kehtib
 }
 */


echo '<table>';
$ridadeArv = 6;
$veergudeArv = 5;
for($reaNumber = 1; $reaNumber <= $ridadeArv; $reaNumber++){
    echo '<tr>';
    for($veeruNumber = 1; $veeruNumber <= $veergudeArv; $veeruNumber++) {
        echo '<td>';
        echo $veeruNumber;
        echo '</td>';
    }
    echo '</tr>';
}
echo '</table>';
echo '</body></html>';
?>