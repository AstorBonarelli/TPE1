<?php

class VelasModel {
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

    public function getVelas() { 
        $pdo = $this->crearConexion();
        $sql = "SELECT p.*, c.Nombre_Categoria AS CategoriaNombre 
                FROM productos p 
                JOIN categorias c ON p.ID_Categoria = c.ID_Categoria";
        $query = $pdo->prepare($sql);
        $query->execute();
        return $query->fetchAll(PDO::FETCH_OBJ);
    }

    public function getVelasByCategory($categoriaID) {
        $pdo = $this->crearConexion();
        $sql = "SELECT p.*, c.Nombre_Categoria AS CategoriaNombre 
                FROM productos p 
                JOIN categorias c ON p.ID_Categoria = c.ID_Categoria 
                WHERE p.ID_Categoria = ?";
        $query = $pdo->prepare($sql);
        $query->execute([$categoriaID]);
        return $query->fetchAll(PDO::FETCH_OBJ);
    }
}
