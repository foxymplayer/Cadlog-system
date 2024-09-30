<?php

//requer arquivo 'user.php' que contem o model user com as funções para manipulação de dados de usuarios//
require_once 'models/user.php';

class AuthController{
    //cria função responsavel pelo processo de login//
    public function login()
    {
        if($_SERVER['REQUEST_METHOD'] == 'POST'){
            $email = $_POST['email'];
            $senha = $_post['senha'];

            $user = User::findByEmail($email);
        }   
    }
}
?>