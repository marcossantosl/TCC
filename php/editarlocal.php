
<?php
require('config.php');
require('getusers.php');

$id = filter_input(INPUT_POST, 'id');
$nome = filter_input(INPUT_POST, 'nome', FILTER_DEFAULT);
$funcao = filter_input(INPUT_POST, 'funcao', FILTER_DEFAULT);
$andar = filter_input(INPUT_POST, 'andar', FILTER_DEFAULT);
$bloco = filter_input(INPUT_POST, 'bloco', FILTER_DEFAULT);
$descricao = filter_input(INPUT_POST, 'descricao', FILTER_DEFAULT);
$funcionarios = filter_input(INPUT_POST, 'funcionarios', FILTER_DEFAULT);
$alunos = filter_input(INPUT_POST, 'alunos', FILTER_DEFAULT);
$rota = filter_input(INPUT_POST, 'rota', FILTER_DEFAULT);


if ($id & $nome & $funcao & $andar & $bloco & $descricao & $funcionarios  & $alunos & $rota) {
    $sql = $pdo->prepare("UPDATE locais SET nome = :nome, funcao = :funcao, descricaofisica = :descricao, rota = :rota, bloco = :bloco, idandar = :idandar, alunos = :alunos, funcionarios = :funcionarios WHERE id = :id");
    $sql->bindValue(':nome', $nome);
    $sql->bindValue(':funcao', $funcao);
    $sql->bindValue(':descricao', $descricao);
    $sql->bindValue(':rota', $rota);
    $sql->bindValue(':funcionarios', $funcionarios);
    $sql->bindValue(':alunos', $alunos);
    $sql->bindValue(':idandar', $andar);
    $sql->bindValue(':bloco', $bloco);
    $sql->bindValue(':id', $id);
    $sql->execute();
    $_SESSION['updatelocal'] = 'Local atualizado com sucesso';
    header('Location: ../views/painel-locais.php');
    exit;
} else {
    header("location:  ../views/editar-local.php?id=" . $id);
    exit;
};

?>  