<?php
/**
 * Created by PhpStorm.
 * User: Lama
 * Date: 16.03.2016
 * Time: 14:44
 */
abstract class Model{
    protected $_pdo;
    public function __construct(){
        $this->_pdo = new PDO('mysql:dbname=dbname;host=localhost', 'root', 'mysql');
    }

    public function get_data(){}
}