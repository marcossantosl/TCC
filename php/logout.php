<?php
session_start();

$_SESSION['id'] = false;
$_SESSION['logout'] = "Logout realizado com sucesso";
header('location: ../views/login.php');
exit;
