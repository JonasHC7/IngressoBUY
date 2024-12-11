<?php
if(!isset($_POST["usuario"]) || !isset($_POST["senha"])){
    echo "Os dados não chegaram! Volte ao Form";
}else{
    session_start(); //inicia session
    $usuario = $_POST["usuario"];
    $senha = $_POST["senha"];

    if(($usuario === "Paulo" && $senha ==="1234")||$usuario === "Maria" && $senha ==="5678"){
        $_SESSION["login"] = "s";
        $_SESSION["usuario"] = $usuario;
        $_SESSION["erro"] = "";
        header("Location: ../page_compra/compra.php ");
    }else{
        $_SESSION["erro"] = "Usuário ou senha incorreto";
        header("Location: erro.php");
    }
}
