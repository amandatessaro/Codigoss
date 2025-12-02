<?php 
include "connection.php"; ?>
<link rel="stylesheet" href="login.css">

<div class="container">
    <h1>Cadastrar Livro</h1>

    <?php
    if (isset($_GET["ok"])) {
        echo "<p class='sucesso'>Livro cadastrado com sucesso!</p>";
    }
    ?>

    <form action="salvar_livro.php" method="POST">

        <label>Título:</label>
        <input type="text" name="titulo" required>

        <label>Autor:</label>
        <input type="text" name="autor" required>

        <label>Ano:</label>
        <input type="number" name="ano" required>

        <label>Categoria:</label>
        <select name="categoria" required>
            <option value="">Selecione</option>
            <option>Romance</option>
            <option>Fantasia</option>
            <option>Didático</option>
            <option>Terror</option>
            <option>Biografia</option>
            <option>Ficção</option>
        </select>

        <label>Quantidade:</label>
        <input type="number" name="quantidade" required>

        <button type="submit">Cadastrar</button>
    </form>

    <a class="botao" href="login.php">Voltar</a>
</div>
