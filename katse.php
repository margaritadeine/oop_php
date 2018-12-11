<?php
/**
 * Created by PhpStorm.
 * User: margarita.deinekina
 * Date: 06.12.2018
 * Time: 11:08
 */


//muutujate defineerimine
//$muutujaNimi = väärtus;
$lehePealkiri = 'Katse leht';
$sisuPealkiri = 'Muutujate defineerimine';

//Tingimuslaused
/*
 * if (tingimus == true) {
 *  siis toimub see osa
 * } else {
 *  muidu toimub see osa
 * }
 */
$naitaSisu = 0;
$naitaPeidetudInfo = 0;

echo '
    <!doctype html>
    <html>
        <head>
                <title>'.$lehePealkiri.'</title>
        </head>
        <body>';
    if($naitaSisu == true) {
    // sisu väljastamine
    echo '  <h1>' . $sisuPealkiri . '</h1>';
} else if( $naitaSisu == 1){
    echo 'see on tavaline info';
} else if($naitaSisu == 0) {
        echo 'see on tavaline peidetud info';
    } else {
        echo 'kõik on saladus';
    }
// html lehe lõpp
echo '

        </body>
     </html>
 ';
?>