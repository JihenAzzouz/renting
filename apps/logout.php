<?php
session_start();
setcookie('remember',NULL,-1);
unset($_SESSION['auth']);
$_SESSION['flash']['success'] = 'You are now deconnected';
header('Location: ../views/loginForm.php');