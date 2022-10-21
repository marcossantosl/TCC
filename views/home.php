<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700;900&display=swap" rel="stylesheet" />
    <script src="https://kit.fontawesome.com/9884a810af.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="../assets/css/main.css" />

    <title>IFC Guide</title>
</head>

<body>
    <?php
    require('../php/getusers.php');
    require('../php/config.php');
    $sql = $pdo->prepare("SELECT * from usuarioimagem WHERE iduser = :iduser ORDER BY id DESC LIMIT 1");
    $sql->bindValue(':iduser', $id);
    $sql->execute();
    if ($sql->rowCount() > 0) {
        $photo = $sql->fetch(PDO::FETCH_ASSOC);
        $photo = $photo['userimagem'];
    }
    if ($_SESSION['id'] === false) {
        header('Location: ../views/login.php');
        exit;
    }
    ?>
    <!--HEADER-->
    <header>
        <div id="header">
            <div class="container">
                <nav class="navbar navbar-expand-lg navbar-light justify-content-between">
                    <a class="navbar-brand" href="#">
                        <img src="../assets/images/logo.svg" class="img-fluid" />
                    </a>

                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarNav">
                        <ul class="navbar-nav">
                            <!-- verificação de adm -->
                            <?php if ($info['admuser'] == 1) { ?>
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
                            <li class="nav-item">
                                <aside>
                                    <div id='menu-opener'>
                                        <img onclick="menuTogle()" class="img-fluid nav-home-image rounded-circle" src="../assets/images/<?= isset($photo) ? "userimg/" . $photo : 'user.svg'; ?>" />
                                    </div>
                                    <div id="menu-area">
                                        <div class="user-area">
                                            <div class="welcome">
                                                <p>
                                                    <?php
                                                    if (isset($info['nome'])) {
                                                        echo "<b>Seja bem vindo " . $info['nome'] . "</b>";
                                                    }
                                                    ?>
                                                </p>
                                                <img class="user-img" src="../assets/images/notification.svg" class="img-fluid nav-home-image">
                                            </div>
                                            <img class="img-user w-50 p-3 rounded-circle" src="../assets/images/userimg/<?= isset($photo) ? $photo : 'user-img.png'; ?>">
                                            <div class=" dados-user">
                                                <label> Nome: </label>
                                                <p>
                                                    <?php
                                                    if (isset($info['nome'])) {
                                                        echo $info['nome'];
                                                    }
                                                    ?>
                                                </p>
                                                <label> Usuário: </label>
                                                <p>
                                                    <?php
                                                    if (isset($info['user'])) {
                                                        echo $info['user'];
                                                    }
                                                    ?>
                                                </p>
                                                <label> Email: </label>
                                                <p>
                                                    <?php
                                                    if (isset($info['email'])) {
                                                        echo $info['email'];
                                                    }
                                                    ?>
                                                </p>
                                            </div>
                                            <div class="buttons-area">
                                                <button onclick="window.location.href  = 'editar-user.php '" class="button-aside btn btn-lg btn-primary">Editar perfil</button>
                                                <button class="button-aside btn btn-lg btn-warning" onclick="(()=>{
                            if(confirm('Deseja mesmo sair'))location.href='../php/logout.php';
                        })()">Sair</button>
                                            </div>
                                            <div class="user-delete">
                                                <i" aria-hidden="true"></i>
                                                    <a class="button-aside btn btn-danger" href="../php/deleteuser.php" onclick="return confirm('Tem certeza que deseja excluir seu próprio usuário?')">Excluir</a>
                                            </div>
                                </aside>
                            </li>
                        </ul>
                </nav>
                <!-- aside do usuário -->

            </div>
        </div>
    </header>
    <!--HEADER-->

    <!-- FUNÇÕES -->


    <div class="container">
        <p class="session-acesso">
            <?php
            if (isset($_SESSION['updateuser'])) {
                echo $_SESSION['updateuser'];
                $_SESSION['updateuser'] = "";
            }
            ?>
        </p>
        <p class="session-acesso">
            <?php
            if (isset($_SESSION['errorImg'])) {
                echo $_SESSION['errorImg'];
                $_SESSION['errorImg'] = "";
            }
            ?>
        </p>
        <main class="principal-area">
            <div class="locais">
                <img class="locaisImg" onclick="window.location.href = 'andares.php'" src="../assets/images/locais.svg">
                <a> Locais </a>
            </div>
        </main>
    </div>
    <!-- //FUNÇOES -->

    <!--JS-->
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/isotope.pkgd.min.js"></script>
    <script src="js/magnify/jquery.magnific-popup.min.js"></script>
    <script type="text/javascript" src="js/main.js"></script>
    <script src="https://kit.fontawesome.com/9884a810af.js" crossorigin="anonymous"></script>
    <script>
        function menuTogle() {
            let menuArea = document.querySelector('#menu-area');

            if (menuArea.style.width == '0px') {
                menuArea.style.width = '600px';
            } else {
                menuArea.style.width = '0px';
            };
        }; //aside home
    </script>
</body>

</html>