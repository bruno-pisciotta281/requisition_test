<?php
// Recupere o Endpoint ID da URL de requisição
$endpoint = $_GET['endpoint'];

// Configuração da conexão com SSL
$pgsql_conn = pg_connect("host=$endpoint.us-east-1.postgres.vercel-storage.com port=5432 dbname=verceldb user=default password=UMFsvA7JpZy9 sslmode=require");

// Verifica a conexão com o banco de dados
if (!$pgsql_conn) {
    die('Erro na conexão com o banco de dados: ' . pg_last_error());
}
?>
