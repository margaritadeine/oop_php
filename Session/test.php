<?php
/**
 * Created by PhpStorm.
 * User: margarita.deinekina
 * Date: 19.12.2018
 * Time: 11:34
 */
session_start();
echo session_id();
echo '<br>';
echo '<a href="login_do.php">sessiooni katse</a>';
echo '<br>';
echo '<a href="logout.php">Logi välja</a>';