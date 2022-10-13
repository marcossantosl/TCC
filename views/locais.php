<?php
require('../php/config.php');
require('../php/getusers.php');
require('header.php');

$id = filter_input(INPUT_GET, 'id', FILTER_DEFAULT);

$local = [];

if ($id) {
    $sql = $pdo->prepare("SELECT * FROM locais where idandar = :id");
    $sql->bindValue('id', $id);
    $sql->execute();

    if ($sql->rowCount() > 0) {
        $local = $sql->fetchAll(PDO::FETCH_ASSOC);
    };
};

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
            <?php foreach ($local as $lugar) : ?>
                <button class="buttons" href="locais.php?id=<?= $lugar['id']; ?>"><?= $lugar['nome'] ?></button>
            <?php endforeach; ?>
        </div>

</body>

</html>