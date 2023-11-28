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
    $login            = $_POST["login"];
    $senha            = $_POST["senha"];
    

    $con = mysqli_connect("localhost", "root", "", "projeto");

    $fdt_nasc 	= implode("-", array_reverse(explode("/", $dt_nasc)));

    $sql = "insert into usuario values ";
    $sql .= "($cpf,'$nome','$fdt_nasc','$sexo','$logradouro','$num' ,'$comple','$bairro','$cidade','$uf','$login','$senha', '1');";

    $resultado = mysqli_query($con, $sql)or die(mysqli_error($con));

    if($resultado){
        header('Location: ../templates/html/login.php ');
        mysqli_close($con);
    }else{
        header('Location: ');
        mysqli_close($con);
    }
?>