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
function valjastaInfo($massiiv){
    foreach ($massiiv as $alammassiivNimi =>$alamMassiivAndmed) {
        echo '<h5>'.$alammassiivNimi.'</h5><br>';
        foreach ($alamMassiivAndmed as $elemendiNimi => $elemendiVaartus) {
            echo $elemendiNimi . ' - ' . $elemendiVaartus . '<br>';
        }
        echo '<hr>';
    }
}

//massiivi loomine
$perekondPeppa = array(
    array(
    'nimi' => 'Peppa',
    'amet' => 'porsas',
    'vanus' => 5,
    'sugu' => 'naine'
),
    array(
    'nimi' => 'Peppa',
    'amet' => 'porsas',
    'vanus' => 2,
    'sugu' => 'mees'
)

);


//lehe sisu väljastamine
echo '<!doctype html><html><head>
<title>Funktsioonid</title>
<link rel="stylesheet" type="text/css" href="katsestyle.css">
</head><body>';
//kutsume funktsiooni tööle
valjastaInfo($perekondPeppa);

echo '</body></html>';
?>