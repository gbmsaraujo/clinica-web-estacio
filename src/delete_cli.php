<?php

$cpf = (int) @$_GET['cpf'];
 
$sql = "delete from aluno where cpf = '$cpf';"; 

$resultado = mysqli_query($con, $sql)or die(mysqli_error($con));

if ($resultado) {
    header('Location: lista_cli.php');
    mysqli_close($con);
}else{
    header('Location: lista_cli.php');
    mysqli_close($con);
}
?>
