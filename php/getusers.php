<?php
session_start();
require('../php/config.php');
if ($_SESSION['id'] === false) {
    header('Location: ../views/login.php');
    exit;
}

$info = [];
$id = $_SESSION['id'];

if ($id) {
    $sql = $pdo->prepare('SELECT * FROM usuario WHERE id = :id');
    $sql->bindValue('id', $id);
    $sql->execute();

    if ($sql->rowCount() > 0) {

        $info = $sql->fetch(PDO::FETCH_ASSOC);
    }
}

$infoall = [];
$sql = $pdo->query("SELECT * FROM usuario");
if ($sql->rowCount() > 0) {
    $infoall = $sql->fetchAll(PDO::FETCH_ASSOC);
}
