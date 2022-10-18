<?php
require("./config.php");
session_start();

$nome = filter_input(INPUT_POST, 'nome');
$user = filter_input(INPUT_POST, 'user');
$email = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL);

$senha = filter_input(INPUT_POST, 'password');
$senha_criptografada = password_hash($senha, PASSWORD_DEFAULT);
$rsenha = filter_input(INPUT_POST, 'rpassword');


//SESSÕES 

//CAMPOS VAZIOS
if ($nome == "" and $user == "" and $email == "") {
    $_SESSION['aviso!'] =  "<b><font color='red'> Verifique seus campos </font></b>";
    header("Location: ../views/cadastro.php");
    exit;
};

if ($senha != $rsenha) {
    $_SESSION['avisoSenha!'] = "<b><font color='red'> Senhas não coincidem </font></b>";
    header("Location: ../views/cadastro.php");
    exit;
} elseif (strlen($senha) < 8) {
    $_SESSION['avisoComprimentoSenha!'] = "<b><font color='red'> Sua senha deve conter no mínimo 8 caracteres </font></b>";
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
        $sql = $pdo->prepare("INSERT INTO usuario.usuario (nome, user, email, senha) VALUES (:nome, :user, :email, :senha)");
        $sql->bindValue(':nome', $nome);
        $sql->bindValue(':email', $email);
        $sql->bindValue(':user', $user);
        $sql->bindValue(':senha', $senha_criptografada);
        $sql->execute();

        $_SESSION['CadastroSucesso!'] =  "<b><font color='red'> Cadastro efetuado com sucesso </font></b>";
        header('Location: ../views/login.php');
        exit;
    } else {
        $_SESSION['avisoUser!'] =  "<b><font color='red'> Email ou/e usuário já cadastrados </font></b>";
        header("Location: ../views/cadastro.php");
        exit;
    }
} else {
    $_SESSION['aviso!'] = "<b><font color='red'> Verifique seus campos </font></b>";; 
    header("Location: ../views/cadastro.php");
    exit;
};

// FIM GRAVAR DB
