<?php

session_start();
if($_SESSION['nome']){
    $nome = $_SESSION['nome'];
    echo "Bem vindo!";
}else{
    echo "Faça login para continuar."
}