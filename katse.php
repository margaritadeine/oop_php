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
//muutujate sisu testvaatamine
var_dump($lehePealkiri);
echo '<br>';
var_dump($sisuPealkiri);
//andmetüübid
$taisarv = 7;
$reaalarv = -2.6;
$tekst = 'Tere PHP';
$toevaartusTrue = true;
$toevaartusFalse = false;
//väärtuse tüübi kontroll - gettype (4muutujaNimi)
//väärtuse tüübi teisendus -settype($muutujaNimi, 'tüüp'
//väljastamine
//ühendamine 'tekst katkeb '.$muutujaNImi.' tekst jätkub'


echo '
    <!doctype html>
    <html>
        <head>
                <title>'.$lehePealkiri.'</title>
        </head>
        <body>
            <h1>'.$sisuPealkiri.'</h1>
            <h3>Andmetüübid</h3>
            <ul>
                <li>$taisarv = '.$taisarv.' - '.gettype($taisarv).'</li>
                <li>$reaalarv = '.$reaalarv.' - '.gettype($reaalarv).'</li>
                <li>$tekst = '.$tekst.' - '.gettype($tekst).'</li>
                <li>$toevaartusTrue = '.$toevaartusTrue.'- '.gettype($toevaartusTrue).'</li>
                <li>$toevaartusFalse = '.$toevaartusFalse.'- '.gettype($toevaartusFalse).'</li>
            
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