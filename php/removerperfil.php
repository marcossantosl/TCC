<!-- mão deleta o user -->

<?php
require('config.php');
require('getusers.php');
$id = $info['id'];

if ($id) {
    $sql = $pdo->prepare("DELETE FROM usuarioimagem WHERE iduser = :id");
    $sql->bindValue(':id', $id);
    $sql->execute();
   
}


header('Location: ../views/user.php');
exit;