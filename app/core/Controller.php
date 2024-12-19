<?php
class Controller{
    protected function model($model){
        // require_once '..' . $model . '.php'; 
        require_once '../app/models/' . $model . '.php';
        return new $model;
    }
    public function view($view, $data = []){
        require_once '../app/views/' . $view . '.php';
    }
}