<?php
require('../php/config.php');
require('../php/getusers.php');
require('header.php');
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700;900&display=swap" rel="stylesheet" />
    <script src="https://kit.fontawesome.com/9884a810af.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="../assets/css/main.css" />
    <script src="../js/main.js"></script>

    <title>IFC Guide</title>
</head>

<body>
    <div class="container">
        <div class="botoes">
            <?php foreach ($andares as $andar) : ?>
                <a class="buttons" href="locais.php?id=<?= $andar['id']; ?>"><?= $andar['andar'] ?></a>
            <?php endforeach; ?>
        </div>

</body>

</html>