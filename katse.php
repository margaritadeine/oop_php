<?php
/**
 * Created by PhpStorm.
 * User: margarita.deinekina
 * Date: 06.12.2018
 * Time: 11:08
 */

//massiivid
//array()


/*
 *
$massiiv = array(); //tühi massiiv - ei ole sees midagi
$massiiv [] = väärtus;
 */
$nimed = array();
$nimed[] = 'Anna';
$nimed[] = 'Elen';
var_dump($nimed);
echo '<pre>';
print_r($nimed);
echo '<pre>';




function htmlTabel($ridadeArv = 0, $veergudeArv =0){
    $tabel = '<table>';

for($reaNumber = 1; $reaNumber <= $ridadeArv; $reaNumber++){
      $tabel = $tabel. '<tr>';
    for($veeruNumber = 1; $veeruNumber <= $veergudeArv; $veeruNumber++) {
        $tabel = $tabel. '<td>';
        $tabel = $tabel.$veeruNumber;
        $tabel = $tabel.'</td>';
    }
    $tabel = $tabel.'</tr>';
}
    $tabel = $tabel.'</table>';
    return   $tabel;
}
//lehe sisu väljastamine
echo '<!doctype html><html><head>
<title>Funktsioonid</title>
<link rel="stylesheet" type="text/css" href="katsestyle.css">
</head><body>';
//kutsume funktsiooni tööle
$tabel1 = htmlTabel(4, 4);
echo $tabel1;
echo '<hr>';
$tabel2 = htmlTabel(2, 5);
echo $tabel2;
echo  '<hr>';
$tabel3 = htmlTabel(1, 3);
echo $tabel3;
echo '</body></html>';
?>