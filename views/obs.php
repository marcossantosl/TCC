<?php
require('../php/config.php');
require('../php/getusers.php');
require('header.php');

if ($_SESSION['id'] === false) {
    header('Location: ../views/login.php');
    exit;
}

?>

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700;900&display=swap" rel="stylesheet" />

    <link rel="stylesheet" href="../assets/css/main.css" />

    <script src="https://kit.fontawesome.com/9884a810af.js" crossorigin="anonymous"></script>

    <title>IFC Guide</title>
</head>

<div class="container">
    <button class="back-button btn btn-dark" onclick="location.href='user.php';">Voltar</button>
    <div class="containerFormMaior">
        <div class="editar-area-especial">
            <form method='POST' action='../php/recebeobs.php'>
                <p class="session-acesso">
                    <?php
                    if (isset($_SESSION['obs'])) {
                        echo $_SESSION['obs'];
                        $_SESSION['obs'] = "";
                    }
                    ?>
                </p>
                <p class="session-acesso">
                    <?php
                    if (isset($_SESSION['obsd'])) {
                        echo $_SESSION['obsd'];
                        $_SESSION['obsd'] = "";
                    }
                    ?>
                </p>
                <h2>ADICIONAR OBSERVAÇÃO</h2>
                <div class="delete-button">
                    <a class="button-aside btn btn-danger" href="../php/deleteobs.php" onclick="return confirm('Tem certeza que deseja limpar suas observações?')">LIMPAR OBSERVAÇÃO</a>
                </div>
                <label>adicione aqui observações, como necessidades especiais suas, reclamações e sugestões para o site, sinta-se livre para expressar sua opinião</label>
                <div class="form-floating w-100 areas">
                    <textarea class="form-control" cols=40 rows="20" name="obs" maxlength="1000"><?php echo $info['obs']; ?></textarea>
                </div>

                <div class="buttons-area">
                    <input class="buttons" type="submit" value="Salvar">
                </div>
            </form>
        </div>
    </div>
</div>
<script type="text/javascript" src="js/main.js"></script>
<script src="https://kit.fontawesome.com/9884a810af.js" crossorigin="anonymous"></script>
</body>

</html>