<?php
/**
 * Created by PhpStorm.
 * User: Paul
 * Date: 04/02/2018
 * Time: 11:28
 */
require '../app/Autoloader.php';
App\Autoloader::register();

//definition de p 
if(isset($_GET['p'])){
    $p = $_GET['p'];
}
else{
    $p =  'home';
}

//initialisation des objet
$db = new \App\Database('blog');

//
ob_start();
if($p === 'home'){
    require '../page/home.php';
}elseif($p === 'article'){
    require '../page/single.php';
}elseif ($p === 'confo') {
	require '../page/confo.php';
}elseif ($p === 'confotest') {
	require '../page/confotest.php';
}

$content = ob_get_clean();
require '../page/template/default.php';