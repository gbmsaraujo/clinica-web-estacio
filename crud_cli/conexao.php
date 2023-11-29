<?php

$usuario = 'gabriel';
$senha = 'Ari&l0515';
$database = 'clinica_web';
$host = 'localhost';


$mysqli = new mysqli($host, $usuario, $senha, $database);

if ($mysqli->error) {
    die('Falha ao conectar ao DB: ' . $mysqli->error);
}


$sql_code = "SELECT * FROM paciente WHERE email = 'gabriel.araujo@gmail.com'";
$sql_query = $mysqli->query($sql_code) or die('Falha na execução do código SQL: ' . $mysqli->error);

$quantidade = $sql_query->num_rows;



// $link = mysqli_connect($host, $usuario, $senha) or die("Unable to Connect to '$host'");

// $test_query = "SHOW TABLES FROM $database";
// $result = mysqli_query($link, $test_query);

// $tblCnt = 0;

// while ($tbl = mysqli_fetch_array($result)) {
//     $tblCnt++;
//     #echo $tbl[0]."<br />\n";
// }

// if (!$tblCnt) {
//     echo "There are no tables<br />\n";
// } else {
//     echo "There are $tblCnt tables<br />\n";
// }
?>