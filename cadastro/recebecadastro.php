<?php
$nome = filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_STRING);
$user = filter_input(INPUT_POST, 'user');
$email = filter_input(INPUT_POST, 'email');
$senha = filter_input(INPUT_POST, 'password');
$rsenha = filter_input(INPUT_POST, 'rpassword');

if ($nome and $user and $email and $senha) {
    echo 'Usuário:  ' . $user;
    echo '<br> Nome: ' . $nome;
    echo '<br> Senha:'  . $senha;
    echo '<br> Email: ' . $email;
} else {
    header("Location: cadastro.php"); //redirecionamento de página
    exit; //para a execução do resto da página
};//verifica o se o campo nome e senha é verdadeiro ou falso, se for ele mostra a senha e o usuário, e se não for ele redireciona com o header para a página index.php