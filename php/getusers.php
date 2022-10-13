<?php
session_start();
require('../php/config.php');

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


function getUserById($id)
{
    require('../php/config.php');
    if ($id) {
        $sql = $pdo->prepare('SELECT * FROM usuario WHERE id = :id');
        $sql->bindValue('id', $id);
        $sql->execute();

        if ($sql->rowCount() > 0) {

            $info = $sql->fetch(PDO::FETCH_ASSOC);
            return $info;
        }
    }
}

$sql = $pdo->query("SELECT * FROM andar");
if ($sql->rowCount() > 0) {
    $andares = $sql->fetchAll(PDO::FETCH_ASSOC);
};

if ($id) {
    $sql = $pdo->query("SELECT *, (select andar from andar where id = l.idandar limit 1) as andar FROM locais l ORDER BY l.nome ASC;");
    $sql->execute();

    if ($sql->rowCount() > 0) {
        $local = $sql->fetchAll(PDO::FETCH_ASSOC);
    };
};
