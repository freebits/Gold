<?php
session_start();
if(empty($_SESSION['auth'])) {
  $_SESSION['auth'] = FALSE;
}

if(!$_SESSION['auth']) {
  header('Location: /sign_in.php');
}
?>
