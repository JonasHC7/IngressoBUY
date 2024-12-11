<?php
error_reporting(0); //tira o erro
session_start();
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Domine:wght@400..700&family=Protest+Guerrilla&display=swap" rel="stylesheet">
    <link rel="icon" href="./imgs/logo/logo1.png" type="image/png">
</head>
<body>
    <header> <!-- Cabeçalho -->
        <div class="container"> <!-- Container -->
        <a id="logo" href="../index.php"><img src="../imgs/logo/logo.png" alt="Logo Ingresso Buy"></a>
            <nav> <!-- Menu -->
                <ul>
                    <li> <a href="../login/login.php"> Cadastre-se</a></li>
                    <li><a href="../page_contato/contato.php">Contate-nos</a></li>
                    <li><a href="../sobre_nos.php">Sobre nós</a></li>
                    <li><a href="../melhores_cinemas/formCinema.php">Melhores Cinemas</a></li>
                    <?php 
                    if (isset($_SESSION["login"]) && $_SESSION["login"] == 's') {
                        ?>
                    <li><a href="./compra.php">Comprar</a></li>
                    <?php
                    } else{
                        ?>
                        <li><a href="./comprarDeslog.html">Comprar</a></li>
                        <?php
                        } ?>
                </ul>
            </nav>
        </div>
    </header>
<h1 id="confirmada">Compra Confirmada!</h1>
<div id="confirm_compra">
    <?php
    // Verifica a  confirmação de compra da compra
    if (isset($_SESSION['mensagem'])) {
        $mensagem = $_SESSION['mensagem'];
        $filme = $_SESSION['filme'];
        $qtdInteira = $_SESSION['qtdInteira'];
        $qtdEstudante = $_SESSION['qtdEstudante'];
        $totalCompra = $_SESSION['totalCompra'];
    } else{
    // SE não houver dados de confirmação, retorna pro compra.php
        header("Location: compra.php");
        exit();
    }
        echo "<h2>Obrigado por sua compra!</h2>";
        echo "<p>Filme selecionado: <b>$filme</b></p>";
        echo "<p>Quantidade de ingresso(s) inteiro(s): <b>$qtdInteira</b></p>";
        echo "<p>Quantidade de ingresso(s) estudante: <b>$qtdEstudante</b></p>";
        echo "<p> $mensagem </b></p>";
    ?>
</div>
<footer>
    <div class="footer_inf">
        <p>
            &copy; GABRIEL, JÉSSICA, JONAS, KAIO, LARISSA, LETICIA - Todos Direitos Reservados - 2024;
        </p>
    </div>
</footer>
</body>
</html>