<?php

class Controller {

    protected $db;

    public function __construct() {
        $this->db = new PDO('mysql:host=localhost;dbname=php-mvc', 'root', '');
    }

    public function model($model) 
    {
        require_once '../app/models/'. $model.'.php';

        return new $model($this->db);
    }


    protected function view($view, $data = [])
    {
        require_once '../app/views/' . $view . '.php';
    }
}