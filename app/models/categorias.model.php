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

    // Obtener todas las categorías
    public function getCategorias() {
        $pdo = $this->crearConexion();
        $sql = "SELECT * FROM categorias";
        $query = $pdo->prepare($sql);
        $query->execute();
        return $query->fetchAll(PDO::FETCH_OBJ);
    }

    // Obtener categoría por ID
    public function getCatById($idCategoria) {
        $pdo = $this->crearConexion();
        $sql = "SELECT * FROM categorias WHERE ID_Categoria = $idCategoria";
        $query = $pdo->prepare($sql);
        $query->execute();
        return $query->fetch(PDO::FETCH_OBJ);
    }

    // Editar categoría
    public function editarCategoria($idCategoria, $nombre, $imagen) {
        $pdo = $this->crearConexion();
        $sql = "UPDATE categorias SET Nombre_Categoria = $nombre, Imagen_Categoria = $imagen WHERE ID_Categoria = $idCategoria";
        $query = $pdo->prepare($sql);
        return $query->execute();
    }

    // Crear nueva categoría
    public function crearCategoria($nombre, $imagen) {
        $pdo = $this->crearConexion();
        $sql = "INSERT INTO categorias (Nombre_Categoria, Imagen_Categoria) VALUES ($nombre, $imagen)";
        $query = $pdo->prepare($sql);
        return $query->execute();
    }

    // Eliminar categoría
    public function deleteCategoria($idCategoria) {
        $pdo = $this->crearConexion();
        $sql = "DELETE FROM categorias WHERE ID_Categoria = $idCategoria";
        $query = $pdo->prepare($sql);
        return $query->execute();
    }
}
