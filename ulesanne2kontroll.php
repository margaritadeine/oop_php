<?php
/**
 * Created by PhpStorm.
 * User: margarita.deinekina
 * Date: 11.12.2018
 * Time: 10:37
 */
echo '<html><head><title>Ülesanded</title></head><body>';
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
}
echo '</body></html>'; 