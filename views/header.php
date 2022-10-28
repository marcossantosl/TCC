<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>

    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700;900&display=swap" rel="stylesheet" />

    <link rel="stylesheet" href="../assets/css/main.css" />

    <script src="https://kit.fontawesome.com/9884a810af.js" crossorigin="anonymous"></script>

    <title>Marketing Website</title>
</head>
<div id="header ">
    <div class="container">
        <header>
            <div id="header">
                <div class="container">
                    <nav class="navbar navbar-expand-lg navbar-light ">
                        <a class="navbar-brand" href="#">
                            <img src="../assets/images/logo.svg" class="img-fluid" onclick="window.location.href='home.php'">
                        </a>

                        <button alt="menu" class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                        <div class="collapse navbar-collapse" id="navbarSupportedContent">
                            <ul class="navbar-nav">
                                <!-- verificação de adm -->
                                <?php 
                                if (isset($_SESSION['id']) === false) {
                                    header('Location: ../views/login.php');
                                    exit;
                                }

                                if ($info['admuser'] == 1) { ?>
                                    <li class="nav-item">
                                        <a class="nav-link active" href="painel-locais.php">Painel locais</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link active" href="painel-users.php">Editar usuários</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link active" href="painel-adm.php">Editar administradores</a>
                                    </li>
                                <?php }; ?>
                            </ul>
                    </nav>
                </div>
        </header>
    </div>