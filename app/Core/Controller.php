<?php

class Controller
{
    protected function model($model)
    {
        require_once '../app/Models/' . $model . '.php';
        return new $model();
    }

    public function view($view, $data = [])
    {
        require_once '../app/views/layout.php';
    }
}
