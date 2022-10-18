
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
$fotouser = $_FILES["fotouser"];

if ($senha !== "" and $rsenha !== "") {
    if ($senha !== $rsenha) {
        $_SESSION['avisoSenha'] = "<b><font color='red'> Senhas não coincidem </font></b>";
        header("location:  ../views/editar-user.php?id=" . $id);
        exit;
    }
    if (strlen($senha) < 8) {
        $_SESSION['tamanhoSenha'] = "<b><font color='red'> Sua senha deve conter no mínimo 8 caracteres </font></b>";
        header("location:  ../views/editar-user.php?id=" . $id);
        exit;
    };
} else {
    $_SESSION['senhaVazio'] = "<b><font color='red'> Por favor, preencha os campos de senha</font></b>";
    header("location:  ../views/editar-user.php?id=" . $id);
    exit;
}


if (isset($fotouser)) {

    if ($fotouser['error']) {
        $_SESSION['errorImg'] = "Falha ao enviar imagem";
    }

    if ($fotouser['size'] > 2097152) {
        $_SESSION['maxSizeImg'] = "Arquivo muito grande, máximo 2MB";
        header("location:  ../views/editar-user.php?id=" . $id);
        exit;
    };
}

if (in_array($fotouser['type'], array('image/jpeg', 'image/jpg', 'image/png'))) {
    $name = 'user-img-' . $id;
    $imgname = $name . '.' . explode('/', $fotouser['type'])[1];
    move_uploaded_file($fotouser['tmp_name'], '../assets/images/userimg/' . $imgname); //selecionando o lugar de onde o arquivo é movido temporariamente, e o movendo depois para a pasta arquivos 
    $sql = $pdo->prepare("INSERT INTO usuarioimagem (iduser, userimagem) VALUES (:iduser, :userimg)");
    $sql->bindValue(':iduser', $id);
    $sql->bindValue(':userimg', $imgname);
    $sql->execute();
} else {
    $_SESSION['extensao'] = "Extensão não permitida";
    header("location:  ../views/editar-user.php?id=" . $id);
};

if ($id & $nome & $email & $user & $senha_criptografada) {
    $sql = $pdo->prepare("UPDATE usuario SET nome = :nome, email = :email, user = :user, senha = :senha WHERE id = :id"); //query que faz uma atualização nos valores
    $sql->bindValue(':nome', $nome);
    $sql->bindValue(':user', $user);
    $sql->bindValue(':email', $email);
    $sql->bindValue(':id', $id);
    $sql->bindValue(':senha', $senha_criptografada);
    $sql->execute();
    $_SESSION['updateuser'] = 'Dados do usuário atualizado com sucesso';
    header('Location: ../views/login.php');
    exit;
} else {
    header("location:  ../views/editar-user.php?id=" . $id);
    exit;
};

?>  