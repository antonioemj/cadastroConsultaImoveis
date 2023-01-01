<?php

namespace app\models;

class CrudProprietario extends Connection
{ 
    public function create()
    {
        $nomeProprietario = filter_input(INPUT_POST, 'nomeProprietario');
        $cidade = filter_input(INPUT_POST, 'cidade');
        $bairro = filter_input(INPUT_POST, 'bairro');
        $rua = filter_input(INPUT_POST, 'rua');
        $numeroImovel = filter_input(INPUT_POST, 'numeroImovel');
        $cep  = filter_input(INPUT_POST, 'cep');
        $valorAluguel = filter_input(INPUT_POST, 'valorAluguel');

        $conn = $this->connect();
        $sql = "insert into dadosimoveis values(default,:nomeProprietario,:cidade,:bairro,:rua,:numeroImovel,:cep,:valorAluguel)";

        $stmt = $conn->prepare($sql);
        $stmt->bindParam(':nomeProprietario', $nomeProprietario);
        $stmt->bindParam(':cidade', $cidade);
        $stmt->bindParam(':bairro', $bairro);
        $stmt->bindParam(':rua', $rua);
        $stmt->bindParam(':numeroImovel', $numeroImovel);
        $stmt->bindParam(':cep', $cep);
        $stmt->bindParam(':valorAluguel', $valorAluguel);
        $stmt->execute(); 

        return $stmt;      
        
    }

    public function read()
    {
        $conn = $this->connect();
        $sql = "select * from dadosimoveis";

        $stmt = $conn->prepare($sql);
        $stmt->execute();

        $result = $stmt->fetchAll();

        return $result;

    }

    public function update()
    {

    }

    public function delete()
    {

    }

}