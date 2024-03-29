<?php
require("./config.php");
session_start();

$nome = filter_input(INPUT_POST, 'nome');
$user = filter_input(INPUT_POST, 'user');
$email = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL);

$senha = filter_input(INPUT_POST, 'password');
$senha_criptografada = password_hash($senha, PASSWORD_DEFAULT);
$rsenha = filter_input(INPUT_POST, 'rpassword');
$deficiencia = filter_input(INPUT_POST, 'deficiencia');

//SESSÕES 

//CAMPOS VAZIOS
if ($nome == "" and $user == "" and $email == "") {
    $_SESSION['avisoC'] =  "Verifique seus campos";
    header("Location: ../views/cadastro.php");
    exit;
};

if ($senha != $rsenha) {
    $_SESSION['avisoSenha!'] = "Senhas não coincidem";
    header("Location: ../views/cadastro.php");
    exit;
} elseif (strlen($senha) < 8) {
    $_SESSION['avisoComprimentoSenha!'] = "A senha deve conter no mínimo 8 caracteres";
    header("Location: ../views/cadastro.php");
    exit;
};

//GRAVAR DB

if ($nome and $user and $email) {

    $sql = $pdo->prepare("SELECT * FROM usuario.usuario WHERE user = :user or email = :email");
    $sql->bindValue(':user', $user);
    $sql->bindValue(':email', $email);
    $sql->execute();


    if ($sql->rowCount() == 0) {
        $sql = $pdo->prepare("INSERT INTO usuario.usuario (nome, user, email, senha, defvisual) VALUES (:nome, :user, :email, :senha, :deficiencia)");
        $sql->bindValue(':nome', $nome);
        $sql->bindValue(':email', $email);
        $sql->bindValue(':user', $user);
        $sql->bindValue(':deficiencia', $deficiencia);
        $sql->bindValue(':senha', $senha_criptografada);
        $sql->execute();

        $_SESSION['cadastroSucesso'] =  "Cadastro efetuado com sucesso";
        header('Location: ../views/login.php');
        exit;
    } else {
        $_SESSION['avisoUser'] =  "Email ou/e usuário já cadastrados";
        header("Location: ../views/cadastro.php");
        exit;
    }
} else {
    $_SESSION['avisoC'] = "Verifique seus campos";
    header("Location: ../views/cadastro.php");
    exit;
};

// FIM GRAVAR DB
