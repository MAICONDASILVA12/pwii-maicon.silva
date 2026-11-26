<?php
// Configurações do banco de dados (padrão XAMPP: root sem senha)
$servidor = "localhost";
$usuario  = "root";
$senha    = "";
$banco    = "cadastro";

$conexao = new mysqli($servidor, $usuario, $senha, $banco);

if ($conexao->connect_error) {
    die("Erro na conexão com o banco de dados: " . $conexao->connect_error);
}

$conexao->set_charset("utf8");
?>
