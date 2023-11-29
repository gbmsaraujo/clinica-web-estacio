<?php

$usuario = 'root';
$senha = '';
$database = 'clinica_web';
$host = 'localhost';


$mysqli = new mysqli($host, $usuario, $senha, $database);

if ($mysqli->error) {
    die('Falha ao conectar ao DB: ' . $mysqli->error);
}


$sql_code = "SELECT * FROM paciente WHERE email = 'gabriel.araujo@gmail.com'";
$sql_query = $mysqli->query($sql_code) or die('Falha na execução do código SQL: ' . $mysqli->error);

$quantidade = $sql_query->num_rows;

?>