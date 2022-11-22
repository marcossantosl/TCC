<!-- mão deleta o user -->

<?php
require('config.php');
require('getusers.php');
$id = $info['id'];
$obs = null;
if ($id) {
    $sql = $pdo->prepare("UPDATE usuario SET obs =  :obs WHERE id = :id");
    $sql->bindValue(':id', $id);
    $sql->bindValue(':obs', $obs);
    $sql->execute();
    
}

$_SESSION['obsd'] = "Observação deletada com sucesso";
header('location:../views/obs.php');
exit;
header('location: ../views/obs.php');
exit;