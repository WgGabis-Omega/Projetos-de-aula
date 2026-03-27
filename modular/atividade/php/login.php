<?php

session_start();
if(isset($_POST["email"])){
    $email = $_POST['email'];
    $senha = $_POST['senha'];

    require 'Usuario.class.php';
    $usuario = new Usuario();
    $conn = $usuario->conectar();
    if($conn){
        $email = $usuario->checkUser($email);
        if($email){
            $user = $usuario->checkPass($email, $senha);
            if($user){
                $_SESSION['nome'] = "Teste";
                header("Location:home.html");
            }else{
                echo "Usuário ou senha incorretos!";
            }
        }else{
            echo "Este usuário não existe.";
        }

    }else{
        echo "Falha na conexão, tente novamente mais tarde.";

}
}else{
        echo "Post não entcontrado.";
}