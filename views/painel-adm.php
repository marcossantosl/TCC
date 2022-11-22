<?php
require('../php/config.php');
require('../php/getusers.php');
require('header.php');

if ($info['admuser'] == 0) {
    header('location: home.php');
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
        <a class="back-button btn btn-dark" href="gerenciarpaineis.php">Voltar</a>
        <table class="table table-responsive table-hover ">
            <thead>
                <tr>
                    <th scope="col">id</th>
                    <th scope="col">Nome</th>
                    <th scope="col">User</th>
                    <th scope="col">Administrador</th>
                    <th scope="col">Ações</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($infoall as $info) : ?>
                    <tr>
                        <td><?php echo $info['id']; ?></td>
                        <td><?php echo $info['nome']; ?></td>
                        <td><?php echo $info['user']; ?></td>
                        <td><?php echo $info['admuser']; ?></td>
                        <td>
                            <a class="btn btn-warning" href="../php/admin.php?id=<?= $info['id']; ?>">Alterar (1 para adm)</a>
                            <!-- Botões para editar e excluir o registro na tabela -->
                        </td>
                    </tr>
            </tbody>
        <?php endforeach; ?>
        </table>
    </div>

</body>

</html>