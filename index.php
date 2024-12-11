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
    <link rel="icon" href="./imgs/logo/logo1.png" type="image/png">
</head>
<body>
    <header> <!-- Cabeçalho -->
        <div class="container"> <!-- Container -->
            <a id="logo" href="index.php"><img src="./imgs/logo/logo.png" alt="Logo Ingresso Buy"></a>
            <nav> <!-- Menu -->
                <ul>
                    <li> <a href="./login/login.php"> Cadastre-se</a></li>
                    <li><a href="./page_contato/contato.php">Contate-nos</a></li>
                    <li><a href="./sobre_nos.php">Sobre nós</a></li>
                    <li><a href="./melhores_cinemas/formCinema.php">Melhores Cinemas</a></li>
                    <?php 
                    if (isset($_SESSION["login"]) && $_SESSION["login"] == 's') {
                        ?>
                    <li><a href="./page_compra/compra.php">Comprar</a></li>
                    <?php
                    } else{
                        ?>
                        <li><a href="./page_compra/comprarDeslog.html">Comprar</a></li>
                        <?php
                            } ?>
                </ul>
            </nav>
        </div>
    </header>


    <section id="filmes">
        <div class="container">
            <h1>Filmes em Cartaz</h1>

            <section id="redireciona-compra-index">
               <h3>Deseja assistir alguns dos filmes?</h3>
            <p>Clique <a <?php 
                        if (isset($_SESSION["login"]) && $_SESSION["login"] == 's') {
                            ?>href="./page_compra/compra.php"
                            <?php } 
                            else {?>  href="./page_compra/comprarDeslog.html" <?php } ?> >Aqui</a> e compre o ingresso</p> 
            </section>
            

            <div class="wrapper">
                <div class="container_movies">

                    <input type="radio" name="slide" id="c1" >
                    <label for="c1" class="card">
                    <div class="row">
                        <div class="icon">1</div>
                        <div class="description">
                            <h4>Coringa: Delírio a Dois</h4>
                            <p>+16 ‧ 2024 ‧ Musical/Thriller ‧ 2h 19m</p>
                        </div>
                    </div>
                    </label>

                    <input type="radio" name="slide" id="c2" >
                    <label for="c2" class="card">
                    <div class="row">
                        <div class="icon">2</div>
                        <div class="description">
                            <h4>Robô Selvagem</h4>
                            <p>Livre ‧ 2024 ‧ Infantil/Aventura ‧ 1h 42m</p>
                        </div>
                    </div>
                    </label>

                    <input type="radio" name="slide" id="c3" >
                    <label for="c3" class="card">
                    <div class="row">
                        <div class="icon">3</div>
                        <div class="description">
                            <h4>A Forja - O Poder da Transformação</h4>
                            <p>Livre ‧ 2024 ‧ Drama ‧ 2h 3m</p>
                        </div>
                    </div>
                    </label>

                    <input type="radio" name="slide" id="c4" >
                    <label for="c4" class="card">
                    <div class="row">
                        <div class="icon">4</div>
                        <div class="description">
                            <h4>Sorria 2</h4>
                            <p>+18 ‧ 2024 ‧ Terror ‧ 2h 07m</p>
                        </div>
                    </div>
                    </label>

                    <input type="radio" name="slide" id="c5" >
                    <label for="c5" class="card">
                    <div class="row">
                        <div class="icon">5</div>
                        <div class="description">
                            <h4>Terrifer 3</h4>
                            <p>+18 ‧ 2024 ‧ Terror ‧ 2h 05m</p>
                        </div>
                    </div>
                    </label>

                    <input type="radio" name="slide" id="c6" >
                    <label for="c6" class="card">
                    <div class="row">
                        <div class="icon">6</div>
                        <div class="description">
                            <h4>A Garota Da Vez</h4>
                            <p>+16 ‧ 2023 ‧ Thriller/Mistério ‧ 1h 29m</p>
                        </div>
                    </div>
                    </label>

                    <input type="radio" name="slide" id="c7" >
                    <label for="c7" class="card">
                    <div class="row">
                        <div class="icon">7</div>
                        <div class="description">
                            <h4>Zuzubalândia O Filme</h4>
                            <p>Livre ‧ 2024 ‧ Animação ‧ 1 hora</p>
                            </div>
                        </div>
                    </label>

                    <input type="radio" name="slide" id="c8" >
                    <label for="c8" class="card">
                    <div class="row">
                        <div class="icon">8</div>
                        <div class="description">
                            <h4>My Hero Academia - Agora é Sua Vez </h4>
                            <p>+12 ‧ 2024 ‧ Animação/Fantasia ‧ 1h 50m</p>
                        </div>
                    </div>
                    </label>

                    <input type="radio" name="slide" id="c9" >
                    <label for="c9" class="card">
                    <div class="row">
                        <div class="icon">9</div>
                        <div class="description">
                            <h4>Transformers: O Início</h4>
                            <p>Livre ‧ 2024 ‧ Ação/Ficção científica ‧ 1h 44m </p>
                        </div>
                    </div>
                    </label>

                    <input type="radio" name="slide" id="c10" >
                    <label for="c10" class="card">
                    <div class="row">
                        <div class="icon">10</div>
                        <div class="description">
                            <h4>A Substância</h4>
                            <p>+18 ‧ 2024 ‧ Terror/Ficção científica ‧ 2h 20m</p>
                        </div>
                    </div>
                    </label>

                </div>
            </div>
        </div>
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
    