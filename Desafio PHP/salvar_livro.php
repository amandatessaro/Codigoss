<?php
// salvar_livro.php
include 'conexao.php'; // CORRIGIDO

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    // Pega e sanitiza os dados do formulário
    $titulo = $conexao->real_escape_string($_POST['titulo']);
    $autor = $conexao->real_escape_string($_POST['autor']);
    $categoria = $conexao->real_escape_string($_POST['categoria']); // Recebe o valor do <select>
    $ano_publicacao = (int)$_POST['ano_publicacao'];
    $quantidade = (int)$_POST['quantidade'];

    $sql = "INSERT INTO livros (titulo, autor, categoria, ano_publicacao, quantidade) 
            VALUES ('$titulo', '$autor', '$categoria', $ano_publicacao, $quantidade)";

    if ($conexao->query($sql) === TRUE) {
        header("Location: index.php");
    } else {
        header("Location: index.php");
    }
    exit();
}
$conexao->close();
?>