<?php
require("./config.php");
session_start();

$nome = filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_STRING);
$user = filter_input(INPUT_POST, 'user');
$email = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL);
$senha = filter_input(INPUT_POST, 'password');
$rsenha = filter_input(INPUT_POST, 'rpassword');

//SESSÕES 
if ($nome and $user and $email) {
} else {
    $_SESSION['aviso!'] = 'Verifique seus campos<br><br>';
    header("Location: ../views/cadastro.php");
    exit;
};

if ($senha == $rsenha) {
} else {
    $_SESSION['avisoSenha!'] = 'Senhas não coincidem<br><br>';
    header("Location: ../views/cadastro.php");
    exit;
};
// FIM SESSÕES

//GRAVAR DB

if ($user && $email) {

    $sql = $pdo->prepare("SELECT * FROM usuario.usuario WHERE user = :user and email = :email");
    $sql->bindValue(':user', $user);
    $sql->bindValue(':email', $email);
    $sql->execute();

    if ($sql->rowCount() === 0) {
        $sql = $pdo->prepare("INSERT INTO usuario.usuario (nomeCompleto, user, email, senha) VALUES (:nome, :user, :email, :senha)");
        $sql->bindValue(':nome', $nome);
        $sql->bindValue(':email', $email);
        $sql->bindValue(':user', $user);
        $sql->bindValue(':senha', $senha);
        $sql->execute();

        header('Location: ../views/login.php');
        exit;
    } else {
        $_SESSION['avisoUser!'] = 'Email ou/e usuário já cadastrados<br><br>';
        header("Location: ../views/cadastro.php");
        exit;
    }
} else {
    $_SESSION['aviso!'];
    header("Location: ../views/cadastro.php");
    exit;
};

// FIM GRAVAR DB
