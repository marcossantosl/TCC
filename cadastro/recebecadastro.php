<?php
require("../config.php");
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
    header("Location: cadastro.php");
    exit;
};

if ($senha == $rsenha) {
} else {
    $_SESSION['avisoSenha!'] = 'Senhas não coincidem<br><br>';
    header("Location: cadastro.php");
    exit;
};
// FIM SESSÕES

//GRAVAR DB

if ($nome and $user and $email and $senha and $rsenha) {

    $sql = $pdo->prepare("SELECT * FROM usuario.usuario WHERE user = :user");
    $sql->bindValue(':user', $user);
    $sql->execute();

    if ($sql->rowCount() === 0) {
        $sql = $pdo->prepare("INSERT INTO usuario.usuario (nomeCompleto, user, email, senha) VALUES (:nome, :user, :email, :senha)");
        $sql->bindValue(':nome', $nome);
        $sql->bindValue(':email', $email);
        $sql->bindValue(':user', $user);
        $sql->bindValue(':senha', $senha);
        $sql->execute();

        header('Location: paginainicial.php');
        exit;
    } else {
        $_SESSION['avisoUser!'] = 'Usuário já cadastrado<br><br>';
        header("Location: cadastro.php");
        exit;
    }
} else {
    $_SESSION['aviso!'];
    header("Location: cadastro.php");
    exit;
};

// FIM GRAVAR DB
