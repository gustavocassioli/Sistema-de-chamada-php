<?php
// Cria (ou abre) o banco de dados chamado 'chamada.db'
$db = new PDO('sqlite:chamada.db');

// Cria a tabela 'presenca' se não existir
$db->exec("CREATE TABLE IF NOT EXISTS presenca (
    id INTEGER PRIMARY KEY AUTOINCREMENT,
    ra TEXT NOT NULL,
    nome TEXT NOT NULL,
    ip TEXT NOT NULL,
    dispositivo TEXT NOT NULL,
    data_hora TEXT NOT NULL
)");
?>
