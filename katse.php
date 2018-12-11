<?php
/**
 * Created by PhpStorm.
 * User: margarita.deinekina
 * Date: 06.12.2018
 * Time: 11:08
 */




echo '
    <!doctype html><html> <head> <title>'.$lehePealkiri.'</title></head><body>';
  //tsüklid
//for
/*
 * for($juhtismisM=algvaartus; $juhtimisM < lõppväärtus; $juhtimisM++){
 * tegevused, mis toimuvad nii kaua, kui $juhtimisM < lõppväärtus kehtib
 }
 */


echo '<table style="border: 1px solid black; border-collapse: collapse; width: 300px;">';
$ridadeArv = 4;
for($reaNumber = 1; $reaNumber <= $ridadeArv; $reaNumber++){
    echo '<tr style="border: 1px solid black;">';
    echo '<td style="text-align: center">';
    echo $reaNumber;
    echo '</td>';
    echo '</tr>';
}
echo '</table>';
echo '</body></html>';
?>