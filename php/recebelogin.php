<?php
require("../config.php");
session_start();

$user = filter_input(INPUT_POST, 'user', FILTER_SANITIZE_STRING);
$senha = filter_input(INPUT_POST, 'senha');

if (!$user || !$senha) {
    $_SESSION['avisoLogin!'] = 'Você deve digitar sua senha e login';
    exit;
};

$sql = $pdo->prepare("SELECT * FROM usuario.usuario WHERE user = :user and senha = :senha");
$sql->bindValue(':user', $user);
$sql->bindValue(':senha', $senha);
$sql->execute();


if ($sql->rowCount() == 1) {
    $_SESSION['LoginSucesso!'] = 'Login efetuado com sucesso';
    header('Location: ../views/home.html');
    exit;
} else {
    $_SESSION['aviso!'] = 'Verifique seus campos';
    header("Location: login.php");
    exit;
};
