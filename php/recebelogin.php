<?php
require("./config.php");
session_start();

$user = filter_input(INPUT_POST, 'user', FILTER_SANITIZE_SPECIAL_CHARS);

$senha = filter_input(INPUT_POST, 'senha');
$email = filter_input(INPUT_POST, 'user');

if (!$user || !$senha) {
    $_SESSION['avisoLogin!'] =  "<b><font color='red'> Você deve digitar sua senha e login </font></b>";
    header('Location: ../views/login.php');
    exit;
};

$sql = $pdo->prepare("SELECT * FROM usuario.usuario WHERE user = :user or email = :email");
$sql->bindValue(':user', $user);
$sql->bindValue(':email', $email);
$sql->execute();



$userObj = $sql->fetch(PDO::FETCH_ASSOC);
$senhaCriptografada = $userObj['senha'];
if (!$sql->rowCount() > 1) {
    $_SESSION['aviso!'] = 'Verifique seus campos';
    header("Location: ../views/login.php");
    exit;
}

$idUser = $userObj['id'];

if (password_verify($senha, $senhaCriptografada)) {
    $_SESSION['id'] = $idUser;
    header('Location: ../views/home.php');
    exit;
} else {
    $_SESSION['senha!'] = "<b><font color='red'> Senha incorreta </font></b>";
    header("Location: ../views/login.php");
    exit;
}
