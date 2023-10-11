<?php
// Configurações de conexão com o banco de dados PostgreSQL
$host = 'ep-frosty-union-26727263.us-east-1.postgres.vercel-storage.com';
$port = '5432';
$dbname = 'verceldb';
$user = 'default';
$password = 'UMFsvA7JpZy9';

// Conecta ao banco de dados PostgreSQL
$pgsql_conn = pg_connect("host=$host port=$port dbname=$dbname user=$user password=$password");

// Verifica a conexão com o banco de dados
if (!$pgsql_conn) {
    die('Erro na conexão com o banco de dados: ' . pg_last_error());
}

// Resto do código para receber e inserir os dados aqui...
?>
