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

    //Consulta todas las velas
    public function getVelas() { 
        $pdo = $this->crearConexion();
        $sql = "SELECT p.*, c.Nombre_Categoria AS CategoriaNombre 
                FROM productos p 
                JOIN categorias c ON p.ID_Categoria = c.ID_Categoria";
        $query = $pdo->prepare($sql);
        $query->execute();
        return $query->fetchAll(PDO::FETCH_OBJ);
    }

    //Consulta todas la velas por categoria
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

    //Consulta el producto por ID
    public function getVelaById($idProducto) {
        $pdo = $this->crearConexion();
        $sql = "SELECT p.*, c.Nombre_Categoria AS CategoriaNombre 
                FROM productos p 
                JOIN categorias c ON p.ID_Categoria = c.ID_Categoria 
                WHERE p.ID_Producto = ?";
        $query = $pdo->prepare($sql);
        $query->execute([$idProducto]);
        return $query->fetch(PDO::FETCH_OBJ);
    }

    //editar producto
    public function editProducto($idProducto, $nombre, $precio, $categoriaID) {
        $pdo = $this->crearConexion();
        $sql = "UPDATE productos SET Nombre_producto = ?, Precio = ?, ID_Categoria = ? WHERE ID_Producto = ?";
        $query = $pdo->prepare($sql);
        
        return $query->execute([$nombre, $precio, $categoriaID, $idProducto]);
    }

    //crar producto
    public function crearProducto($nombre, $precio, $categoriaID) {
        $pdo = $this->crearConexion();
        $sql = "INSERT INTO productos (Nombre_producto, Precio, ID_Categoria) VALUES (?, ?, ?)";
        $query = $pdo->prepare($sql);
        return $query->execute([$nombre, $precio, $categoriaID]);
    }
    //eliminar producto
    public function deleteProducto($idProducto) {
        $pdo = $this->crearConexion();
        $sql = "DELETE FROM productos WHERE ID_Producto = ?";
        $query = $pdo->prepare($sql);
        return $query->execute([$idProducto]);
    }
    
    
    
    
}
