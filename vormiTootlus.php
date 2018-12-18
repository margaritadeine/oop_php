<?php
/**
 * Created by PhpStorm.
 * User: margarita.deinekina
 * Date: 18.12.2018
 * Time: 10:27
 */
/*echo '<pre>';
print_r($_POST);
echo '</pre>';
echo '</pre>';*/

echo '<pre>';
print_r($_POST);

if(empty($_POST)){
    //echo '<a href="vorm.php">Logi sisse!</a>';
    //    echo '<a href="vorm.php">Logi sisse!</a>';
    header('Location: vorm.php');
} else {
    foreach ($_POST as $element){
        if(empty($element)){
            echo 'Andmed tuleb sisestada ka!<br>';
            echo '<a href="vorm.php">Proovi uuesti!</a>';
            exit;
        }
    }
    echo 'kasutajanimi = ' . $_POST['username'] . '<br>';
    echo 'parool = ' . $_POST['passwd'] . '<br>';
    echo 'Tere tulemast ' . $_POST['username'] . '!<br>';
}