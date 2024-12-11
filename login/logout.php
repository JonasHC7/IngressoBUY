<?php 
session_start();
session_destroy(); //destruindo a sessão
header("Location: ../index.php");
?>