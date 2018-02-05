<?php
/**
 * Created by PhpStorm.
 * User: Paul
 * Date: 04/02/2018
 * Time: 11:31
 */
namespace App;
/**
 * Class Autoloader
 * @package Tutoriel
 */
class Autoloader{

    /**
     *function apppelable
     */
    static function register (){
        spl_autoload_register(array(__CLASS__,'autoload'));
    }

    /**
     * @param $class defini la classe à appeler
     */
    static function autoload($class){
        if(strpos($class,__NAMESPACE__.'\\')===0){
            $class = str_replace(__NAMESPACE__.'\\','',$class);
            $class = str_replace('\\','/',$class);
            require __DIR__.'/' .$class. '.php';
        }
    }

}
