<?php
include("protection.php")
?>
<!doctype html>
<html lang="en">

<head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS v5.2.1 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">

    <link rel="stylesheet" href="./css/styles.css">

</head>

<body class="fundo-cadastro">
    <header>
        <!-- place navbar here -->
        <nav class="navbar navbar-expand-lg ">
            <div class="container-fluid">
                <a class="navbar-brand" href="clientes.php">
                    Rede Health
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link" aria-current="page" href="lista_agen.php">Agendamentos</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="agendar.php">Agendar Exame</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="logout.php">Sair</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>
    <main class="cadastro-usuario">
        <div style="padding:15px;" id="main" class="container-fluid">
            <div id="top" class="row">
                <div class="col-md-11">
                    <h2>Agendamento de Exames</h2>
                </div>
            </div>

            <br>

            <form action="./insere_agen.php" method="post">
                <!-- 1ª LINHA -->
                <div class="row">
                    <div class="form-group col-md-5">
                        <label for="cpf">CPF</label>
                        <input type="text" class="form-control" name="cpf" required placeholder="Sem Pontuação">
                    </div>

                </div>

                <br>


                <!-- 3° LINHA  -->
                <div class="row">
                    <div class="form-group col-md-6">
                        <label for="exame">Tipo De Exame</label>
                        <div>
                            <select name="exame" class="form-select" aria-label="Default select example">
                                <option value="hemograma">Hemograma Completo</option>
                                <option value="eletrocardiograma">Eletrocardiograma</option>
                                <option value="ressonância">Ressonância Magnética</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group col-md-4">
                        <label for="dt_exame">Data do Exame</label>
                        <input type="date" class="form-control" name="dt_exame" required>
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
    <footer style="position: fixed; bottom: 0;">
        <!-- place footer here -->
        <p>Rede Health &copy; 2023 </p>
    </footer>
    <!-- Bootstrap JavaScript Libraries -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous">
    </script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js" integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz" crossorigin="anonymous">
    </script>
</body>

</html>