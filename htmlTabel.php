<?php
/**
 * Created by PhpStorm.
 * User: margarita.deinekina
 * Date: 13.12.2018
 * Time: 11:04
 */
require_once './Tabel.php';
require_once './htmlTabel.php';
class htmlTabel extends Tabel
{

    /**
     * htmlTabel constructor.
     */
    public function __construct()
    {
        echo 'HTML';
      parent::__construct();
    }

    /**
     * vaata tabel massiv foreach abil ridade kaupa
     * ja väljasta HTML tabeli kujul
     */
    function naitaTabel()
    {
       echo '<tabel border="1">';
       foreach ($this->tabel as $rida){
           echo '<tr>';
           foreach ($rida as $element){
               echo '<td>'.$element.'</td>';
           }
           echo '<tr>';
       }
       echo '<tabel>';
    }

}