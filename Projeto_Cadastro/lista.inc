<?php
$resultado = $conexao->query("SELECT * FROM clientes ORDER BY id DESC");

echo "<div style='max-width: 800px; margin: 30px auto; font-family: Segoe UI, sans-serif;'>";
echo "<h2 style='text-align:center;'>Clientes Cadastrados</h2>";
echo "<p style='text-align:center;'><a href='cadastro.html' style='background:#28a745; color:#fff; padding:8px 16px; text-decoration:none; border-radius:4px;'>+ Novo Cadastro</a></p>";

if ($resultado && $resultado->num_rows > 0) {
    echo "<table border='1' cellpadding='10' cellspacing='0' style='width:100%; border-collapse:collapse; background:#fff;'>";
    echo "<tr style='background:#f4f4f4;'>
            <th>ID</th>
            <th>Nome</th>
            <th>E-mail</th>
            <th>Telefone</th>
            <th>Cidade</th>
            <th>UF</th>
            <th>Ações</th>
          </tr>";

    while ($linha = $resultado->fetch_assoc()) {
        $id = $linha['id'];
        $nome = htmlspecialchars($linha['nome']);
        $email = htmlspecialchars($linha['email']);
        $telefone = htmlspecialchars($linha['telefone']);
        $cidade = htmlspecialchars($linha['cidade']);
        $estado = htmlspecialchars($linha['estado']);

        echo "<tr>";
        echo "<td>{$id}</td>";
        echo "<td>{$nome}</td>";
        echo "<td>{$email}</td>";
        echo "<td>{$telefone}</td>";
        echo "<td>{$cidade}</td>";
        echo "<td>{$estado}</td>";
        echo "<td align='center'>
                <a href='editar.php?id={$id}' style='color:#007bff; text-decoration:none;'>Editar</a> | 
                <a href='apagar.php?id={$id}' onclick=\"return confirm('Tem certeza que deseja apagar?');\" style='color:#dc3545; text-decoration:none;'>Apagar</a>
              </td>";
        echo "</tr>";
    }
    echo "</table>";
} else {
    echo "<p align='center'>Nenhum cliente cadastrado no momento.</p>";
}

echo "</div>";
?>
