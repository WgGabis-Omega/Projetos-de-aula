<?php
include 'Usuario.class.php';
$usuario = new Usuario();

$conn = $usuario->conecta();
if( $conn ){
    if(!empty($_POST['id'])){
        $nome  = $_POST ['nome'];
        $email = $_POST ['email'];
        $senha = $_POST ['senha'];

        $user = $usuario->alterarUsuario($id, $nome, $email, $senha);
    }if( $user ){
        echo "Usuário alterado com sucesso!";
    }else{
        echo "Erro ao alterar o Registro!";
    }else{
        echo "Preencha o formulário e clique em Salvar";
    }
    header("location:tabela.php");
}else{
    echo "Banco Indísponivel";
}