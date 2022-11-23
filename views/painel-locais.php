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

    <title>IFC Guide</title>
</head>

<body>
    <div class="container">
        <p class="session-acesso">
            <?php

            if (isset($_SESSION['cadastroLSucesso'])) {
                echo $_SESSION['cadastroLSucesso'];
                $_SESSION['cadastroLSucesso'] = '';
            }
            if (isset($_SESSION['updatelocal'])) {
                echo $_SESSION['updatelocal'];
                $_SESSION['updatelocal'] = '';
            }
            ?>
        </p>
        <div class="buttons-ares">
            <button class="back-button btn btn-dark" onclick="location.href='gerenciarpaineis.php';">Voltar</button>
            <button class="back-button btn btn-success" onclick="location.href='cadastro-local.php';">Cadastrar local</button>
        </div>
        <table class="table table-responsive table-hover ">
            <thead>
                <tr>
                    <th scope="col">id</th>
                    <th scope="col">Nome</th>
                    <th scope="col">Andar</th>
                    <th scope="col">Região</th>
                    <th scope="col">Descricao</th>
                    <th scope="col">Rota</th>
                    <th scope="col">Funcionários</th>
                    <th scope="col">Alunos</th>
                    <th scope="col">Ações</th>
                    <th scope="col"></th>
                </tr>
            </thead>
            <tbody>
                <?php if (isset($local)) {
                    foreach ($local as $item) : ?>
                        <tr>
                            <td><?php echo $item['id']; ?></td>
                            <td><?php echo $item['nome']; ?></td>
                            <td><?php echo $item['andar']; ?></td>
                            <td><?php echo $item['bloco']; ?></td>
                            <td><?php echo $item['descricaofisica']; ?></td>
                            <td><?php echo $item['rota']; ?></td>
                            <td><?php echo $item['funcionarios']; ?></td>
                            <td><?php echo $item['alunos']; ?></td>
                            <td>
                                <button class="table-button btn btn-primary" onclick="location.href='editar-local.php?id=<?= $item['id']; ?>';">Editar</button>
                                <a class="table-button btn btn-danger" href="../php/admin-deletelocal.php?id=<?= $item['id']; ?>" onclick="return confirm('Tem certeza que deseja excluir?')">Excluir</button>
                                    <!-- Botões para editar e excluir o registro na tabela -->
                            </td>
                        </tr>
            </tbody>
    <?php endforeach;
                }; ?>
        </table>
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