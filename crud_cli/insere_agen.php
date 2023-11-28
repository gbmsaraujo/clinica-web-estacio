<?php

    $exame             = $_POST["exame"];
    $dt_exame          = $_POST["dt_exame"];
    $cpf              = $_POST["cpf"];
    
    

    $con = mysqli_connect("localhost", "root", "", "projeto");

    $fdt_exame 	= implode("-", array_reverse(explode("/", $dt_exame)));

    $sql = "insert into consulta values ";
    $sql .= "($cpf,'$fdt_exame','$exame');";

    $resultado = mysqli_query($con, $sql)or die(mysqli_error($con));

    if($resultado){
        header('Location: ../templates/html/agendamentos.php ');
        mysqli_close($con);
    }else{
        header('Location: ');
        mysqli_close($con);
    }
?>