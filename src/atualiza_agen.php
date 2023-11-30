<?php
$id = $_POST['id'];
$exame = $_POST["exame"];
$dt_exame = $_POST["dt_exame"];
$cpf = $_POST["cpf"];

$con = mysqli_connect("localhost", "root", "", "clinica_web");

$fdt_exame = implode("-", array_reverse(explode("/", $dt_exame)));

$sql = "update consulta set ";
$sql .= "cpf_paciente='" . $cpf . "', data='" . $fdt_exame . "', exame='" . $exame . "' ";
$sql .= "where id = '" . $id . "';";

$resultado = mysqli_query($con, $sql) or die(mysqli_error($con));

if ($resultado) {
    header('Location: lista_agen.php');
    mysqli_close($con);
} else {
    header('Location: lista_agen.php');
    mysqli_close($con);
}
?>



