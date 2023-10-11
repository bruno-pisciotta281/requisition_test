<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>teste</h1>
</body>
</html>

<?php
include 'conn.php'; // Inclua o arquivo de conexão

// Verifique se a requisição é do tipo POST
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Dados de exemplo
    $ticket = '108105990';
    $data = '2023-07-20';
    $email = 'rsrenatosilva@hotmail.com';
    $caso = 'Teste 5';
    $status = 'Em aberto';

    // Prepare a consulta para inserir os dados na tabela
    $query = "INSERT INTO tickets (ticket, data, email, caso, status) VALUES ($1, $2, $3, $4, $5)";

    // Execute a consulta
    $result = pg_query_params($pgsql_conn, $query, array($ticket, $data, $email, $caso, $status));

    if ($result) {
        // A inserção foi bem-sucedida
        echo 'Ticket criado com sucesso!';
    } else {
        // Ocorreu um erro ao inserir no banco de dados
        echo 'Erro ao criar o ticket: ' . pg_last_error($pgsql_conn);
    }

    // Feche a conexão com o banco de dados
    pg_close($pgsql_conn);
} else {
    // Se a requisição não for do tipo POST, retorne um erro
    http_response_code(405); // Método não permitido
    echo 'Método não permitido';
}
?>
