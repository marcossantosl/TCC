<?php
require('config.php');

$id = filter_input(INPUT_GET, 'id', FILTER_VALIDATE_INT); 
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
header('Location: ../views/painel-users.php');
exit;
