<?php
// Captura o IP do usuário ao acessar a página
$ip = $_SERVER['REMOTE_ADDR'];
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chamada Online</title>
    <link rel="stylesheet" href="styles.css"> <!-- Seu CSS externo -->
</head>
<body>
    <div class="container">
        <h1>Chamada Online</h1>
        <p>Seu endereço IP é: <strong><?php echo $ip; ?></strong></p> <!-- Exibe o IP aqui -->
        <form action="registrar.php" method="POST">
            <label for="ra">RA:</label>
            <input type="text" id="ra" name="ra" required>
            
            <label for="nome">Nome Completo:</label>
            <input type="text" id="nome" name="nome" required>
            
            <button type="submit">Registrar Presença</button>
        </form>
    </div>
</body>
</html>
