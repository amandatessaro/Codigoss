<?php
include "connection.php";

$busca = "";
$filtro = "";

if (!empty($_GET["busca"])) {
    $busca = $_GET["busca"];
    $filtro = "WHERE titulo LIKE '%$busca%' OR categoria LIKE '%$busca%'";
}

$sql = "SELECT * FROM livros $filtro ORDER BY titulo ASC";
$res = mysqli_query($conn, $sql);
?>

<link rel="stylesheet" href="login.css">

<div class="container">
    <h1>Livros Cadastrados</h1>

    <form method="GET">
        <input type="text" name="busca" placeholder="Buscar por título ou categoria">
        <button>Buscar</button>
    </form>

    <table>
        <tr>
            <th>ID</th>
            <th>Título</th>
            <th>Autor</th>
            <th>Categoria</th>
            <th>Qtd</th>
        </tr>

        <?php while($row = mysqli_fetch_assoc($res)): ?>
        <tr>
            <td><?= $row["id"] ?></td>
            <td><?= $row["titulo"] ?></td>
            <td><?= $row["autor"] ?></td>
            <td><?= $row["categoria"] ?></td>
            <td><?= $row["quantidade"] ?></td>
        </tr>
        <?php endwhile; ?>
    </table>

    <a class="botao" href="login.php">Voltar</a>
</div>
     