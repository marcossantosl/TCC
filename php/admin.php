<?php
require('config.php');
require('getusers.php');

$id = filter_input(INPUT_GET, 'id', FILTER_VALIDATE_INT); //capturando o id 
if ($info['admuser'] == 0) header('Location: ../views/home.php');
$user = getUserById($id);
if ($id) {
    if ($user['admuser'] == 0) {
        $sql = $pdo->prepare("UPDATE usuario SET admuser = 1 where id = :id");
        $sql->bindValue(':id', $id);
        $sql->execute();
        header('Location: ../views/admin-definir-admins.php');
        exit;
    } else {
        $sql = $pdo->prepare("UPDATE usuario SET admuser = 0 where id = :id");
        $sql->bindValue(':id', $id);
        $sql->execute();
        header('Location: ../views/admin-definir-admins.php');
        exit;
    }
}
