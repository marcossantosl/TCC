<?php
require('config.php');
session_start();


if(!isset($_SESSION["id_user"]) || !isset($_SESSION["user"]))
{
// Usuário não logado! Redireciona para a página de login
header("Location: ../views/login.php");
exit;
}
?>