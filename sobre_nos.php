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

    <main id="sobre_nos">
    <h1>Sobre nós</h1>

    <section class="integrantes">
        <article id="gabriel">
            <img src="./imgs/integrantes/gabriel.jpg" alt="Gabriel" srcset="">
            <section class="texto">
                <h4>Gabriel Abreu</h4>
                <p>Desenvolvedor Backend</p>
            </section>
        </article>

        <article id="jessica">
            <img src="./imgs/integrantes/jessica.jpg" alt="Jéssica" srcset="">
            <section class="texto">
                <h4>Jéssica Carvalho</h4>
                <p>Desenvolvedora Frontend</p>
            </section>
        </article>

        <article id="jonas">
            <img src="./imgs/integrantes/jonas.jpg" alt="jonas" srcset="">
            <section class="texto">
                <h4>Jonas da Hora</h4>
                <p>Desenvolvedor Backend</p>
            </section>
        </article>

        <article id="kaio">
            <img src="./imgs/integrantes/kaio.png" alt="Kaio" srcset="">
            <section class="texto">
                <h4>Kaio Pereira</h4>
                <p>Desenvolvedor Backend</p>
            </section>
        </article>

        <article id="larissa">
            <img src="./imgs/integrantes/larissa.jpg" alt="Larissa" srcset="">
            <section class="texto">
                <h4>Larissa Thauane</h4>
                <p>Designer de interfaces e UX</p>
            </section>
        </article>

        <article id="leticia">
            <img src="./imgs/integrantes/leticia.jpg" alt="Leticia" srcset="">
            <section class="texto">
                <h4>Leticia Cândido</h4>
                <p>Desenvolvedora Frontend</p>
            </section>
        </article>
    </section>

    <section class="estruturas">
        <div id="txtestru">
            <h2>Estruturas Utilizadas</h2>
            <p>Para construir o site da IngressoBuy, foram utilizadas estruturas do PHP, como o "IF", para controle de usuários, e o "SWITCH CASE", especialmente na página "Melhores Cinemas", onde são exibidos os melhores cinemas de cada estado do Sudeste do Brasil. Além disso, foram usadas variáveis superglobais, como $_GET e $_POST, para controlar o que é inserido nos formulários do site e Operadores Lógicos presentes na linguagem como "AND" (&&) e "OR" (||). Em uma escala menor, também utilizamos a linguagem JavaScript para criar algumas animações e funções, como as setas de controle na página "Comprar". </p>
        </div>
        <img src="./imgs/img_sn/estruturas.png" alt="estruturas php" >
    </section>

    <section class="sessions">
        <img src="./imgs/img_sn/session.png" alt="session">
        <div id="txtsession">
            <h2>Uso de Sessions</h2>
            <p>No site da IngressoBuy, utilizamos "SESSION" para armazenar dados do usuário após o login. A partir da inicialização de uma sessão, o usuário tem acesso a uma página exclusiva para logados, chamada "Compra.php". Além disso, com o uso de "session_destroy()", o usuário pode se deslogar sem precisar fechar a página do navegador.</p>
        </div>
    </section>

    </main>

    <footer>
        <div class="footer_inf">
            <p>&copy; GABRIEL, JÉSSICA, KAIO, LARISSA, LETICIA, JONAS - Todos Direitos Reservados - 2024;</p>
        </div>
    </footer>
    

</body>
</html>