<?php
/**
 * Created by PhpStorm.
 * User: margarita.deinekina
 * Date: 06.12.2018
 * Time: 11:08
 */




/*
 function funktsiooniNimi ([$param1, ..., $paramN]){
kõik, tegevused,
mis antud funktsiooni sees toimuvad
}
 */

function htmlTabel(){
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
}
//lehe sisu väljastamine
echo '<!doctype html><html><head>
<title>Funktsioonid</title>
<link rel="stylesheet" type="text/css" href="katsestyle.css">
</head><body>';
//kutsume funktsiooni tööle
htmlTabel();
echo '</body></html>';
?>