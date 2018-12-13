<?php
/**
 * Created by PhpStorm.
 * User: margarita.deinekina
 * Date: 13.12.2018
 * Time: 10:28
 */

class Tabel
{
    //antud omadused
    var $tabel = array();

    /**
     * Tabel constructor.
     */
    public function __construct()
    {
        echo 'Tabel tüübi objekt on loodud<br>';
    }
    //klassi meetodid

    /**
     * @param $rida -tegemist on massiiv rea elementidega
     */
    function  lisaRida($rida){
        $this->tabel[] = $rida;
    }

    /**
     * vaata tabel massiv foreach abil ridade kaupa
     * ja väljasta iga rea sees olev element tühikuga erladades
     * read eralda reavahetusega
     */
    function naitaTabel(){
        foreach ($this->tabel as $rida){
            foreach ($rida as $element){
                echo $element.'&nbsp;';
            }
            echo '<br>';
        }
    }

}