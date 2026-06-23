<?php 

include 'config.php';

$title = $_POST['title'];
$description = $_POST['description'];

$query = "INSERT INTO historias(title, description) VALUES ('$title', '$description')";

mysqli_query($conn, $query);

header('Location: ../html/biblioteca.html');

?>