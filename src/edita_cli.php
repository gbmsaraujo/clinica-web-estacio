<!doctype html>
<html lang="en">

<head>
  <title>Editar Cadastro</title>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS v5.2.1 -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">

  <link rel="stylesheet" href="./css/styles.css">

</head>

<?php
  $con = mysqli_connect("localhost", "root", "", "clinica_web");
	$cpf = (int) $_GET['cpf'];
	$sql = mysqli_query($con, "select * from paciente where cpf = '".$cpf."';");
	$row = mysqli_fetch_array($sql);
?>

<body class="fundo-deit" style="background-color: rgb(0, 65, 134);">
  <header>
    <!-- place navbar here -->
  </header>
  <main class="cadastro-usuario">
    <div style="padding:15px;" id="main" class="container-fluid">
      <div id="top" class="row">
        <div class="col-md-11">
          <h2>Editar Cadastro</h2>
        </div>
      </div>

      <br>

      <form action="./atualiza_cli.php" method="post">
        <!-- 1ª LINHA -->
        <div class="row">
          <div class="form-group col-md-12">
            <label for="nome">Nome Completo</label>
            <input type="text" class="form-control" name="nome" value="<?php echo $row["nome"]?>" required>
          </div>
        </div>

        <br>

        <!-- 2ª LINHA -->
        <div class="row">
          <div class="form-group col-md-5">
            <label for="cpf">CPF</label>
            <input type="text" class="form-control" name="cpf" value="<?php echo $row["cpf"]?>"  required placeholder="Sem Pontuação">
          </div>
          <div class="form-group col-md-4">
            <label for="dt_nasc">Data Nascimento</label>
            <input type="date" class="form-control" value="<?php echo $row["nascimento"]?>"  name="dt_nasc" required>
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
            <input type="text" name="logradouro" value="<?php echo $row["logradouro"]?>" class="form-control" required>
          </div>

          <div class="form-group col-md-2">
            <label for="numero">Número</label>
            <input type="text" name="numero" value="<?php echo $row["numero"]?>" class="form-control" required>
          </div>
        </div>

        <br>

        <!-- 4° LiNHA -->
        <div class="row">
          <div class="form-group col-md-7">
            <label for="complemento">Complemento</label>
            <input type="text" name="complemento" value="<?php echo $row["complemento"]?>" class="form-control" required>
          </div>
          <div class="form-group col-md-5">
            <label for="bairro">Bairro</label>
            <input type="text" name="bairro" value="<?php echo $row["bairro"]?>" class="form-control" required>
          </div>
        </div>

        <br>

        <!-- 5° LINHA -->
        <div class="row">
          <div class="form-group col-md-8">
            <label for="cidade">Cidade</label>
            <input type="text" name="cidade" value="<?php echo $row["cidade"]?>" class="form-control" required>
          </div>

          <div class="form-group col-md-4">
            <label for="uf">UF</label>
            <input type="text" name="uf" value="<?php echo $row["uf"]?>" class="form-control" required>
          </div>
        </div>
        <br>

        <!-- 6° LINHA -->
        <div class="row">
          <div class="form-group col-md-6">
            <label for="login">Email</label>
            <input type="email" name="email" id="" value="<?php echo $row["email"]?>"  class="form-control" required>
          </div>

          <div class="form-group col-md-6">
            <label for="uf">Senha</label>
            <input type="password" name="senha" value="<?php echo $row["senha"]?>" class="form-control" required>
          </div>
        </div>


        <br>
        <hr />
        <br>

        <div id="actions" class="row">
          <div class="col-md-12">
            <button type="submit" class="btn btn-primary">Salvar</button>
            <a href="lista_cli.php" class="btn btn-danger">Cancelar</a>
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