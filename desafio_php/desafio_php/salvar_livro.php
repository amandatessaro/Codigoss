<?php
include "connection.php";

$titulo = $_POST['titulo'];
$autor = $_POST['autor'];
$ano = $_POST['ano'];
$categoria = $_POST['categoria'];
$quantidade = $_POST['quantidade'];

$sql = "INSERT INTO livros (titulo, autor, ano_publicacao, categoria, quantidade)
        VALUES ('$titulo', '$autor', '$ano', '$categoria', '$quantidade')";

if (mysqli_query($conn, $sql)) {
    header("Location: register.php");
} else {
    echo "Erro ao salvar!";
}
?>
