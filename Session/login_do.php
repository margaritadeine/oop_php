<?php
/**
 * Created by PhpStorm.
 * User: margarita.deinekina
 * Date: 19.12.2018
 * Time: 10:43
 */


session_start(); //jätkame login.php faili sessiooni

echo '<pre>';
print_r($_POST);


if(empty($_POST)){
    header('Location: login.php');
    $_SESSION['viga'] ='Täida vormi andmed';
}
else if(empty($_POST['username'])){
    header('Location: login.php');
    $_SESSION['viga'] = 'Sisesta kasutaja nimi';
} else if(empty($_POST['passwd'])){
    header('Location: login.php');
    $_SESSION['viga'] = 'Sisesta parool';
} else {
    session_destroy(); //lõpetame veateade sessiooni
    session_start(); //alustan sisselogitud kasutaja sessioon
    session_regenerate_id(); //määrame sessioonile uus ID
    echo session_id();
    $_SESSION['username'] = $_POST['username'];
    echo '<pre>';
    print_r($_SESSION);
    echo '</pre>';
    echo 'Oled sisse loginud, '.$_SESSION['username'];
    echo'<br>';
    echo '<a href="test.php">sessiooni katse</a>';
    echo '<br>';
    echo'<a href="logout.php">Logi välja</a>';
}