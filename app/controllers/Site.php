<?php

namespace app\controllers;

use app\models\CrudProprietario;

class Site extends CrudProprietario
{
    public function home()
    {
        require_once __DIR__ . '/../views/home.php';
    }

    public function cadastro()
    {
       
        require_once __DIR__ . '/../views/proprietario/cadastro.php';      
    }
  
    public function cadastrar()
    {
        $consultar = $this->create();
        require_once __DIR__ . '/../views/proprietario/cadastro.php';    
    }

    public function consulta()
    {
        $consulta = $this->read();
        require_once __DIR__ . '/../views/proprietario/consulta.php';
    }    
   
}
