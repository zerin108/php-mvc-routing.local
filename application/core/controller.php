<?php
/**
 * Created by PhpStorm.
 * User: Lama
 * Date: 16.03.2016
 * Time: 14:50
 */

abstract class Controller{
    public $model;
    public $view;

   /**
     *
     */
    function __construct(){
        $this->view = new View();
    }

    abstract function action_index();
}