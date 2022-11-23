<?php
require('../php/config.php');
session_start();
if (!isset($_SESSION['id'])) {
  $_SESSION['id'] = false;
}
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
  <!-- JavaScript Bundle with Popper -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
  <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700;900&display=swap" rel="stylesheet" />

  <link rel="stylesheet" href="../assets/css/main.css" />

  <title>Marketing Website</title>
</head>

<body>
  <!--HEADER-->
  <header>
    <div id="header">
      <div class="container">
        <nav class="navbar navbar-expand-lg navbar-light justify-content-between">
          <a class="navbar-brand" href="#">
            <img src="../assets/images/logo.svg" class="img-fluid" onclick="location.href='index.php';" />
          </a>
          <button alt="menu" class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav">

              <?php if ($_SESSION['id'] !== false) { ?>
                <li class="nav-item">
                  <a class="nav-link active" href="home.php">home</a>
                </li>
              <?php } else { ?>
                <li class="nav-item">
                  <a class="nav-link active" href="login.php">login</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="cadastro.php">cadastro</a>
                </li>
              <?php }; ?>
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
  </header>

  <!--HEADER-->

  <!--SLIDER-->
  <div id="slider" class="block" style="margin-bottom: 100px;">
    <div class="container pt-5">
      <div class="row firstRowSlide">
        <div class="col-lg-6 col-md-6 align-self-center mb-md-0 mb-4">
          <h1 class="mb-3">O que é o IFC Guide?</h1>
          <h4>É um site informativo, cujo objetivo é atender a comunidade de alunos do Instituto Federal Catarinense -
            Campus Avançado Sombrio, assistindo os educandos na organização e orientação pelo Campus. Além do mais,
            também se adequa como uma ferramenta assistiva, favorecendo e incluindo os discentes com baixa ou nenhuma
            visão.
          </h4>
        </div>
        <div class="col-lg-6 col-md-6 align-self-center text-center">
          <img src="../assets/images/if1.jpeg" class="img-fluid" style="height: 450px; border-radius: 20px; " />
        </div>
      </div>

      <div class="row">
        <div class="col-lg-6 col-md-6 align-self-center text-center order-md-1 order-2">
          <img src="../assets/images/if2.jpeg" style="height: 450px; border-radius: 20px; "  class="img-fluid" />
        </div>
        <div class="col-lg-6 col-md-6 align-self-center mb-md-0 order-md-2 order-1" >
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
    <div class="container">
      <div class="logo py-4">
        <div class="row">
          <div class="col-md-9 align-self-center text-md-left text-center">
            <img alt="logo ifc-guide"src="../assets/images/logo.svg" class="img-fluid" />
          </div>
          <div class="col-md-3 align-self-center text-right">
            <ul>
              <li>
                <a alt="nossa página do instagram" href="#"><img src="../assets/images/instagram.svg" /></a>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </footer>
  <!--//FOOTER-->

  <!--JS-->
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="js/owl.carousel.min.js"></script>
  <script src="js/isotope.pkgd.min.js"></script>
  <script src="js/magnify/jquery.magnific-popup.min.js"></script>
  <script src="js/main.js"></script>
</body>

</html>