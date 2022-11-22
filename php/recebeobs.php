<?php
require("./config.php");
session_start();

$observacao = filter_input(INPUT_POST, 'obs',FILTER_DEFAULT );
$id = $_SESSION['id'];


// if ($id) {
//     $sql = $pdo->prepare('SELECT * FROM usuario WHERE id = :id');
//     $sql->bindValue('id', $id);
//     $sql->execute();

//     if ($sql->rowCount() > 0) {

//         $user = $sql->fetch(PDO::FETCH_ASSOC);
//     } else {
//         header('Location: login.php');
//         exit;
//     }
// } else {
//     header('Location: login.php');
//     exit;
// }


if ($observacao) {
    $sql = $pdo->prepare("UPDATE usuario SET obs = :obs WHERE id = :id");

    $sql->bindValue(':obs', $observacao);
    $sql->bindValue(':id', $id);
    $sql->execute();

    $_SESSION['obs'] = "Observação atualizada com sucesso";
    header('location:../views/obs.php');
    exit;
}


