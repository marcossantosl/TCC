<?php
require('config.php');

$id = filter_input(INPUT_GET, 'id', FILTER_VALIDATE_INT); //capturando o id 

if ($id) { //se o id tiver correto

    $sql = $pdo->prepare("DELETE FROM usuario WHERE id = :id"); //query que exclui a linha de registros 
    $sql->bindValue(':id', $id);
    $sql->execute();
}

header('Location: ../views/admin-users.php');
exit;
