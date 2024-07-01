<?php
$hostname = 'localhost';
$username = 'root';
$password = '****';
$dbname = '****';

$conexao = mysqli_connect($hostname, $username, $password, $dbname);

if (!$conexao) {
    die('Erro ao conectar ao banco de dados: ' . mysqli_connect_error());
}

echo 'Conexão bem-sucedida!';

mysqli_close($conexao);
?>
