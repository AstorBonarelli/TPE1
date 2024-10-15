<?php

class VelasModel{

    private function crearConexion(){
        $host = 'localhost';
        $user = 'root';
        $password = '';
        $database = 'velas';
    
        try {
            $pdo = new PDO("mysql:host=$host;dbname=$database;charset=utf8", $user, $password);
        } catch (\Throwable $th) {
            die($th);
        }

        return $pdo;
    }
    public function getVelas(){ 
    $pdo = $this->crearConexion();

    $sql = "select * from velas";
    $query = $pdo->prepare($sql);
    $query->execute();

    $velas = $query->fetchAll(PDO::FETCH_OBJ);

    return $velas;
    }
}