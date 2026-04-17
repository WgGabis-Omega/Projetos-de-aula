<?php

require 'Usuario.class.php';
$usuario = new Usuario();
$conn = $usuario->conectar();

if ($conn){
    if( isset( $_POST['email'])){
        $nome  = addslashes($_POST['nome']);
        $email = addslashes($_POST['email']);
        $senha = addslashes($_POST['senha']);

        $user = $usuario->checkUser($email);
        
        
            
            if($user){
                echo "<script>
                    alert ('O Usuário já existe! Faça login para continuar.')
                </script>";
                exit();
            }else{
                $user = $usuario->insertUser($nome, $email, $senha);
                if( $user ){
                    echo "Usuario inserido com Sucesso!";
                }else{
                    echo "Erro ao inserir o Usuario!!!";
                }
            }
        }else{
            echo "Post tá errado seu lindo gostoso sedoso cheiroso fabuloso";
        }
}else{
    echo "<script>
        alert('Banco Indisponivel. Tente mais tarde!')
    </script>";
}
