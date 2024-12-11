<?php
error_reporting(0); //tira o erro
session_start();
$mensagem = ""; // Variável para mensagens

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Obtendo dados do formulário
    $filme = $_POST["filme"] ?? "";
    $qtdInteira = isset($_POST["ingresso_inteira"]) ? (int) $_POST["ingresso_inteira"] : 0;
    $qtdEstudante = isset($_POST["ingresso_estudante"]) ? (int) $_POST["ingresso_estudante"] : 0;
    $nomeCartao = $_POST["nome"] ?? "";
    $numeroCartao = $_POST["numero_cartao"] ?? "";
    $validade = $_POST["validade"] ?? "";
    $ccv = $_POST["ccv"] ?? "";
    $bandeira = $_POST["bandeira"] ?? "";

    // Verificar se todos os dados obrigatórios foram preenchidos
    if ($filme && ($qtdInteira > 0 || $qtdEstudante > 0) && $nomeCartao && $numeroCartao && $validade && $ccv && $bandeira) {
        // Calculando o total com base nos tipos de ingresso
        $precoInteira = 50;
        $precoEstudante = 25;
        $totalCompra = ($qtdInteira * $precoInteira) + ($qtdEstudante * $precoEstudante);

        // Salva dados da compra na sessão e redireciona para a nova página
        $_SESSION['mensagem'] = "Valor total de sua compra: R$ $totalCompra";
        $_SESSION['filme'] = $filme;
        $_SESSION['qtdInteira'] = $qtdInteira;
        $_SESSION['qtdEstudante'] = $qtdEstudante;
        $_SESSION['totalCompra'] = $totalCompra;
        header("Location: confirmacao.php");
        exit();
    } else {
        $mensagem = "Por favor, preencha todos os campos obrigatórios.";
    }
}
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


    <div id="mensagemLogou">
    <?php
    if (isset($_SESSION["login"]) && $_SESSION["login"] == 's') {
        ?>
        <h2>
        Bem vindo(a)
        <?php   echo $_SESSION["usuario"]; ?>
        </h2>
        <p>Clique aqui para: <a href="../login/logout.php">Deslogar</a> </p>
    </div>
        <?php
    }

    else {
    ?>

    <?php
        if($_SESSION["erro"] != "") {
            echo $_SESSION["erro"];
        }
        ?>
    <?php
    } //fechando o else la de cima
    ?>

<div class="container">
    <!-- Mensagem de Sucesso ou Erro da Compra -->
    <?php if ($mensagem): ?>
        <div class="mensagem-compra"><?php echo $mensagem; ?></div>
    <?php endif; ?>
