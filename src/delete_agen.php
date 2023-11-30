<?php

$con = mysqli_connect("localhost", "root", "", "clinica_web");

$id = (int) @$_GET['id'];
 
$sql = "DELETE FROM consulta WHERE id = '$id';"; 

$resultado = mysqli_query($con, $sql)or die(mysqli_error($con));

if ($resultado) {
    header('Location: lista_agen.php');
    mysqli_close($con);
}else{
    header('Location: lista_agen.php');
    mysqli_close($con);
}
?>
