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
    <button class="back-button btn btn-dark" onclick="location.href='user.php';">Voltar</button>
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
                        <img alt="foto de perfil" class="img-user w-50 p-3 rounded-circle" src="../assets/images/userimg/<?= isset($photo) ? $photo : 'user-img.png'; ?>">
                    </div>
                    <div class="buttons-area">
                        <a alt="remover foto de perfil "class="button-aside btn btn-danger" href="../php/removerperfil.php" onclick="return confirm('Deseja remover a foto?')">Remover foto</a>
                    </div>
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
                        <button onclick="location.href='obs.php';" class="button-obs btn btn-lg btn-primary">Adicionar reclamação ou observação sobre o sistema</a>
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
</body>

</html>