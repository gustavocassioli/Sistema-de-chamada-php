<?php
// Conectar ao banco de dados SQLite
require 'database.php';

// Recuperar os registros do banco de dados
$result = $db->query("SELECT * FROM presenca");

// Exibir os registros em uma tabela HTML
echo "<h2>Registros de Presença</h2>";
echo "<table border='1' cellpadding='10'>";
echo "<tr><th>ID</th><th>RA</th><th>Nome</th><th>IP</th><th>Dispositivo</th><th>Data/Hora</th></tr>";

foreach ($result as $row) {
    echo "<tr>";
    echo "<td>{$row['id']}</td>";
    echo "<td>{$row['ra']}</td>";
    echo "<td>{$row['nome']}</td>";
    echo "<td>{$row['ip']}</td>";
    echo "<td>{$row['dispositivo']}</td>";
    echo "<td>{$row['data_hora']}</td>";
    echo "</tr>";
}

echo "</table>";
?>
