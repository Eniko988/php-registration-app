<?php
session_start();
unset($_SESSION['id']);
header('location:loginForm.php');
exit();
?>
