<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />

  <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700;900&display=swap" rel="stylesheet" />

  <link rel="stylesheet" href="css/main.css" />

  <title>Marketing Website</title>
</head>

<body>
  <!--HEADER-->
  <div id="header">
    <div class="container containerHeader">
      <nav class="navbar navbar-expand-lg navbar-light justify-content-between">
        <a class="navbar-brand" href="#">
          <img src="assets/logo.svg" class="img-fluid" />
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
          aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav">
            <li class="nav-item">
              <a class="nav-link active" href="login.php">login</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="../cadastro/cadastro.php">cadastro</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">sobre</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">contato</a>
            </li>
          </ul>
        </div>
      </nav>
    </div>
  </div>
  <!--HEADER-->

  <!--SLIDER-->
  <div id="slider" class="block">
    <div class="container pt-5">
      <div class="row firstRowSlide">
        <div class="col-lg-4 col-md-6 align-self-center mb-md-0 mb-4">
          <h1 class="mb-3">O que é o IFC Guide?</h1>
          <h4>É um site informativo, cujo objetivo é atender a comunidade de alunos do Instituto Federal Catarinense -
            Campus Avançado Sombrio, assistindo os educandos na organização e orientação pelo Campus. Além do mais,
            também se adequa como uma ferramenta assistiva, favorecendo e incluindo os discentes com baixa ou nenhuma
            visão.
          </h4>
        </div>
        <div class="col-lg-8 col-md-6 align-self-center text-center">
          <img src="./assets/destaque1.svg" class="img-fluid" />
        </div>
      </div>

      <div class="row">
        <div class="col-lg-7 col-md-6 align-self-center text-center order-md-1 order-2">
          <img src="./assets/destaque1.svg" class="img-fluid" />
        </div>
        <div class="col-lg-5 col-md-6 align-self-center mb-md-0 order-md-2 order-1">
          <h1 class="mb-3">Quais funções vão estar disponíveis?</h1>
          <h4>Tem por finalidade fornecer horários atualizados dos cursos integrados, notificações sobre as aulas e
            atualizações, calendários acadêmicos, regras e normas do instituto, cronogramas personalizados para aqueles
            alunos que não cursam a quantidade habitual de matérias, meios de contato de funcionários especializados e
            professores, também traz soluções em questão da noção espacial, com dados importantes referente sobre
            setores, salas e laboratórios da instituição.
          </h4>
        </div>
      </div>
    </div>
  </div>
  <!--//SLIDER-->

  <!--FOOTER-->
  <footer id="contato">
    <div class="container containerFooter">
      <div class="logo py-4">
        <div class="row">
          <div class="col-md-9 align-self-center text-md-left text-center">
            <img src="assets/logo.svg" class="img-fluid" />
          </div>
          <div class="col-md-3 align-self-center text-right">
            <ul>
              <li>
                <a href="#"><img src="assets/discord.svg" /></a>
              </li>
              <li>
                <a href="#"><img src="assets/twitter.svg" /></a>
              </li>
              <li>
                <a href="#"><img src="assets/instagram.svg" /></a>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </footer>
  <!--//FOOTER-->
  <!--JS-->
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
    integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo"
    crossorigin="anonymous"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="js/owl.carousel.min.js"></script>
  <script src="js/isotope.pkgd.min.js"></script>
  <script src="js/magnify/jquery.magnific-popup.min.js"></script>
  <script src="js/main.js"></script>
</body>

</html>