<?php
/**
 * Created by PhpStorm.
 * User: Paul
 * Date: 04/02/2018
 * Time: 12:39
 */
namespace App;

use \PDO;

class Database{


    private $db_name;
    /**
     * @var string
     */
    private $db_user;
    /**
     * @var string
     */
    private $db_pass;
    /**
     * @var string
     */
    private $db_host;

    private $pdo;

    /**
     * Database constructor.
     * @param $db_name nom de la base de donnée
     * @param string $db_user nom de l'utilisateur
     * @param string $db_pass mot de pass
     * @param string $db_host emplacement
     */
    public function __construct($db_name, $db_user= 'root', $db_pass='', $db_host='localhost')
    {
        $this->db_name = $db_name;
        $this->db_user = $db_user;
        $this->db_pass = $db_pass;
        $this->db_host = $db_host;
    }


    /**
     * @return PDO
     */
    private function getPDO()
    {
        if($this->pdo === null){
            $pdo = new PDO('mysql:dbname=blog;host=localhost','root','');
            $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $this->pdo = $pdo;
        }
        return $this->pdo;
    }

    /**
     * @param $statement
     * @return mixed
     */
    public function query($statement, $class_name){
        $req = $this->getPDO()->query($statement);
        $datas = $req->fetchAll(PDO::FETCH_CLASS, $class_name);
        return $datas;
    }

    /**
     * @param $statement
     * @param $attributes
     * @param $class_name
     * @param bool $one
     * @return array|mixed
     */
    public function  prepare($statement, $attributes, $class_name, $one = false){
        $req = $this->getPDO()->prepare($statement);
        $req->execute($attributes);
        $req->setFetchMode(PDO::FETCH_CLASS, $class_name);
        if($one){
            $datas = $req->fetch();
        }else{
            $datas = $req->fetchAll();
        }
        return $datas;
    }
}