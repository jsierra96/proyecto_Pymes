<?php
session_start();
require_once '../core/confGeneral.php';
unset($_SESSION['user']);
header('Location:'.SERVERURL);
?>
