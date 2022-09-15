<?php
require('../php/config.php');
$info = [];
$id = filter_input(INPUT_GET, 'id', FILTER_VALIDATE_INT);

if ($id) {
    $sql = $pdo->prepare('SELECT * FROM usuario WHERE id = :id');
    $sql->bindValue('id', $id);
    $sql->execute();

    if ($sql->rowCount() > 0) { //se tiver mais de 0 linhas com o valor

        $info = $sql->fetch(PDO::FETCH_ASSOC);
    } else {
        //header('Location: home.php');
        exit;
    }
} else {
    //header('Location: home.php');
    exit;
}

//nao redireciona pra home
if (!$id) { //se o id não estiver correto
    header("location: editar-user.php?id=" . $id);
    exit;
}
?>

<form method='POST' action='../php/editaruser.php'>
    <h1>Editar usuário</h1>

    <label>
        <input type="hidden" name="id" value="<?= $info['id']; ?>">
        Nome:<br />
        <input type="text" name="nome" value="<?= $info['nome']; ?>">
    </label> <br /><br />
    <label>
        User:<br />
        <input type="text" name="user" value="<?= $info['user']; ?>">
    </label> <br /><br />
    <label>
        Email:<br />
        <input type="email" name="email" value="<?= $info['email']; ?>">
    </label> <br /><br />
    <label>
        Nova senha:<br />
        <input type="password" name="password">
    </label> <br /><br />
    <label>
        Repita a nova senha:<br />
        <input type="password" name="rpassword">
    </label> <br /><br />
    <input type="submit" value="Salvar">
    <!-- onclick="(()=>{ -->
    <!-- if(confirm('Deseja mesmo sair'))location.href='../php/logout.php'; -->
    <!-- })()" -->
    <button class="button" onclick="(() =>{
        if(confirm('Deseja mesmo excluir seu próprio usuário?'))location.href='../php/deleteuser.php?id=<?= $id; ?>';
        })()">Excluir</button>
</form>