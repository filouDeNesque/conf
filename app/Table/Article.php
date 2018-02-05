<?php
/**
 * Created by PhpStorm.
 * User: Paul
 * Date: 04/02/2018
 * Time: 13:07
 */
namespace App\Table;

class Article{

    /**
     * @param $key
     * @return mixed
     */
    public function __get($key)
    {
        $method = 'get'.ucfirst($key);

        $this->$key = $this->$method();
        return $this->$key;

    }

    /**
     * @return string
     */
    public function getURL(){
        return 'index.php?p=article&id='.$this->id;
    }

    /**
     * @return string
     */
    public function getEXTRAIT(){
        $html = '<p>'. substr($this->contenu, 0,250).'...</p>';
        $html .= '<p><a href="'.$this->getURL().'">voir la suite</a></p>';
        return $html;
    }
}