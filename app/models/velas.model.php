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
    
        try {
            $sql = "SELECT p.*, c.Nombre_Categoria AS CategoriaNombre 
                    FROM productos p 
                    JOIN categorias c ON p.ID_Categoria = c.ID_Categoria";
            
            $query = $pdo->prepare($sql);
            $query->execute();
    
            $velas = $query->fetchAll(PDO::FETCH_OBJ);
        } catch (PDOException $e) {
            die("Error en la consulta: " . $e->getMessage());
        }
    
        return $velas;
    }
}
