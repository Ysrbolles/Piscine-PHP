<?php

include_once 'auth.php';

session_start();
if (!$_SESSION['loggued_on_user']) {
    $_SESSION['loggued_on_user'] = '';
}
if (auth($_GET['login'], $_GET['passwd'])) {
    $_SESSION['loggued_on_user'] = $_GET['login'];
}
echo $_SESSION['loggued_on_user'] ? "OK\n" : "ERROR\n";
?>
