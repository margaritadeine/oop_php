<?php
/**
 * Created by PhpStorm.
 * User: margarita.deinekina
 * Date: 11.12.2018
 * Time: 9:23
 */

// Ülesanne 1
/* Loo programm, mille sees:
a) defineeritud muutujate abil
    Sinu ees ja perenimi
    kursuse tähis
    kursuse number
    Sinu kooli email
b) Väljastatud muutujate väärtused koos sobiva tekstiga html faili kujul
*/

$lehePealkiri = 'Ülesanne 1';
$sisuPealkiri = 'Muutujate defineerimine';


//muutujate sisu testvaatamine
var_dump($lehePealkiri);
echo '<br>';
var_dump($sisuPealkiri);
//andmetüübid
$eesjapereNimi = 'Margarita Deinekina';
$kursuseTahis = 'KD';
$kursuseNumber = 18;
$kooliEmail = 'margarita.deinekina@khk.ee';


echo '
    <!doctype html>
    <html>
        <head>
                <title>'.$lehePealkiri.'</title>
        </head>
        <body>
            <h1>'.$sisuPealkiri.'</h1>
            <h3>Minu andmed</h3>
            <ul>
                <li>$eesjapereNimi = '.$eesjapereNimi.' - '.gettype($eesjapereNimi).'</li>
                <li>$kursuseTahis = '.$kursuseTahis.' - '.gettype($kursuseTahis).'</li>
                <li>$kursuseNumber = '.$kursuseNumber.' - '.gettype($kursuseNumber).'</li>
                <li>$kooliEmail = '.$kooliEmail.'- '.gettype($kooliEmail).'</li>
                
            
            </ul>
            ';
//tüübi teisendamise katse
echo $taisarv.' + '.$taisarv.' = '.($taisarv +$taisarv);
echo '<br>';
settype($taisarv, 'string');
echo $taisarv.' + '.$taisarv.' = '.($taisarv +$taisarv);
echo '<br>';
echo gettype($taisarv);
//html lehe lõpp
echo '
        </body>
     </html>
 ';
?>