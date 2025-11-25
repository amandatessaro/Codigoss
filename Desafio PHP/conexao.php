<?php
// conexao.php

// Definições de conexão
$host = "localhost";
$usuario = "root";     // << Altere se necessário
$senha = "root";           // << Altere se necessário
$banco = "desafio_php_livros"; 
$porta = 3307;

// Estabelece a conexão
$conexao = new mysqli($host, $usuario, $senha, $banco, $porta);

// Verifica a conexão
if ($conexao->connect_error) {
    // Para fins de produção, o "die" não é recomendado, mas é útil em desenvolvimento.
    die("Falha na conexão: " . $conexao->connect_error);
}

// Opcional: Define o conjunto de caracteres para UTF-8
$conexao->set_charset("utf8");

/* * NOTA: Estrutura da Tabela 'livros' (SQL):
 * CREATE TABLE livros (
 * id INT AUTO_INCREMENT PRIMARY KEY,
 * titulo VARCHAR(255) NOT NULL,
 * autor VARCHAR(255) NOT NULL,
 * categoria VARCHAR(100),
 * ano_publicacao INT,
 * quantidade INT DEFAULT 1
 * );
*/

?>