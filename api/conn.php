<?php
$host = 'ep-frosty-union-26727263-pooler.us-east-1.postgres.vercel-storage.com?options=endpoint%3Dep-frosty-union-26727263-pooler';

$port = '5432'; // Porta padrão do PostgreSQL
$dbname = 'verceldb'; // Nome do seu banco de dados
$user = 'default'; // Nome de usuário do banco de dados
$password = 'UMFsvA7JpZy9'; // Senha do banco de dados

// Configuração da conexão com SSL
$pgsql_conn = pg_connect("host=$host port=$port dbname=$dbname user=$user password=$password sslmode=require");

// Verifica a conexão com o banco de dados
if (!$pgsql_conn) {
    die('Erro na conexão com o banco de dados: ' . pg_last_error());
}
?>
