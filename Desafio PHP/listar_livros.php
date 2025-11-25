<?php
// listar_livros.php

// 1. Inclui a conexão
include 'conexao.php';

// 2. Prepara a busca (se houver)
$where_clause = "";
$busca = "";

if (isset($_GET['busca']) && !empty($_GET['busca'])) {
    $busca = $conexao->real_escape_string($_GET['busca']);
    $where_clause = " WHERE 
        titulo LIKE '%$busca%' OR 
        autor LIKE '%$busca%' OR 
        categoria LIKE '%$busca%'";
}

// 3. Consulta ao Banco de Dados (Ordenado pelos mais novos primeiro)
$sql = "SELECT id, titulo, autor, categoria, ano_publicacao, quantidade FROM livros" . $where_clause . " ORDER BY id DESC";

$resultado = $conexao->query($sql);

// 4. Gera o HTML das linhas
if ($resultado && $resultado->num_rows > 0) {
    while($livro = $resultado->fetch_assoc()) {
        // Cria a estrutura HTML que combina com o seu CSS
        echo '<div class="linha-livro">';
        
        echo '    <div class="col-id">' . htmlspecialchars($livro['id']) . '</div>';
        echo '    <div class="col-titulo">' . htmlspecialchars($livro['titulo']) . '</div>';
        echo '    <div class="col-autor">' . htmlspecialchars($livro['autor']) . '</div>';
        echo '    <div class="col-categoria">' . htmlspecialchars($livro['categoria']) . '</div>';
        echo '    <div class="col-ano">' . htmlspecialchars($livro['ano_publicacao']) . '</div>';
        echo '    <div class="col-qtd">' . htmlspecialchars($livro['quantidade']) . '</div>';
        
        // Botões de Ação
        echo '    <div class="col-acoes">';
        echo '        <a href="editar_livro.php?id=' . $livro['id'] . '" class="acao-editar">Editar</a>';
        echo '        <a href="excluir_livro.php?id=' . $livro['id'] . '" class="acao-excluir" onclick="return confirm(\'Deseja realmente excluir este livro?\')">Excluir</a>';
        echo '    </div>';
        
        echo '</div>'; // Fecha linha-livro
    }
} else {
    // Caso não tenha livros
    echo '<div style="padding: 20px; text-align: center; color: #666;">';
    echo '    Nenhum livro encontrado.';
    echo '</div>';
}

// Fecha conexão
$conexao->close();
?>