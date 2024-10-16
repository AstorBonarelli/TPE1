<?php

class CategoriasModel {

    private function crearConexion() {
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

    public function getCategorias() { 
        $pdo = $this->crearConexion();

        $sql = "SELECT * FROM categorias";
        
        $query = $pdo->prepare($sql);
        $query->execute();

        $categorias = $query->fetchAll(PDO::FETCH_OBJ);

        return $categorias;
    }
}
