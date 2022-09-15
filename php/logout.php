<?php
session_start();

$_SESSION['LoginSucesso!'] = false;
header('location: ../views/login.php');
