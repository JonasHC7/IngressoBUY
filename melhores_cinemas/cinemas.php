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
                    <li><a href="./formCinema.php">Melhores Cinemas</a></li>
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

    <section class="lista-cinemas">

<?php
$estado ='';

if(isset($_GET["estado"])){
 $estado = $_GET["estado"];

switch($estado){
    case 'MG':
        echo"<h1>Minas Gerais</h1>";
        echo "<h2>Cine Belas Artes (Belo Horizonte)</h2>
        <p>Localizado no bairro Savassi, em BH, o Cine Belas Artes é um dos cinemas mais tradicionais de Minas. Famoso por exibir filmes de arte, cults e independentes, é ideal para quem busca uma programação diferenciada.</p>";

        echo"<h2>Cine Theatro Brasil Vallourec (Belo Horizonte)</h2>
        <p>Situado em um dos edifícios mais icônicos de Belo Horizonte, o Cine Theatro Brasil é um centro cultural que oferece uma experiência de cinema em um ambiente histórico. Além de exibições de filmes, é palco de peças de teatro e exposições artísticas.</p>";

        echo"<h2>Cine Santa Tereza (Belo Horizonte)</h2>
        <p>Localizado no bairro Santa Tereza, este cinema é dedicado à exibição de filmes nacionais e internacionais e conta com uma programação gratuita ou a preços populares. Tem uma atmosfera acolhedora e está sempre promovendo eventos culturais.</p>";

        echo"<h2>Cinemark Pátio Savassi (Belo Horizonte)</h2>
        <p>Com salas confortáveis e tecnologia de ponta, o Cinemark do Pátio Savassi é um dos melhores cinemas para assistir aos lançamentos de Hollywood e grandes produções. Oferece também sessões em 3D e XD.</p>";

        echo"<h2>Cineart BH Shopping (Belo Horizonte)</h2>
        <p>Um dos cinemas mais sofisticados da capital mineira, localizado no BH Shopping. As salas são confortáveis, com opções VIP e tecnologia de som e imagem de alta qualidade.</p>";
        break;

    case 'SP':
        echo"<h1>São Paulo</h1>";
        echo '<h2>Cine Petra Belas Artes</h2>';
        echo '<p>Localizado na Consolação, o Cine Petra Belas Artes é um cinema icônico e de tradição, famoso por sua programação de filmes clássicos, cults e independentes. O espaço é charmoso e atrai cinéfilos de todas as idades.</p>';

        echo '<h2>Cinemark Iguatemi</h2>';
        echo '<p>O Cinemark do Shopping Iguatemi é conhecido pelo conforto e tecnologia avançada. Com opções de salas VIP e projeção de alta qualidade, é ideal para quem busca uma experiência premium para assistir aos últimos lançamentos de Hollywood.</p>';

        echo '<h2>Espaço Itaú de Cinema - Augusta</h2>';
        echo '<p>Localizado na Rua Augusta, esse cinema é famoso por exibir produções independentes e internacionais. O Espaço Itaú é uma referência para amantes do cinema de arte, além de contar com uma estrutura moderna e aconchegante.</p>';

        echo '<h2>CineSala</h2>';
        echo '<p>No bairro de Pinheiros, o CineSala oferece uma experiência intimista, com poltronas confortáveis e um ambiente acolhedor. Conhecido por sua programação diversificada, exibe desde lançamentos até filmes de diretores renomados e clássicos.</p>';

        echo '<h2>Cinépolis JK Iguatemi</h2>';
        echo '<p>O Cinépolis JK Iguatemi é famoso pelas suas salas VIP e pela qualidade de imagem e som. É uma ótima opção para quem deseja conforto e uma experiência imersiva, especialmente nas salas com tecnologia 4DX e IMAX.</p>';
        break;

    case 'ES':
        echo"<h1>Espirito Santo</h1>";
        echo '<h2>Cinemark Vitória (Shopping Vitória)</h2>';
        echo '<p>Localizado no Shopping Vitória, o Cinemark é um dos mais modernos do estado. Oferece salas confortáveis e tecnologia de ponta, incluindo opções de salas XD, para uma experiência de som e imagem superiores.</p>';
        
        echo '<h2>Cinesystem Boulevard (Vila Velha)</h2>';
        echo '<p>No Boulevard Shopping, em Vila Velha, o Cinesystem oferece uma experiência diferenciada com salas modernas, incluindo opções VIP, e uma programação variada que inclui os últimos lançamentos e produções nacionais.</p>';
        
        echo '<h2>Cine Jardins (Vitória)</h2>';
        echo '<p>O Cine Jardins, em Vitória, é famoso por exibir filmes alternativos, independentes e nacionais. É uma ótima escolha para quem procura uma programação diferenciada, em um ambiente acolhedor e charmoso.</p>';
        
        echo '<h2>Kinoplex Praia da Costa (Vila Velha)</h2>';
        echo '<p>Localizado no Shopping Praia da Costa, o Kinoplex oferece conforto e uma programação variada, com os principais lançamentos de Hollywood e produções brasileiras. Conta com poltronas confortáveis e salas bem equipadas.</p>';
        
        echo '<h2>Moviecom Norte Sul (Serra)</h2>';
        echo '<p>Localizado no Shopping Norte Sul, em Serra, o Moviecom exibe uma seleção de filmes populares e lançamentos recentes, proporcionando uma experiência de cinema de qualidade e com acessibilidade para moradores da região.</p>';
        break;

    case 'PR':
        echo"<h1>Paraná</h1>";
        echo '<h2>Cine Passeio (Curitiba)</h2>';
        echo '<p>Localizado no centro histórico de Curitiba, o Cine Passeio é um cinema cultural que exibe filmes independentes e alternativos. O espaço é moderno e conta com uma programação voltada para o cinema de arte e eventos culturais.</p>';
        
        echo '<h2>Cinemark Mueller (Curitiba)</h2>';
        echo '<p>Situado no Shopping Mueller, o Cinemark oferece salas com tecnologia de ponta e conforto, incluindo sessões em XD. É um dos melhores lugares em Curitiba para assistir aos grandes lançamentos de Hollywood com alta qualidade de som e imagem.</p>';
        
        echo '<h2>IMAX Palladium (Curitiba)</h2>';
        echo '<p>O IMAX Palladium proporciona uma experiência cinematográfica imersiva, com telas gigantes e som de alta qualidade. Localizado no Shopping Palladium, é ideal para quem busca uma experiência premium ao assistir aos últimos lançamentos.</p>';
        
        echo '<h2>Cineplus Jardim das Américas (Curitiba)</h2>';
        echo '<p>Este cinema conta com salas confortáveis e uma programação variada, incluindo lançamentos e filmes nacionais. É uma ótima opção para quem procura uma experiência de cinema agradável fora dos grandes centros.</p>';
        
        echo '<h2>Cine Araújo - Catuaí Shopping (Londrina)</h2>';
        echo '<p>Em Londrina, o Cine Araújo no Catuaí Shopping é um dos mais populares. Oferece uma boa seleção de filmes, tecnologia moderna e poltronas confortáveis, sendo uma excelente opção para toda a família.</p>';
        break;

    case 'RJ':
        echo"<h1>Rio de Janeiro</h1>";
        echo '<h2>Estação NET Gávea</h2>';
        echo '<p>Localizado no bairro da Gávea, o Estação NET é conhecido por sua programação diversificada que inclui filmes independentes e alternativos. Com um ambiente acolhedor e charmoso, é um dos favoritos dos cinéfilos cariocas.</p>';
        
        echo '<h2>Cinépolis Lagoon</h2>';
        echo '<p>Situado na Lagoa Rodrigo de Freitas, o Cinépolis Lagoon proporciona uma vista incrível e conta com salas VIP. É ideal para quem quer assistir aos lançamentos com muito conforto e uma experiência sofisticada.</p>';
        
        echo '<h2>Cinema Odeon - Centro Cultural Luiz Severiano Ribeiro</h2>';
        echo '<p>No Centro do Rio, o Cinema Odeon é um dos cinemas mais tradicionais da cidade. Ele exibe uma programação variada e é palco de importantes festivais de cinema, além de ser um patrimônio histórico carioca.</p>';
        
        echo '<h2>Cinemark Downtown</h2>';
        echo '<p>Localizado na Barra da Tijuca, o Cinemark Downtown é um dos cinemas mais modernos da cidade. Possui tecnologia avançada de som e imagem e oferece uma experiência de cinema de alta qualidade para assistir aos últimos lançamentos.</p>';
        
        echo '<h2>Kinoplex Leblon</h2>';
        echo '<p>No bairro do Leblon, o Kinoplex é uma referência em conforto e qualidade de exibição. Com um ambiente sofisticado, exibe desde os lançamentos de Hollywood até filmes nacionais e independentes.</p>';
        break;
        
    default:
        echo "<h1 align='center'> Algo deu errado <h1>";
        break;
}
}

?>

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