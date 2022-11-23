<?php

require('config.php');
require('getusers.php');

$nome = filter_input(INPUT_POST, 'nome', FILTER_DEFAULT);
$funcao = filter_input(INPUT_POST, 'funcao', FILTER_DEFAULT);
$andar = filter_input(INPUT_POST, 'andar', FILTER_DEFAULT);
$bloco = filter_input(INPUT_POST, 'bloco', FILTER_DEFAULT);
$descricao = filter_input(INPUT_POST, 'descricao', FILTER_DEFAULT);
$funcionarios = filter_input(INPUT_POST, 'funcionarios', FILTER_DEFAULT);
$alunos = filter_input(INPUT_POST, 'alunos', FILTER_DEFAULT);
$rota = filter_input(INPUT_POST, 'rota', FILTER_DEFAULT);

if (!$nome and !$funcao and !$andar and !$bloco and !$descricao and !$funcionarios and !$alunos and !$rota) {
    $_SESSION['avisoLocal'] =  "Verifique seus campos";
    header("Location: ../views/cadastro-local.php");
    exit;
};

if ($nome) {

    $sql = $pdo->prepare("SELECT * FROM locais WHERE nome = :nome");
    $sql->bindValue(':nome', $nome);
    $sql->execute();


    if ($sql->rowCount() == 0) {
        $sql = $pdo->prepare("INSERT INTO locais (nome, funcao, descricaofisica, rota, funcionarios, alunos, idandar, bloco ) 
        VALUES (:nome, :funcao, :descricao, :rota, :funcionarios, :alunos, :id, :bloco)");

        $sql->bindValue(':nome', $nome);
        $sql->bindValue(':funcao', $funcao);
        $sql->bindValue(':descricao', $descricao);
        $sql->bindValue(':rota', $rota);
        $sql->bindValue(':funcionarios', $funcionarios);
        $sql->bindValue(':alunos', $alunos);
        $sql->bindValue(':id', $andar);
        $sql->bindValue(':bloco', $bloco);
        $sql->execute();

        $_SESSION['cadastroLSucesso'] =  "Cadastro dos local efetuado com sucesso";
        header('Location: ../views/painel-locais.php');
        exit;
    } else {
        $_SESSION['avisoL'] =  "Local já cadastrado";
        header("Location: ../views/cadastro-local.php");
        exit;
    }
} else {
    $_SESSION['avisoLocal'] = "Verifique seus campos";
    header("Location: ../views/cadastro-local.php");
    exit;
};
