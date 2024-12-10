<?php
session_start();

unset($_SESSION['authenticated']);
unset($_SESSION['auth_login_registration']);
$_SESSION['status'] = "You Logged Out Successfully";
header("Location: login.php");

?>