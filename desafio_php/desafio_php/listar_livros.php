<?php include "connection.php"; ?>
<link rel="stylesheet" href="login.css">

<div class="container flex center column">

    <div class="quadrado">

        <h1 class="fontp size">Livros Cadastrados</h1>

        <?php
        $sql = "SELECT * FROM livros ORDER BY id ASC";
        $resultado = $conn->query($sql);

        if ($resultado->num_rows > 0) {
            echo "<table class='tabela'>
                    <tr>
                        <th>ID</th>
                        <th>Título</th>
                        <th>Autor</th>
                        <th>Ano</th>
                        <th>Gênero</th>
                        <th>Qtd.</th>
                    </tr>";
            
            while ($linha = $resultado->fetch_assoc()) {
                echo "<tr>
                        <td>".$linha['id']."</td>
                        <td>".$linha['titulo']."</td>
                        <td>".$linha['autor']."</td>
                        <td>".$linha['ano_publicacao']."</td>
                        <td>".$linha['categoria']."</td>
                        <td>".$linha['quantidade']."</td>
                    </tr>";
            }

            echo "</table>";
        } else {
            echo "<p class='msg'>Nenhum livro cadastrado ainda.</p>";
        }
        ?>

        <a href="cadastrar_livro.php" class="link-btn" style="margin-top: 20px;">Cadastrar novo livro</a>

    </div>
</div>
