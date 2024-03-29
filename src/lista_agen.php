<?php

include("protection.php")

?>
<!doctype html>
<html lang="en">

<head>
    <title>Lista de Agendamentos</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS v5.2.1 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

    <link rel="stylesheet" href="css/lista_usu.css">

</head>

<body>
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
    <main>
        <div id="main" class="container-fluid">
            <div id="top" class="row">
                <div class="col-md-10">
                    <h2>Agendamentos</h2>
                </div>
            </div>
            <hr />

            <div id="list" class="row">
                <div class="table-responsive col-md-12">
                    <?php
                    $con = mysqli_connect("localhost", "root", "", "clinica_web");


                    $data = mysqli_query($con, "select * from consulta order by id ") or die(mysqli_error($con));


                    echo "<table class='table table-striped' cellspacing='0' cellpading='0'>";
                    echo "<thead><tr>";
                    echo "<td><strong>Id</strong></td>";
                    echo "<td><strong>Exame</strong></td>";
                    echo "<td><strong>Data de Realização</strong></td>";
                    echo "<td class='actions d-flex justify-content-center'><strong>Ações</strong></td>"; 
                    echo "</tr></thead><tbody>";
                    while ($info = mysqli_fetch_array($data)) {
                        echo "<tr>";
                        echo "<td>" . $info['id'] . "</td>";
                        echo "<td>" . $info['exame'] . "</td>";
                        echo "<td>" . date('d/m/Y', strtotime($info['data'])) . "</td>"; //Funções para converter formato da data do MySQL
                        echo "<td class='actions btn-group-sm d-flex justify-content-center'>";
                        echo "<a class='btn btn-warning btn-xs' href=edita_agen.php?id=".$info['id']."> Editar </a>"; 
                        echo "<a href=delete_agen.php?id=".$info['id']." class='btn btn-danger btn-xs'> Excluir </a></td>";
                    }
                    echo "</tr></tbody></table>";
                    ?>
                </div>

            </div>
        </div>
    </main>
    <footer>
        <!-- place footer here -->
    </footer>
    <!-- Bootstrap JavaScript Libraries -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous">
    </script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous">
    </script>
</body>

</html>