<?php
require('../php/config.php');
require('../php/getusers.php');
require('header.php');

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

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700;900&display=swap" rel="stylesheet" />

    <link rel="stylesheet" href="../assets/css/main.css" />

    <script src="https://kit.fontawesome.com/9884a810af.js" crossorigin="anonymous"></script>

    <title>Marketing Website</title>
</head>

<body>

    <div class="container">
        <a class="back-button btn btn-dark" href="home.php">Voltar</a>
        <div class="imgcenter">
            <div id="menu-area">
                <div class="user-area">
                    <div class="welcome">
                        <p>
                            <?php
                            if (isset($info['nome'])) {
                                echo "<b>Seja bem vindo, " . $info['nome'] . "</b>";
                            }
                            ?>
                        </p>
                    </div>
                    <div class="imgcenter">
                        <img class="img-user w-50 p-3 rounded-circle" src="../assets/images/userimg/<?= isset($photo) ? $photo : 'user-img.png'; ?>">
                    </div>
                    <div class="buttons-area">
                        <a class="button-aside btn btn-danger" href="../php/removerperfil.php" onclick="return confirm('Deseja remover a foto?')">Remover foto</a>
                    </div>
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
                        <a href = "obs.php" class="button-obs btn btn-lg btn-primary">Adicionar reclamação ou observação sobre o sistema</a>
                    </div>
                    <div class="buttons-area">
                        <button onclick="window.location.href  = 'editar-user.php '" class="button-aside btn btn-lg btn-primary">Editar perfil</button>
                        <button class="button-aside btn btn-lg btn-warning" onclick="(()=>{
                        if(confirm('Deseja mesmo sair'))location.href='../php/logout.php';
                    })()">Sair</button>
                    </div>
                    <div class="delete-button">
                        <a class="button-aside btn btn-danger" href="../php/deleteuser.php" onclick="return confirm('Tem certeza que deseja excluir seu próprio usuário?')">Excluir</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/isotope.pkgd.min.js"></script>
    <script src="js/magnify/jquery.magnific-popup.min.js"></script>
    <script type="text/javascript" src="js/main.js"></script>
    <script src="https://kit.fontawesome.com/9884a810af.js" crossorigin="anonymous"></script>
</body>

</html>