
<?php
require('config.php');

$nome = filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_SPECIAL_CHARS);
$email = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL);
$user = filter_input(INPUT_POST, 'user', FILTER_SANITIZE_SPECIAL_CHARS);
$id = filter_input(INPUT_POST, 'id');
$senha = filter_input(INPUT_POST, 'password');
$rsenha = filter_input(INPUT_POST, 'rpassword');
$senha_criptografada = password_hash($senha, PASSWORD_DEFAULT);


//se a senha não for vazia ele faz essa verificação tornando ela opcional
if ($senha and $rsenha != "") { // se as senhas forem diferentes de ""
    if ($senha != $rsenha) { //verifica se as senhas sao iguais
        $_SESSION['avisoSenha!'] = "<b><font color='red'> Senhas não coincidem </font></b>";
        header("location:  ../views/editar-user.php?id=" . $id); //volta pra página de editar
        exit;
    } elseif (strlen($senha) < 8) { //verifica se a senha tem no mínimo 8 dígitos
        $_SESSION['avisoSenha!'] = "<b><font color='red'> Sua senha deve conter no mínimo 8 caracteres </font></b>";
        header("location:  ../views/editar-user.php?id=" . $id);
        // header ("location: ../view/Fr ontTab.php?nota=".$notapost."&cnpjpost=".$cnpjpost);
        exit;
    };
}



if ($id & $nome & $email & $user & $senha_criptografada) { //se os dados tiverem corretos ele faz um update no db

    $sql = $pdo->prepare("UPDATE usuario SET nome = :nome, email = :email, user = :user, senha = :senha WHERE id = :id"); //query que faz uma atualização nos valores
    $sql->bindValue(':nome', $nome);
    $sql->bindValue(':user', $user);
    $sql->bindValue(':email', $email);
    $sql->bindValue(':id', $id);
    $sql->bindValue(':senha', $senha_criptografada);
    $sql->execute();
    $_SESSION['updateuser'] = 'Dados do usuário atualizado com sucesso';
    //ele vai pra home independente ódio
    header('Location: ../views/home.php');
    // header("location:  ../views/editar-user.php?id=" . $id);
    exit;
} else {
    header("location:  ../views/editar-user.php?id=" . $id);
    exit;
};

?>  