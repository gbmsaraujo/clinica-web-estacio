<?php

$con = mysqli_connect("localhost", "root", "", "clinica_web");

$cpf = (int) @$_GET['cpf'];
 
$sql = "DELETE FROM paciente WHERE cpf = '$cpf';"; 

$resultado = mysqli_query($con, $sql)or die(mysqli_error($con));

if ($resultado) {
    header('Location: lista_cli.php');
    mysqli_close($con);
}else{
    header('Location: lista_cli.php');
    mysqli_close($con);
}
?>
