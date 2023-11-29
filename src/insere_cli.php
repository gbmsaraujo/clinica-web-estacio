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

    $fdt_nasc 	= implode("-", array_reverse(explode("/", $dt_nasc)));

    $sql = "insert into paciente values ";
    $sql .= "($cpf,'$nome','$fdt_nasc','$sexo','$logradouro','$num' ,'$comple','$bairro','$cidade','$uf','$email','$senha', '1');";

    $resultado = mysqli_query($con, $sql)or die(mysqli_error($con));

    if($resultado){
        header('Location:login.php ');
        mysqli_close($con);
    }else{
        header('Location: ');
        mysqli_close($con);
    }
?>