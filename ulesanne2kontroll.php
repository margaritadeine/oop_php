<?php
/**
 * Created by PhpStorm.
 * User: margarita.deinekina
 * Date: 11.12.2018
 * Time: 10:37
 */
echo '<html><head><title>Ülesanded</title>
<link rel="stylesheet" type="text/css" href="katsestyle.css"></head><body>';
//Ülesanne 2
/* Loo muutuja nimega varv, mille algväärtuseks pane 'punane';
Koosta if-else if- else lause, mis väljastab teksti "Värviline tekst"
vastavalt määratud väärtusega. Katseta vähemalt kolme HTML värviga -
red, blue, orange- vastavalt tingimuslauses määra punane, sinine ja orange

*/
echo '<h4>Ülesanne 2</h4>';
$varv = 'roheline';
if($varv == 'punane'){
    echo '<p style="color: red;">Värviline tekst</p>';
} else if($varv == 'sinine'){
    echo '<p style="color: blue;">Värviline tekst</p>';
} else if($varv == 'orange'){
    echo '<p style="color: orange;">Värviline tekst</p>';
} else {
    echo '<p>Värviline tekst</p>';

    echo '<hr>';
    echo '<h4>Ülesanne 3</h4>';
    echo '<table>';
    $ridadeArv = 6;
    $veergudeArv = 5;
    for($reaNumber = 1; $reaNumber <= $ridadeArv; $reaNumber++){
        echo '<tr>';
        for($veeruNumber = 1; $veeruNumber <= $veergudeArv; $veeruNumber++) {
            $varv = '#'.$reaNumber.$veeruNumber.$reaNumber.$veeruNumber.$reaNumber.$veeruNumber;
            echo '<td style="background-color: '.$varv.'">';
            echo $veeruNumber;
            echo '</td>';
        }
        echo '</tr>';
    }
    echo '</table>';
}
echo '</body></html>';