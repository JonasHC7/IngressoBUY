<?php
error_reporting(0); //tira o erro
session_start();
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ingresse Buy</title>
    <link rel="stylesheet" href="../style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Domine:wght@400..700&family=Protest+Guerrilla&display=swap" rel="stylesheet">
    <link rel="icon" href="../imgs/logo/logo1.png" type="image/png">
</head>
<body>
    <header> <!-- Cabeçalho -->
        <div class="container"> <!-- Container -->
            <a id="logo" href="../index.php"><img src="../imgs/logo/logo.png" alt="Logo Ingresso Buy"></a>
            <nav> <!-- Menu -->
                <ul>
                    <li> <a href="../login/login.php"> Cadastre-se</a></li>
                    <li><a href="./contato.php">Contate-nos</a></li>
                    <li><a href="../sobre_nos.php">Sobre nós</a></li>
                    <li><a href="../melhores_cinemas/formCinema.php">Melhores Cinemas</a></li>
                    
                    <?php 
                    if (isset($_SESSION["login"]) && $_SESSION["login"] == 's') {
                        ?>
                    <li><a href="../page_compra/compra.php">Comprar</a></li>
                    <?php
                    } else{
                        ?>
                        <li><a href="../page_compra/comprarDeslog.html">Comprar</a></li>
                        <?php
                            } ?>
                </ul>
            </nav>
        </div>
    </header>


    <h1 id="tituloagra">Enviado!</h1>
    <div id="agradecimentos">

    <?php

    $nome = $_GET["nome"];
    $email = $_GET["email"];
    $telefone = $_GET["telefone"];

    $cliente='';
    $contato='';

    $mensagem = $_GET["mensagem"];

    if(isset($_GET["cliente"]) || isset( $_GET["contato"])){
    $cliente = $_GET["cliente"];
    $contato = $_GET["contato"];

    echo "<h2> Olá $nome, Obrigado por contar conosco! Veja o que você enviou abaixo: </h2>  ";
    echo "<p> Seu email: <b>$email</b> </p>";
    echo "<p> Seu telefone é : <b> $telefone </b>";
    echo "<p> Você é nosso cliente?: <b>$cliente</b></p>";
    echo "<p> Topico do contato:<b> $contato</b> </p>";
    echo "<p> Sua Mensagem:<b> $mensagem </b></p>";

    }
    ?>
    </div>


<footer>
        <div class="footer_inf">
            <p>
                &copy; GABRIEL, JÉSSICA, KAIO, LARISSA, LETICIA, JONAS - Todos Direitos Reservados - 2024;
            </p>
        </div>
    </footer>
</body>
</html> 