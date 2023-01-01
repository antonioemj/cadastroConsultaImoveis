<?php

namespace app\models;

class CrudInquilino extends Connection
{
    public function create()
    {       
      $nomeInquilino = filter_input(INPUT_POST, 'nomeInquilino');
        $outrosInquilinos = filter_input(INPUT_POST, 'outrosInquilinos');
        $cpf= filter_input(INPUT_POST, 'cpf');
        $telefone = filter_input(INPUT_POST, 'telefone');
        $dataNascimento = filter_input(INPUT_POST, 'dataNascimento');      

        $conn = $this->connect();
        $sql = "insert into dadosinquilino values(default,:nomeInquilino,:outrosInquilinos,:cpf,:telefone,:dataNascimento)";

        $stmt = $conn->prepare($sql);
        $stmt->bindParam(':nomeInquilino', $nomeInquilino);
        $stmt->bindParam(':outrosInquilinos', $outrosInquilinos);
        $stmt->bindParam(':cpf', $cpf);
        $stmt->bindParam(':telefone', $telefone);
        $stmt->bindParam(':numeroImovel', $numeroImovel);
        $stmt->bindParam(':dataNascimento', $dataNascimento);
        $stmt->execute(); 

        return $stmt;
    }

    public function read()
    {
        $conn = $this->connect();
        $sql = "select * from dadosinquilino";

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