<?php

session_start(); //alustame ananüümse sessiooniga
echo session_id();
echo'<br>';
echo '<div style="color: red">'.$_SESSION['viga'].'</div>';


/**
 * Created by PhpStorm.
 * User: margarita.deinekina
 * Date: 19.12.2018
 * Time: 10:36
 */

//session(kataloogis)/login.php

//trükkime välja vormi
?>
<form>
    <div method="post" action="login_do.php">
        <label>Kasutajanimi: </label>
        <input type="text" name="username">
    </div>
    <div>
        <label>Parool: </label>
        <input type="password" name="passwd">
    </div>
    <div>
        <input type="submit" value="Logi sisse">
    </div>

</form>