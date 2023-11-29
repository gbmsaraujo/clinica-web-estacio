<!doctype html>
<html lang="pt-br">

<head>
    <title>Home</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS v5.2.1 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">

    <link rel="stylesheet" href="./css/styles.css">

</head>

<body>
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
    <section class="home-main">
        <h1 class="bem-vindo">Bem-vindo à Rede Health Clínica Médica</h1>
        <p>Na Rede Health, dedicamos nossos esforços para proporcionar um cuidado de saúde de qualidade, utilizando tecnologia de ponta e uma abordagem centrada no paciente. Nossa equipe de profissionais altamente qualificados está aqui para atender às suas necessidades de saúde de maneira abrangente e compassiva.</p>
    </section>

    <section class="carrossel-section">
        <div id="carouselExampleControls" class="carousel slide carrossel" data-bs-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="./images/medicos.jpeg" class="d-block w-100 medicos" alt="...">
                </div>
                <div class="carousel-item">
                    <img src="./images/medica-foda.jpg" class="d-block w-100 medica-foda" alt="...">
                </div>
                <div class="carousel-item">
                    <img src="./images/clinica.jpg" class="d-block w-100 clinica" alt="...">
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </section>

    <section class="home-main">
        <h2 class="compromisso">Compromisso com a Saúde</h2>
        <p>Na Rede Health, comprometemo-nos a oferecer um ambiente acolhedor e serviços de saúde excepcionais. Entendemos a importância da sua saúde e estamos aqui para apoiá-lo em cada passo do caminho.</p>

        <br>

        <h3 class="por-que">Por que Escolher a Rede Health?</h3>
        <ul>
            <li>Profissionais Qualificados: Nossa equipe é composta por profissionais altamente qualificados e dedicados.</li>

            <li>Tecnologia Avançada: Investimos em tecnologia de ponta para garantir resultados precisos e eficientes.</li>

            <li>Atendimento Personalizado: Priorizamos o atendimento personalizado, focado nas necessidades individuais de cada paciente.</li>
        </ul>
    </section>
    <footer>
        <p>Rede Health &copy; 2023 </p>
    </footer>
    <!-- Bootstrap JavaScript Libraries -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous">
    </script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js" integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz" crossorigin="anonymous">
    </script>
</body>

</html>