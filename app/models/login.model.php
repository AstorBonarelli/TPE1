<?php

class LoginModel {
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

    public function verificarUsuario($nombreUsuario, $contrasena) {
        $pdo = $this->crearConexion();
        
        $stmt = $pdo->prepare("SELECT * FROM usuarios WHERE nombre_usuario = ?");
        $stmt->execute([$nombreUsuario]);
        $usuario = $stmt->fetch(PDO::FETCH_ASSOC);

        if ($usuario && $usuario['contrasena'] === $contrasena) {
            return $usuario;
        }

        return false;
    }
}
