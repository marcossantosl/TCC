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

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700;900&display=swap" rel="stylesheet" />

    <link rel="stylesheet" href="../assets/css/main.css" />

    <script src="https://kit.fontawesome.com/9884a810af.js" crossorigin="anonymous"></script>

    <title>Marketing Website</title>
</head>

<div class="containerAcesso">
    <div class="editar-area">
    <form method='POST' action='../php/editaruser.php'>
        <h2>Editar usuário</h2>
        <input type="hidden" name="id" value="<?= $info['id']; ?>">
        <div class="input">
            <i class="fa fa-user-graduate"></i>
            <input type="text" name="nome" placeholder="nome completo" value="<?= $info['nome']; ?>">
        </div>

        <div class="input">
        <i class="fa-regular fa-user"></i>
            <input type="text" name="user" placeholder="usuário" value="<?= $info['user']; ?>">
        </div>

        <div class="input">
        <i class="fa-regular fa-envelope"></i>
            <input type="email" name="email" placeholder="email" value="<?= $info['email']; ?>">
        </div>

        <div class="input">
        <i class="fa fa-lock"></i>
            <input type="password" name="password" placeholder="senha">
        </div>

        <div class="input">
        <i class="fa fa-lock"></i>
            <input type="password" name="rpassword" placeholder="repita a senha">
        </div>
        
        <!-- onclick="(()=>{ -->
        <!-- if(confirm('Deseja mesmo sair'))location.href='../php/logout.php'; -->
        <!-- })()" -->
        <div class="buttons-area">
        <input class="buttons-user" type="submit" value="Salvar">
        <button class="buttonss-user" onclick="(() =>{
        if(confirm('Deseja mesmo excluir seu próprio usuário?'))location.href='../php/deleteuser.php?id=<?= $id; ?>';
        })()">Excluir</button>
        </div>
    </form>
    </div>
</div>