<?php
session_start();

$_SESSION['id'] = false ;
header('location: ../views/login.php');
exit;
