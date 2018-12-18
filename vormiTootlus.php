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


if(empty($_POST)){
    echo '<a href="vorm.php">Logi sisse!</a>';
} else {
    echo 'kasutajanimi = ' . $_POST['username'] . '<br>';
    echo 'parool = ' . $_POST['passwd'] . '<br>';
    echo 'Tere tulemast ' . $_POST['username'] . '!<br>';
}