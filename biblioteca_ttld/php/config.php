<?php

$host = "localhost";
$user = "root";
$password = "";
$database = "biblioteca";

$conn = mysqli_connect(
    $host,
    $user,
    $password,
    $database
);

if( !$conn ){
    die("Erro na conexão com o banco.");

}

?>