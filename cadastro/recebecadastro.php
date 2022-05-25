<?php
session_start();

$nome = filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_STRING);
$user = filter_input(INPUT_POST, 'user');
$email = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL);
$senha = filter_input(INPUT_POST, 'password');
$rsenha = filter_input(INPUT_POST, 'rpassword');

if ($nome and $user and $email and $senha) {
    echo 'Usuário:  ' . $user;
    echo '<br> Nome: ' . $nome;
    echo '<br> Senha:'  . $senha;
    echo '<br> Email: ' . $email;
} else {
    $_SESSION['aviso!'] = 'Verifique seus campos<br><br>';
    header("Location: cadastro.php");
    exit;
};
