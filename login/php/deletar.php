<?php
include "Usuario.class.php";
$usuario = new Usuario();

$conn = $usuario->conecta();

if( !$conn ){
    echo "Banco indisponivel";
    exit();
}else{
    if( !empty ($_GET['id'])){
        $id = $_GET['id'];
        $del = $usuario->apagarUsuario($id);
        if( $del ){
            header("location:tabela.php");
        }else{
            echo "Erro ao excluir o registro!";
            exit();
        }
    }
}