</div>

    <!-- sessão de compra -->
    <section class="compra">
        <div class="container">
            
            <article class="container_carrinho">
                <div class="carrinho_slide">
                    <div class="filme_slide fade">
                        <img src="../imgs/imagens/img1.png" alt="Coringa 2 poster" title="Coringa 2 poster">
                    </div>
                    <div class="filme_slide fade">
                        <img src="../imgs/imagens/img2.jpg" alt="Robô Selvagem poster" title="Robô Selvagem poster">
                    </div>
                    <div class="filme_slide fade">
                        <img src="../imgs/imagens/img3.jpg" alt="A Forja poster" title="A Forja poster">
                    </div>
                    <div class="filme_slide fade">
                        <img src="../imgs/imagens/img4.jpg" alt="Sorria 2" title="Sorria 2 poster">
                    </div>
                    <div class="filme_slide fade">
                        <img src="../imgs/imagens/img5.png" alt="Terrifer 3" title="terrifer 3 poster">
                    </div>
                    <div class="filme_slide fade">
                        <img src="../imgs/imagens/img6.jpg" alt="A Garota da Vez poster" title="A Garota da Vez poster">
                    </div>
                    <div class="filme_slide fade">
                        <img src="../imgs/imagens/img6.jpg" alt="Zuzubalândia poster" title="Zuzubalândia poster">
                    </div>
                    <div class="filme_slide fade">
                        <img src="../imgs/imagens/img7.jpg" alt="My Hero Academia poster" title="My Hero Academia poster">
                    </div>
                    <div class="filme_slide fade">
                        <img src="../imgs/imagens/img9.jfif" alt="Transformers: O Início poster" title="Transformers: O Início poster">
                    </div>
                    <div class="filme_slide fade">
                        <img src="../imgs/imagens/img10.jpg" alt="A Substância poster" title="A Substância poster">
                    </div>
                    <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
                    <a class="next" onclick="plusSlides(1)">&#10095;</a>
                </div>
                <div class="compra_form">
                    <form method="POST" action="compra.php">
                        <legend>Escolha seu Filme:</legend>
                        <div class="choose_filme">
                            <label><input type="radio" name="filme" id="filme1" value="Coringa 2">Coringa 2</label>
                            <label><input type="radio" name="filme" id="filme2" value="Robô Selvagem">Robô Selvagem</label>
                            <label><input type="radio" name="filme" id="filme3" value="A Forja">A Forja</label>

                            <label><input type="radio" name="filme" id="filme4" value="Sorria 2">Sorria 2</label>

                            <label><input type="radio" name="filme" id="filme5" value="Terrifer 3">Terrifer 3</label>

                            <label><input type="radio" name="filme" id="filme6" value="A Garota da Vez">A Garota da Vez</label>
                            <label><input type="radio" name="filme" id="filme7" value="Zuzubalândia">Zuzubalândia</label>
                            <label><input type="radio" name="filme" id="filme8" value="My Hero Academia poster">My Hero Academia</label>
                            <label><input type="radio" name="filme" id="filme9" value="Transformers: O Início">Transformers: O Início</label>
                            <label><input type="radio" name="filme" id="filme10" value="A Substância">A Substância</label>
                        </div>
                        <legend>Tipo de Ingresso:</legend>
                        <div class="ingresso_filme">
                            <label>Inteira: R$ 50,00<input type="number" name="ingresso_inteira" id="ingresso" placeholder="Qtd." value="0" min="0" max="5"></label>
                            <label>Estudante: R$ 25,00<input type="number" name="ingresso_estudante" id="ingresso" placeholder="Qtd." value="0" min="0" max="5"></label>
                        </div>
                        <legend>Dados para Compra:</legend>
                        <div class="pagamento_filme">
                            <label>Nome no Cartão:<input type="text" id="nome" name="nome" required placeholder="Digite o Nome Presente no Cartão"></label>
                            <label>Número do Cartão:<input type="text" id="cartao" name="numero_cartao" required maxlength="19" placeholder="1234 5678 9012 3456"></label>
                            <label>Validade:<input type="text" id="validade" name="validade" required maxlength="5" placeholder="MM/AA"></label>
                            <label>CCV:<input type="text" id="ccv" name="ccv" required maxlength="3" placeholder="123"></label>
                        </div>
                        <label>Bandeira do Cartão:</label>
                        <div class="bandeiras">
                                <label>
                                    <input type="radio" name="bandeira" id="Mastercard" value="Mastercard"><img src="../imgs/imagens/mastercard_logo.png" alt="Logo da bandeira Mastercard" class="logo_bandeira">
                                </label>
                                <label>
                                    <input type="radio" name="bandeira" id="Visa" value="Visa"><img src="../imgs/imagens/visa_logo.png" alt="Logo da bandeira Visa" class="logo_bandeira">
                                </label>
                                <label>
                                    <input type="radio" name="bandeira" id="Elo" value="Elo"><img src="../imgs/imagens/elo_logo.png" alt="Logo da bandeira Elo" class="logo_bandeira">
                                </label>
                        </div>
                        <button type="submit">Confirmar Compra</button>
                    </form> 
                </div>
            </article>
        </div>
    </section>
    
    <!-- sessão do rodapé -->
    <footer>
        <div class="footer_inf">
            <p>
                &copy; GABRIEL, JÉSSICA, JONAS, KAIO, LARISSA, LETICIA, JONAS - Todos Direitos Reservados - 2024;
            </p>
        </div>
    </footer>
    <script src="../page_compra/script.js"></script>
</body>
</html> 
