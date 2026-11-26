<?php
include "conecta_mysqli.inc";

$id = isset($_GET['id']) ? (int)$_GET['id'] : (isset($_POST['id']) ? (int)$_POST['id'] : 0);

if ($id <= 0) {
    header("Location: lista.php");
    exit();
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $nome     = $conexao->real_escape_string(trim($_POST['nome'] ?? ''));
    $email    = $conexao->real_escape_string(trim($_POST['email'] ?? ''));
    $telefone = $conexao->real_escape_string(trim($_POST['telefone'] ?? ''));
    $cidade   = $conexao->real_escape_string(trim($_POST['cidade'] ?? ''));
    $estado   = strtoupper($conexao->real_escape_string(trim($_POST['estado'] ?? '')));

    $sqlUpdate = "UPDATE clientes SET nome='$nome', email='$email', telefone='$telefone', cidade='$cidade', estado='$estado' WHERE id=$id";
    $conexao->query($sqlUpdate);
    $conexao->close();

    header("Location: lista.php");
    exit();
}

$busca = $conexao->query("SELECT * FROM clientes WHERE id=$id");
$cliente = $busca ? $busca->fetch_assoc() : null;

if (!$cliente) {
    echo "Cliente não encontrado! <a href='lista.php'>Voltar</a>";
    exit();
}
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Cliente</title>
    <style>
        * { box-sizing: border-box; }
        body { font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif; background: #f0f2f5; padding: 40px 20px; margin: 0; }
        .container { max-width: 500px; margin: 0 auto; background: #fff; padding: 30px; border-radius: 8px; box-shadow: 0 4px 12px rgba(0,0,0,0.1); }
        .campo { margin-bottom: 16px; }
        label { display: block; margin-bottom: 6px; font-weight: bold; color: #555; }
        input[type="text"], input[type="email"] { width: 100%; padding: 10px; border: 1px solid #ccc; border-radius: 4px; }
        .botoes { display: flex; gap: 10px; margin-top: 20px; }
        button, a.btn { flex: 1; padding: 12px; border: none; border-radius: 4px; font-weight: bold; cursor: pointer; text-align: center; text-decoration: none; }
        button { background: #007bff; color: #fff; }
        a.btn { background: #6c757d; color: #fff; line-height: 20px; }
    </style>
</head>
<body>

<div class="container">
    <h2>Editar Cadastro</h2>
    <form action="editar.php" method="POST">
        <input type="hidden" name="id" value="<?= $cliente['id'] ?>">
        
        <div class="campo">
            <label for="nome">Nome:</label>
            <input type="text" id="nome" name="nome" value="<?= htmlspecialchars($cliente['nome']) ?>" required>
        </div>

        <div class="campo">
            <label for="email">E-mail:</label>
            <input type="email" id="email" name="email" value="<?= htmlspecialchars($cliente['email']) ?>" required>
        </div>

        <div class="campo">
            <label for="telefone">Telefone:</label>
            <input type="text" id="telefone" name="telefone" value="<?= htmlspecialchars($cliente['telefone']) ?>">
        </div>

        <div class="campo">
            <label for="cidade">Cidade:</label>
            <input type="text" id="cidade" name="cidade" value="<?= htmlspecialchars($cliente['cidade']) ?>">
        </div>

        <div class="campo">
            <label for="estado">Estado (UF):</label>
            <input type="text" id="estado" name="estado" maxlength="2" value="<?= htmlspecialchars($cliente['estado']) ?>">
        </div>

        <div class="botoes">
            <button type="submit">Salvar Alterações</button>
            <a href="lista.php" class="btn">Cancelar</a>
        </div>
    </form>
</div>

</body>
</html>
