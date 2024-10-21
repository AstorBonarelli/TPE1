<?php
include_once 'app/views/login.view.php';
include_once 'app/models/login.model.php';

class LoginController {

    public function mostrarLogin() {
        $view = new LoginView();
        $username = isset($_SESSION['USERNAME']) ? $_SESSION['USERNAME'] : null;  
        $view->mostrarFormLogin(null, $username); 
    }
    

    public function verify() {
        $username = $_POST['username'];
        $password = $_POST['password'];
        $model = new LoginModel();
        $view = new LoginView();
    
        if (!empty($username) && !empty($password)) {
            $user = $model->verificarUsuario($username, $password);
            if ($user) { 
                session_start();
                $_SESSION['USERNAME'] = $username;
                $_SESSION['ID'] = $user["id_usuario"];
                $_SESSION['LAST_ACTIVITY'] = time();
                header("Location: " . BASE_URL . "velas");
                die();
            } else {
                $view->mostrarFormLogin("Usuario o contraseña incorrecta");
            }
        } else {
            $view->mostrarFormLogin("Por favor, complete todos los campos.");
        }
    }
    

    public function logout() {
        session_destroy();
        header('Location: login');
        die();
    }
}
