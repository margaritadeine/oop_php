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
/*
//massiivi loomine
$numbrid = array(
    array(1, 2, 3),
    array(4, 5, 6),

);
//massiiivi sisu test kontroll
var_dump($numbrid);
echo '<pre>';
print_r($numbrid);
echo '</pre>';
//massiivi elemendi väljastamine
echo 'massiivi element [1][1] = '.$numbrid[1][1];
echo '<br>';
//massiivi suuruse kontroll - meil on ridade arv
$ridadeArv = count($numbrid);
echo $ridadeArv;
echo '<br>';
//veergudeArv
$veergudeArv =count($numbrid[0]);
echo $veergudeArv;
echo '<br>';

//massiivi väljastamine for abil

for ($reaNumber = 0; $reaNumber < $ridadeArv; $reaNumber++){
    for($veeruNumber = 0; $veeruNumber < $veergudeArv; $veeruNumber++){
        echo $numbrid[$reaNumber][$veeruNumber].'&nbsp';
    }
    echo '<br>';
}

// massiivi väljastamine foreach abil
foreach ($numbrid as $rida) {
    foreach ($rida as $number){
        echo $number.'&nbsp';
    }
    echo '<br>';
}



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

echo '<hr>';
*/



// Ülesanne 4
/* Muuda htmlTabel() funktsioon nii, et see võtaks parameetrina numbrite massiivi
ja väljastas HTML tabelina
*/
echo '<!doctype html><html><head>
<title>Ülesanne 4</title>
<link rel="stylesheet" type="text/css" href="katsestyle.css">
</head><body>';

echo '<h3>Ülesanne 4</h3>';
function htmlTabel($massiiv){
    echo '<table>';
    for ($reaNumber = 0; $reaNumber < count($massiiv); $reaNumber++) {
        echo '<tr>';
        for ($veeruNumber = 0; $veeruNumber < count($massiiv[$reaNumber]); $veeruNumber++) {
            echo '<td>';
            echo $massiiv[$reaNumber][$veeruNumber];
            echo '</td>';
        }
        echo '</tr>';
    }
    echo '</table>';
}
$numbrid = array(
    array(1, 2, 3),
    array(4, 5, 6)
);
htmlTabel($numbrid);
echo '<br>';
$symbolid = array(
    array('a', 'b'),
    array('d', 'e'),
    array('g', 'h')
);
htmlTabel($symbolid);

echo '</body></html>';
?>