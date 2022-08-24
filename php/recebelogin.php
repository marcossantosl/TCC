<?php
require("./config.php");
session_start();

$user = filter_input(INPUT_POST, 'user', FILTER_SANITIZE_STRING);

$senha = filter_input(INPUT_POST, 'senha');
$email = filter_input(INPUT_POST, 'user');

if (!$user || !$senha) {
    $_SESSION['avisoLogin!'] = 'Você deve digitar sua senha e login';
    header('Location: ../views/login.php');
    exit;
};

$sql = $pdo->prepare("SELECT * FROM usuario.usuario WHERE user = :user or email = :email");
$sql->bindValue(':user', $user);
$sql->bindValue(':email', $email);
$sql->execute();

$senhaCriptografada = $sql->fetch(PDO::FETCH_ASSOC)['senha'];

if (!$sql->rowCount() == 1) {
    $_SESSION['aviso!'] = 'Verifique seus campos';
    header("Location: ../views/login.php");
    exit;
}

if (password_verify($senha, $senhaCriptografada)) {
    $_SESSION['LoginSucesso!'] = 'Login efetuado com sucesso';
    header('Location: ../views/home.php');
    exit;
} else {
    $_SESSION['senha!'] = 'Senha incorreta';
    header("Location: ../views/login.php");
    exit;
}
