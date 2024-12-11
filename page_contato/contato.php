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



    <h1 id="titulocont">Contate-nos </h1>

        <div class="contact_methods">
                <form method="GET" action="agradecimento.php" class="formContato">
                        <legend>Informações Pessoais</legend>
                        <label for="nome">Nome:</label>
                        <input type="text" id="nome" name="nome" required placeholder="Digite Seu Nome">
                        <label for="email">E-mail:</label>
                        <input type="email" id="email" name="email" required placeholder="Digite Seu E-mail">
                        <label for="telefone">Telefone:</label>
                        <input type="tel" id="telefone" name="telefone" pattern="[0-9]{10,15}" placeholder="Digite Seu Telefone" required>
                        <legend>Informações Adicionais</legend>
                    
                    <section class="radios">
                    <label>Você é nosso cliente?</label>
                    <label><input type="radio" name="cliente" id="op1" value="sim" checked>Sim </label>
                    <label><input type="radio" name="cliente" id="op2" value="nao">Não </label>
                    </section>
                
                    <section class="radios">
                    <label>Tópico do contato:</label>
                    <label><input type="radio" name="contato" id="op1" value="compra" checked>Compra</label>
                    <label><input type="radio" name="contato" id="op2" value="duvidas">Dúvidas Gerais</label>
                    </section>
                    <br>

                    <label for="mensagem" id="txtamens">Sua Mensagem:</label>
                    <textarea id="mensagem" name="mensagem" required placeholder="Sua Mensagem"></textarea>
                    <button type="submit">Enviar</button>
                </form>
            </div>
    </section>

    <footer>
        <div class="footer_inf">
            <p>&copy; GABRIEL, JÉSSICA, KAIO, LARISSA, LETICIA, JONAS - Todos Direitos Reservados - 2024;</p>
        </div>
    </footer>
</body>
</html>