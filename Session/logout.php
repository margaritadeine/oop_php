<?php
/**
 * Created by PhpStorm.
 * User: margarita.deinekina
 * Date: 19.12.2018
 * Time: 11:17
 */

session_start();
echo session_id();
session_destroy();
session_regenerate_id();
header('Location: login.php');
