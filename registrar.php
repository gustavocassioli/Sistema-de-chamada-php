<?php
// Conectar ao banco de dados SQLite
require 'database.php';

// Captura os dados do formulário
$ra = $_POST['ra'];
$nome = $_POST['nome'];

// Captura o IP do usuário
$ip = $_SERVER['REMOTE_ADDR'];

// Captura o User-Agent para detectar o dispositivo
$user_agent = $_SERVER['HTTP_USER_AGENT'];
$dispositivo = 'Desconhecido';

// Detecta o dispositivo através do User-Agent
if (strpos($user_agent, 'Android') !== false) {
    $dispositivo = 'Android';
} elseif (strpos($user_agent, 'iPhone') !== false) {
    $dispositivo = 'iPhone';
} elseif (strpos($user_agent, 'iPad') !== false) {
    $dispositivo = 'iPad';
} elseif (strpos($user_agent, 'CrOS') !== false) {
    $dispositivo = 'Chromebook';
} elseif (strpos($user_agent, 'Windows') !== false) {
    $dispositivo = 'Windows';
} elseif (strpos($user_agent, 'Mac') !== false) {
    $dispositivo = 'Mac';
}

// Captura a data e hora atuais
$data_hora = date('Y-m-d H:i:s');

// Insere as informações no banco de dados
$stmt = $db->prepare("INSERT INTO presenca (ra, nome, ip, dispositivo, data_hora) VALUES (:ra, :nome, :ip, :dispositivo, :data_hora)");
$stmt->bindParam(':ra', $ra);
$stmt->bindParam(':nome', $nome);
$stmt->bindParam(':ip', $ip);
$stmt->bindParam(':dispositivo', $dispositivo);
$stmt->bindParam(':data_hora', $data_hora);
$stmt->execute();

// Exibe uma confirmação de sucesso com o endereço IP
echo "<h2>Presença registrada com sucesso!</h2>";
echo "<p>Seu endereço IP é: <strong>$ip</strong></p>";
echo "<p>Você está usando: <strong>$dispositivo</strong></p>";
echo "<p>Data e Hora do Registro: <strong>$data_hora</strong></p>";
echo "<a href='index.php'>Voltar</a>";
?>
