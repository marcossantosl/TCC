<!-- mão deleta o user -->

<?php
require('config.php');
require('getusers.php');
$id = $info['id'];

if ($id) {
    $sql = $pdo->prepare("DELETE FROM usuario WHERE id = :id");
    $sql->bindValue(':id', $id);
    $sql->execute();
}

if ($id) {
    $sql = $pdo->prepare("DELETE FROM usuarioimagem WHERE iduser = :id");
    $sql->bindValue(':id', $id);
    $sql->execute();
   
}


$_SESSION['deleteuser'] = "Usuário deletado com sucesso";
header('Location: ../views/login.php');
exit;