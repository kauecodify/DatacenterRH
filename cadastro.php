<?php

$hostname = 'localhost';
$username = 'root';
$password = '****';
$dbname = '****';

$conexao = mysqli_connect($hostname, $username, $password, $dbname);

if (!$conexao) {
    die('Erro ao conectar ao banco de dados: ' . mysqli_connect_error());
}

$area = $_POST['area'];
$id = $_POST['id'];
$nome = $_POST['nome'];
$departamento = $_POST['departamento'];
$salario = $_POST['salario'];
$formacao = $_POST['formacao'];
$cargo = $_POST['cargo'];
$data_inicio = $_POST['data_inicio'];
$modo_trabalho = $_POST['modo_trabalho'];
$outras_informacoes = $_POST['outras_informacoes'];

$sql = "INSERT INTO funcionarios (area, id, nome, departamento, salario, formacao, cargo, data_inicio, modo_trabalho, outras_informacoes)
        VALUES ('$area', '$id', '$nome', '$departamento', '$salario', '$formacao', '$cargo', '$data_inicio', '$modo_trabalho', '$outras_informacoes')";

if (mysqli_query($conexao, $sql)) {
    echo 'Dados inseridos com sucesso!';
} else {
    echo 'Erro ao inserir os dados: ' . mysqli_error($conexao);
}

mysqli_close($conexao);
?>
