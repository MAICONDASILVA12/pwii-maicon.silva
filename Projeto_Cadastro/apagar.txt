<?php
include "conecta_mysqli.inc";

$id = isset($_GET['id']) ? (int)$_GET['id'] : 0;

if ($id > 0) {
    $conexao->query("DELETE FROM clientes WHERE id = $id");
}

$conexao->close();
header("Location: lista.php");
exit();
?>
