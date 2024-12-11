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
                    <li><a href="../page_contato/contato.php">Contate-nos</a></li>
                    <li><a href="../sobre_nos.php">Sobre nós</a></li>
                    <li><a href="formCinema.php">Melhores Cinemas</a></li>
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


<section class="conteudo-margem">
    <section class="txtCinema">
    <h1>Melhores cinemas do Sudeste</h1>
    <p>Escolha um estado Sudestino e descubra os 5 melhores Cinemas dele</p>
    </section>

<section class="select-cinema">
    <form action="cinemas.php" method="get" class="formCinema">
        <select id="estado" name="estado">
            <option name="estado" value="ES">Espírito Santo</option>
            <option name="estado" value="MG">Minas Gerais</option>
            <option name="estado" value="PR">Paraná</option>
            <option name="estado" value="RJ">Rio de Janeiro</option>
            <option  name="estado" value="SP">São Paulo</option>
            <option  name="estado" value="def"></option>
        </select>
        <button type="submit" class="btn-select">Enviar</button>
    </form>
</section>
</section>

<footer>
    <div class="footer_inf">
        <p>
            &copy; GABRIEL, JÉSSICA, KAIO, LARISSA, LETICIA, JONAS - Todos Direitos Reservados - 2024;
        </p>
    </div>
</footer>
</body>
</html> 

