<?php
$cpf = (int) @$_GET['cpf'];
 
$sql = "delete from usuario where cpf = '$cpf';"; 

$resultado = mysqli_query($con, $sql)or die(mysqli_error($con));

if ($resultado) {
    header('Location: ');
    mysqli_close($con);
}else{
    header('Location: ');
    mysqli_close($con);
}
?>
