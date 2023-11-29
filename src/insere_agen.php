<?php

    $exame             = $_POST["exame"];
    $dt_exame          = $_POST["dt_exame"];
    $cpf              = $_POST["cpf"];
    
    

    $con = mysqli_connect("localhost", "root", "", "clinica_web");

    $fdt_exame 	= implode("-", array_reverse(explode("/", $dt_exame)));

    $sql = "insert into consulta values ";
    $sql .= "('0','$cpf','$fdt_exame','$exame');";

    $resultado = mysqli_query($con, $sql)or die(mysqli_error($con));

    if($resultado){
        header('Location: ./lista_agen.php ');
        mysqli_close($con);
    }else{
        header('Location: ');
        mysqli_close($con);
    }
?>