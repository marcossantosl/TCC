<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700;900&display=swap" rel="stylesheet" />

    <link rel="stylesheet" href="../assets/css/main.css" />

    <title>Marketing Website</title>
</head>

<body>
    <?php
    session_start();

    if ($_SESSION['id'] === false) {
        header('Location: login.php');
        exit;
    }
    require('../php/config.php');
    $info = [];
    $id = $_SESSION['id'];


    //importante
    if ($id) {
        $sql = $pdo->prepare('SELECT * FROM usuario WHERE id = :id');
        $sql->bindValue('id', $id);
        $sql->execute();

        if ($sql->rowCount() > 0) {

            $info = $sql->fetch(PDO::FETCH_ASSOC);
        }
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

                        <aside>
                            <div id='menu-opener'>
                                <img onclick="menuTogle()" class="img-fluid nav-home-image" src="../assets/images/user.svg" />
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
                                    <img class="img-user w-50 p-3 rounded-circle" src="../assets/images/userimg.png">
                                    <div class="dados-user">
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
                                        <button class="buttons" onclick="(()=>{
                            if(confirm('Deseja mesmo sair'))location.href='../php/logout.php';
                        })()">Sair</button>
                                        <button onclick="window.location.href  = 'editar-user.php?id=<?= $_SESSION['id']; ?>'" class=" buttonss">Editar perfil</button>
                                    </div>

                                </div>
                            </div>
                    </div>
                    </aside>
            </div>
            </nav>
        </div>
        </div>
    </header>
    <!--HEADER-->

    <!-- FUNÇÕES -->


    <div class="container">
        <main class="principal-area">
            <div class="funcao">

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
                menuArea.style.width = '450px';
            } else {
                menuArea.style.width = '0px';
            };
        }; //aside home
    </script>
</body>

</html>