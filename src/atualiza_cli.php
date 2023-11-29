<?php
$nome             = $_POST["nome"];
$dt_nasc          = $_POST["dt_nasc"];
$sexo             = $_POST["sexo"];
$cpf              = $_POST["cpf"];
$logradouro       = $_POST["logradouro"];
$num              = $_POST["numero"];
$comple           = $_POST["complemento"];
$bairro           = $_POST["bairro"];
$cidade           = $_POST["cidade"];
$uf               = $_POST["uf"];
$email            = $_POST["email"];
$senha            = $_POST["senha"];


$con = mysqli_connect("localhost", "root", "", "clinica_web");

$fdt_nasc     = implode("-", array_reverse(explode("/", $dt_nasc)));

$sql = "update paciente set ";
$sql .= "cpf = '" . $cpf . "', nome='" . $nome . "',nascimento='" . $fdt_nasc . "', sexo='" . $sexo . "',";
$sql .= "logradouro='" . $logradouro . "', numero='" . $num . "', complemento='" . $comple . "', bairro ='" . $bairro . "', cidade = '" . $cidade . "', uf ='" . $uf . "', email = '" . $email . "', senha = '" . $senha . "'";

$sql .= "where cpf = '" . $cpf . "';";

$resultado = mysqli_query($con, $sql) or die(mysqli_error($con));

if ($resultado) {
    header('Location: lista_cli.php');
    mysqli_close($con);
} else {
    header('Location: lista_usu.php');
    mysqli_close($con);
}
