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

function suguVarv($sugu){
    if($sugu == 'naine'){
        echo '<div style="color: red">';
    } else {
        echo '<div style="color: blue">';
    }
}

function valjastaInfo($massiiv){
    foreach ($massiiv as $alammassiivNimi =>$alamMassiivAndmed) {
        suguVarv($alamMassiivAndmed['sugu']);
        echo '<h5>'.$alammassiivNimi.'</h5><br>';
        foreach ($alamMassiivAndmed as $elemendiNimi => $elemendiVaartus) {
            suguVarv($alamMassiivAndmed['sugu']);
            echo $elemendiNimi . ' - ' . $elemendiVaartus . '</div>';
        }
        echo '<hr>';
    }
}

//massiivi loomine
$perekondPeppa = array(
    'Peppa'=>
        array(
    'nimi' => 'Peppa',
    'amet' => 'porsas',
    'vanus' => 5,
    'sugu' => 'naine'
),
    'George' =>
        array(
    'nimi' => 'Peppa',
    'amet' => 'porsas',
    'vanus' => 2,
    'sugu' => 'mees'
),
    'Ema'=>
        array(
            'nimi' => 'Peppa',
            'amet' => 'porsas',
            'vanus' => 35,
            'sugu' => 'naine'
        ),
    'Isa' =>
        array(
            'nimi' => 'Peppa',
            'amet' => 'porsas',
            'vanus' => 40,
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