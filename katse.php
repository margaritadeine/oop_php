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
function suguVordlus($porsas1, $porsas2){
    if ($porsas1['sugu'] == $porsas2['sugu']) {
        return 0; }
    return ($porsas1['sugu'] < $porsas2['sugu']) ? -1 : 1;
}
function sortSooJargi($perekond){
    usort($perekond, 'suguVordlus');
}

//massiivi loomine
$perekondPeppa = array(
    'Peppa'=>
        array(
    'nimi' => 'Peppa',
    'amet' => 'porsaslaps',
    'vanus' => 5,
    'sugu' => 'naine'
),
    'George' =>
        array(
    'nimi' => 'George',
    'amet' => 'porsaslaps',
    'vanus' => 2,
    'sugu' => 'mees'
),
    'Põrsas Ema'=>
        array(
            'nimi' => 'Ema Põrsas',
            'amet' => 'porsasema',
            'vanus' => 35,
            'sugu' => 'naine'
        ),
    'Põrsas Isa' =>
        array(
            'nimi' => 'Isa Põrsas',
            'amet' => 'porsasisa',
            'vanus' => 40,
            'sugu' => 'mees'
        )


);

//sort($perekondPeppa);
//asort($perekondPeppa);
//ksort($perekondPeppa);
sortSooJargi($perekondPeppa);

//lehe sisu väljastamine
echo '<!doctype html><html><head>
<title>Funktsioonid</title>
<link rel="stylesheet" type="text/css" href="katsestyle.css">
</head><body>';
//kutsume funktsiooni tööle
valjastaInfo($perekondPeppa);


echo '</body></html>';
?>