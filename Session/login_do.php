<?php
/**
 * Created by PhpStorm.
 * User: margarita.deinekina
 * Date: 19.12.2018
 * Time: 10:43
 */

if(empty($_POST)){
    header('Location: login.php');
}
if(empty($_POST['username']) or empty($_POST['passwd'])){
    header('Location: login.php');
}