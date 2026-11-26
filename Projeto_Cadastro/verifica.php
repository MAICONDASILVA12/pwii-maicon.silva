<?php
include "conecta_mysqli.inc";

$nome     = trim($_POST['nome'] ?? '');
$email    = trim($_POST['email'] ?? '');
$telefone = trim($_POST['telefone'] ?? '');
$cidade   = trim($_POST['cidade'] ?? '');
$estado   = trim($_POST['estado'] ?? '');

if (empty($nome) || empty($email)) {
    echo "<!DOCTYPE html><html lang='pt-br'><head><meta charset='UTF-8'><title>Erro</title></head><body>";
    echo "<p align='center' style='color:red;'>Preencha todos os campos obrigatórios (Nome e E-mail)!</p>";
    echo "<p align='center'><a href='cadastro.html'>Voltar</a></p>";
    echo "</body></html>";
    exit();
}

$nome_seguro     = $conexao->real_escape_string($nome);
$email_seguro    = $conexao->real_escape_string($email);
$telefone_seguro = $conexao->real_escape_string($telefone);
$cidade_seguro   = $conexao->real_escape_string($cidade);
$estado_seguro   = strtoupper($conexao->real_escape_string($estado));

$sql = "INSERT INTO clientes (nome, email, telefone, cidade, estado) 
        VALUES ('$nome_seguro', '$email_seguro', '$telefone_seguro', '$cidade_seguro', '$estado_seguro')";

if ($conexao->query($sql) === TRUE) {
    echo "<!DOCTYPE html><html lang='pt-br'><head><meta charset='UTF-8'><title>Sucesso</title></head><body>";
    echo "<p align='center' style='color:green; font-size:18px;'>Cadastro realizado com sucesso!</p>";
    echo "<p align='center'><a href='cadastro.html'>Cadastrar outro</a> | <a href='lista.php'>Listar cadastrados</a></p>";
    echo "</body></html>";
} else {
    echo "<!DOCTYPE html><html lang='pt-br'><head><meta charset='UTF-8'><title>Erro</title></head><body>";
    echo "<p align='center' style='color:red;'>Erro ao cadastrar: " . $conexao->error . "</p>";
    echo "<p align='center'><a href='cadastro.html'>Voltar</a></p>";
    echo "</body></html>";
}

$conexao->close();
?>
