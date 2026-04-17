<?php

session_start();
require 'Usuario.class.php';
$usuario = new Usuario();

$connection = $usuario->conectar();

if($connection){
    if(isset($_POST["email"])){
        $email = addslashes ($_POST['email']);
        $senha = md5 (addslashes ($_POST['senha']));

        $user = $usuario->checkUser($email);

        if($user){
            $user = $usuario->checkPass($email, $senha);
            if($user){
                $_SESSION['email'] = $email;
                header("Location:home.php");
            }else{
                echo "Usuário ou senha incorretos!";
                exit();
            }
        }else{
            echo "Este usuário não existe.";
            header("Location:cadastrar.php");
        }
    }

}else{
    echo "Post não encontrado.";
    exit();
}
