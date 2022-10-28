
<?php
require('config.php');
require('getusers.php');

$nome = filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_SPECIAL_CHARS);
$email = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL);
$user = filter_input(INPUT_POST, 'user', FILTER_SANITIZE_SPECIAL_CHARS);
$id = filter_input(INPUT_POST, 'id');
$senha = filter_input(INPUT_POST, 'password');
$rsenha = filter_input(INPUT_POST, 'rpassword');
$senha_criptografada = password_hash($senha, PASSWORD_DEFAULT);


if ($senha !== "" and $rsenha !== "") {
    if ($senha !== $rsenha) {
        $_SESSION['avisoSenha'] = "Senhas não coincidem";
        header("location:  ../views/adm-editar-users.php?id=" . $id);
        exit;
    }
    if (strlen($senha) < 8) {
        $_SESSION['tamanhoSenha'] = "Sua senha deve conter no mínimo 8 caracteres";
        header("location:  ../views/adm-editar-users.php?id=" . $id);
        exit;
    };
} else {
    $_SESSION['senhaVazio'] = "Por favor, preencha os campos de senha";
    header("location:  ../views/adm-editar-users.php?id=" . $id);
    exit;
}

if ($id & $nome & $email & $user & $senha_criptografada) {
    $sql = $pdo->prepare("UPDATE usuario SET nome = :nome, email = :email, user = :user, senha = :senha WHERE id = :id"); //query que faz uma atualização nos valores
    $sql->bindValue(':nome', $nome);
    $sql->bindValue(':user', $user);
    $sql->bindValue(':email', $email);
    $sql->bindValue(':id', $id);
    $sql->bindValue(':senha', $senha_criptografada);
    $sql->execute();

    $_SESSION['updateuser'] = 'Dados do usuário atualizado com sucesso';
    header('Location: ../views/home.php');
    exit;
} else {
    $_SESSION['aviso'] = "Verifique seus campos";
    header("location:  ../views/adm-editar-users.php?id=" . $id);
    exit;
};

?>  