<?php
/**
 * Created by PhpStorm.
 * User: margarita.deinekina
 * Date: 13.12.2018
 * Time: 10:44
 */

//loeme sisse Tabel.php Tabeli faili sisu
//tabeli sisu kättesaadav sellisel viisil
require_once './Tabel.php';
require_once './htmlTabel.php';
//loome tabeli objekt
$lihtTabel = new Tabel();

//lihtTabelile lisame read sisuga
$lihtTabel->lisaRida(array(1,2,3));
$lihtTabel->lisaRida(array(4,5,6));
$lihtTabel->lisaRida(array(7,8,9));

//väljastame tabel
$lihtTabel->naitaTabel();
echo '<hr>';

//loome htmlTabel objekti
$htmlTabel = new htmlTabel();
//lisame read sisuga
$htmlTabel->lisaRida(array(1,2,3));
$htmlTabel->lisaRida(array(4,5,6));
$htmlTabel->lisaRida(array(7,8,9));
//väljastame tabel
$htmlTabel->naitaTabel();
echo '<hr>';

