<?php
session_start();
require_once '../core/confGeneral.php';
unset($_SESSION['user']);
unset($_SESSION['pyme']);
header('Location:'.SERVERURL);
?>
