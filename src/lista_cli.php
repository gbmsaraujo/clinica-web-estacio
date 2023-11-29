<!doctype html>
<html lang="en">

<head>
    <title>Lista de Usuarios</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS v5.2.1 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

    <link rel="stylesheet" href="./css/lista_usu.css">

</head>

<body>
    <header>
        <!-- place navbar here -->
        <nav class="navbar navbar-expand-lg ">
            <div class="container-fluid">
                <a class="navbar-brand" href="#">
                    Rede Health
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link" aria-current="page" href="#">Agendamentos</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="lista_cli.php">Usuarios</a>
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
                    <h2>Usuários</h2>
                </div>
            </div>
            <hr />

            <div id="list" class="row">
                <div class="table-responsive col-md-12">
                    <?php
                    $con = mysqli_connect("localhost", "root", "", "clinica_web");

                    $quantidade = 5;

                    $pagina = (isset($_GET['pagina'])) ? (int)$_GET['pagina'] : 1;
                    $inicio = ($quantidade * $pagina) - $quantidade;

                    $data = mysqli_query($con, "select * from paciente order by cpf asc limit $inicio, $quantidade") or die(mysqli_error($con));


                    echo "<table class='table table-striped' cellspacing='0' cellpading='0'>";
                    echo "<thead><tr>";
                    echo "<td><strong>CPF</strong></td>";
                    echo "<td><strong>Nome</strong></td>";
                    echo "<td><strong>Sexo</strong></td>";
                    echo "<td><strong>Nascimento</strong></td>";
                    echo "</tr></thead><tbody>";
                    while ($info = mysqli_fetch_array($data)) {
                        echo "<tr>";
                        echo "<td>" . $info['cpf'] . "</td>";
                        echo "<td>" . $info['nome'] . "</td>";
                        echo "<td>" . $info['sexo'] . " </td>";
                        echo "<td>" . date('d/m/Y', strtotime($info['nascimento'])) . "</td>"; //Funções para converter formato da data do MySQL
                    }
                    echo "</tr></tbody></table>";
                    ?>
                </div>

            </div>
            <!-- PAGINAÇÃO -->

            <div id="bottom" class="row">
                <div class="col-md-12">
                    <?php
                    $sqlTotal         = "select cpf from usuario;";
                    $qrTotal          = mysqli_query($con, $sqlTotal) or die(mysqli_error($con));
                    $numTotal         = mysqli_num_rows($qrTotal);
                    $totalpagina = (ceil($numTotal / $quantidade) <= 0) ? 1 : ceil($numTotal / $quantidade);

                    $exibir = 3;

                    $anterior = (($pagina - 1) <= 0) ? 1 : $pagina - 1;
                    $posterior = (($pagina + 1) >= $totalpagina) ? $totalpagina : $pagina + 1;

                    echo "<ul class='pagination'>";
                    echo "<li class='page-item'><a class='page-link' href='?page=lista_alu&pagina=1'> Primeira</a></li> ";
                    echo "<li class='page-item'><a class='page-link' href=\"?page=lista_alu&pagina=$anterior\"> Anterior</a></li> ";

                    echo "<li class='page-item'><a class='page-link' href='?page=lista_alu&pagina=" . $pagina . "'><strong>" . $pagina . "</strong></a></li> ";

                    for ($i = $pagina + 1; $i < $pagina + $exibir; $i++) {
                        if ($i <= $totalpagina)
                            echo "<li class='page-item'><a class='page-link' href='?page=lista_alu&pagina=" . $i . "'> " . $i . " </a></li> ";
                    }

                    echo "<li class='page-item'><a class='page-link' href=\"?page=lista_alu&pagina=$posterior\"> Pr&oacute;xima</a></li> ";
                    echo "<li class='page-item'><a class='page-link' href=\"?page=lista_alu&pagina=$totalpagina\"> &Uacute;ltima</a></li></ul>";

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