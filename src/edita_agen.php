<!doctype html>
<html lang="en">

<head>
    <title>Editar Agendamento</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS v5.2.1 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">

    <link rel="stylesheet" href="./css/styles.css">

</head>

<?php
$con = mysqli_connect("localhost", "root", "", "clinica_web");
$id = (int) $_GET['id'];
$sql = mysqli_query($con, "select * from consulta where id = '" . $id . "';");
$row = mysqli_fetch_array($sql);
?>

<body class="fundo-cadastro" style="background-color: rgb(0, 65, 134);">
    <main class="cadastro-usuario">
        <div style="padding:15px;" id="main" class="container-fluid">
            <div id="top" class="row">
                <div class="col-md-11">
                    <h2>Editar Agendamento</h2>
                </div>
            </div>

            <br>

            <form action="./atualiza_agen.php" method="post">
                <!-- 1ª LINHA -->
                <div class="row">
                    <div class="form-group col-md-2">
                        <label for="id">ID</label>
                        <input readonly type="text" class="form-control" name="id" value="<?php echo $row["id"]; ?>">
                    </div>
                    <div class="form-group col-md-5">
                        <label for="cpf">CPF</label>
                        <input type="text" class="form-control" value="<?php echo $row["cpf_paciente"] ?>" name="cpf" required placeholder="Sem Pontuação">
                    </div>

                </div>

                <br>


                <!-- 3° LINHA  -->
                <div class="row">
                    <div class="form-group col-md-6">
                        <label for="exame">Tipo De Exame</label>
                        <div>
                            <select name="exame" class="form-select" aria-label="Default select example">
                                <option value="hemograma" <?php echo ($row["exame"] == "hemograma") ? 'selected' : ''; ?>>Hemograma Completo</option>
                                <option value="eletrocardiograma" <?php echo ($row["exame"] == "eletrocardiograma") ? 'selected' : ''; ?>>Eletrocardiograma</option>
                                <option value="ressonância" <?php echo ($row["exame"] == "ressonancia") ? 'selected' : ''; ?>>Ressonância Magnética</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group col-md-4">
                        <label for="dt_exame">Data do Exame</label>
                        <input type="date" class="form-control" value="<?php echo $row["data"] ?>" name="dt_exame" required>
                    </div>
                </div>
                <br>
                <hr />
                <br>

                <div id="actions" class="row">
                    <div class="col-md-12">
                        <button type="submit" class="btn btn-primary">Salvar</button>
                        <a href="lista_agen.php" class="btn btn-danger">Cancelar</a>
                    </div>
                </div>
            </form>
        </div>
    </main>
    <!-- Bootstrap JavaScript Libraries -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous">
    </script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js" integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz" crossorigin="anonymous">
    </script>
</body>

</html>