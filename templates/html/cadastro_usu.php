<!doctype html>
<html lang="en">

<head>
  <title>Title</title>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS v5.2.1 -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">

  <link rel="stylesheet" href="../css/styles.css">

</head>

<body class="fundo-cadastro">
  <header>
    <!-- place navbar here -->
    <nav class="navbar navbar-expand-lg ">
            <div class="container-fluid">
                <a class="navbar-brand" href="index.php">
                    Rede Health
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link" aria-current="page" href="index.php">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="quemsomos.php">Quem Somos</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="exames.php">Exames</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="cadastro_usu.php">Cadastrar-se</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="login.php">Entrar</a>
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
          <h2>Cadastro Usuários</h2>
        </div>
      </div>

      <br>

      <form action="../../crud_cli/insere_cli.php" method="post">
        <!-- 1ª LINHA -->
        <div class="row">
          <div class="form-group col-md-12">
            <label for="nome">Nome Completo</label>
            <input type="text" class="form-control" name="nome" required>
          </div>
        </div>

        <br>

        <!-- 2ª LINHA -->
        <div class="row">
          <div class="form-group col-md-5">
            <label for="cpf">CPF</label>
            <input type="text" class="form-control" name="cpf" required placeholder="Sem Pontuação">
          </div>
          <div class="form-group col-md-4">
            <label for="dt_nasc">Data Nascimento</label>
            <input type="date" class="form-control" name="dt_nasc" required>
          </div>
          <div class="form-group col-md-3">
            <label for="sexo">Sexo</label>
            <div>
              <input type="radio" class="form-check-label" name="sexo" value="M"> Masculino
              <br>
              <input type="radio" name="sexo" value="F">Feminino
            </div>
          </div>
        </div>

        <br>


        <!-- 3° LINHA  -->
        <div class="row">
          <div class="form-group col-md-10">
            <label for="logradouro">Logradouro</label>
            <input type="text" name="logradouro" class="form-control" required>
          </div>

          <div class="form-group col-md-2">
            <label for="numero">Número</label>
            <input type="text" name="numero" class="form-control" required>
          </div>
        </div>

        <br>

        <!-- 4° LiNHA -->
        <div class="row">
          <div class="form-group col-md-7">
            <label for="complemento">Complemento</label>
            <input type="text" name="complemento" class="form-control" required>
          </div>
          <div class="form-group col-md-5">
            <label for="bairro">Bairro</label>
            <input type="text" name="bairro" class="form-control" required>
          </div>
        </div>

        <br>

        <!-- 5° LINHA -->
        <div class="row">
          <div class="form-group col-md-8">
            <label for="cidade">Cidade</label>
            <input type="text" name="cidade" class="form-control" required>
          </div>

          <div class="form-group col-md-4">
            <label for="uf">UF</label>
            <input type="text" name="uf" class="form-control" required>
          </div>
        </div>
        <br>

        <!-- 6° LINHA -->
        <div class="row">
          <div class="form-group col-md-6">
            <label for="login">Login</label>
            <input type="text" name="login" class="form-control" required>
          </div>

          <div class="form-group col-md-6">
            <label for="uf">Senha</label>
            <input type="password" name="senha" class="form-control" required>
          </div>
        </div>


        <br>
        <hr />
        <br>

        <div id="actions" class="row">
          <div class="col-md-12">
            <button type="submit" class="btn btn-primary">Salvar</button>
            <a href="index.php" class="btn btn-danger">Cancelar</a>
          </div>
        </div>
      </form>
    </div>
  </main>
  <footer style="">
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