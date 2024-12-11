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
    <link rel="stylesheet" href="./style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Domine:wght@400..700&family=Protest+Guerrilla&display=swap" rel="stylesheet">
</head>
<body>
    <header> <!-- Cabeçalho -->
        <div class="container"> <!-- Container -->
            <a id="logo" href="index.php"><img src="./logo/logo.png" alt="Logo Ingresso Buy"></a>
            <nav> <!-- Menu -->
                <ul>
                    <li> <a href="./login.php"> Cadastre-se</a></li>
                    <li><a href="./contato.php">Contate-nos</a></li>
                    <li><a href="./sobre_nos.php">Sobre nós</a></li>
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
    
    <section id="filmes">
        <div class="container">
                
            </div>
        </div>
    </section>
    <footer>
        <div class="footer_inf">
            <p>
                &copy; GABRIEL, JÉSSICA, KAIO, LARISSA, LETICIA - Todos Direitos Reservados - 2024;
            </p>
        </div>
    </footer>
</body>
</html> 
    