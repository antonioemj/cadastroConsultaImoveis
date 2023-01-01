<?php

namespace app\controllers;

use app\models\CrudInquilino;

class Sitte extends CrudInquilino
{
    public function home()
    {
        require_once __DIR__ . '/../views/home.php';
    }

     public function cadastro()
    {
               require_once __DIR__ . '/../views/inquilino/cadastro.php';      
    }
  
    public function cadastra()
    {
        $consultar = $this->create();
        require_once __DIR__ . '/../views/inquilino/cadastro.php';    
    }

    public function consulta()
    {
        $consulta = $this->read();
        require_once __DIR__ . '/../views/inquilino/consulta.php';
    }    
}