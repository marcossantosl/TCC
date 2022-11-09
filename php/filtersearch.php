
<?php
require('config.php');
require('getusers.php');


$pesquisa = filter_input(INPUT_POST, 'pesquisar', FILTER_DEFAULT);


if($pesquisa) {
    $sql = $pdo->prepare('SELECT * FROM `locais` WHERE `nome` LIKE :nome');
$sql->bindValue(':nome', $pesquisa);
$sql->execute();

$resultados = $sql->fetchAll(PDO::FETCH_ASSOC); 

$_SESSION['search'] = $resultados;




 header('location: ../views/locais.php').
 exit;
}