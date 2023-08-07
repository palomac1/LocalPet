<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="canonical" href="https://getbootstrap.com/docs/5.3/examples/carousel/">
    <!-- TITULO -->
    <title>Local Pet</title>
    <!-- LINK BOOTSTRAP -->
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <link rel="canonical" href="https://getbootstrap.com/docs/5.3/examples/headers/">
    <!-- ICON -->
    <link rel="icon" type="images/localpet.png" href="../images/favicon.png" />
    <!-- DA ONDE VEM A COR DA HEADER -->
    <link rel="stylesheet" href="../css/bootstrap.css">
    <!-- ESTILO HEADER -->
    <style>
        .bd-placeholder-img {
            font-size: 1.125rem;
            text-anchor: middle;
            -webkit-user-select: none;
            -moz-user-select: none;
            user-select: none;
        }

        @media (min-width: 768px) {
            .bd-placeholder-img-lg {
                font-size: 3.5rem;
            }
        }

        .b-example-divider {
            height: 3rem;
            background-color: rgba(0, 0, 0, .1);
            border: solid rgba(0, 0, 0, .15);
            border-width: 1px 0;
            box-shadow: inset 0 .5em 1.5em rgba(0, 0, 0, .1), inset 0 .125em .5em rgba(0, 0, 0, .15);
        }

        .b-example-vr {
            flex-shrink: 0;
            width: 1.5rem;
            height: 100vh;
        }

        .bi {
            vertical-align: -.125em;
            fill: currentColor;
        }

        .nav-scroller {
            position: relative;
            z-index: 2;
            height: 2.75rem;
            overflow-y: hidden;
        }

        .nav-scroller .nav {
            display: flex;
            flex-wrap: nowrap;
            padding-bottom: 1rem;
            margin-top: -1px;
            overflow-x: auto;
            text-align: center;
            white-space: nowrap;
            -webkit-overflow-scrolling: touch;
        }
    </style>
</head>

<body id="corpo">

    <?php include 'header_ong.php'; ?>

    <div class="container marketing">
    </div>
    <!-- INÍCIO -->
    <main class="px-3 text-center">
        <h1>SOBRE NÓS</h1>
        <p class="blockquote text-center">Conheça mais sobre a Local Pet, a empresa que faz conexão entre quem deseja adotar um pet ou está tentando ajudar um animalzinho, <br> com uma rede de milhares de ONGs e
            protetores parceiros, além de ajudar a localizar seu pet através de divulgações </p>
        <p class="lead"> A LOCAL PET foi inaugurada em 23 de janeiro de 2022. Inicialmente com a ideia de auxiliar na localização de ONGs que possibilitam o tratamento de cães e gatos que eram recolhidos das ruas, então ao entrar em contato com a ONG
            escolhida, um profissional especializado ia até o encontro desses animais realizar o resgate. No meio do ano de 2022, alguns dos criadores da empresa deixaram de participar das atividades dedicadas
            aos animais resgatados e os novos diretores como - Helen, Ellen, Nathalia, Mayara, Eduardo e Paloma - expandiram os horizontes da LOCAL PET através de investimentos tecnológicos na empresa. Nesta fase, foram implementados
            novos metódos para o cadastro de animais de diversas ONGs, promovendo e facilitando a adoção de diversos animais, além da localização e divulgação dessas instituições para o público.
            <br>
        <p class="lead"> A LOCAL PET é uma parceira de diversas organizações não governamentais e sem fins lucrativos. Nós acreditamos que todos os animais têm direito à vida, e a vivê-la integralmente, com todos os cuidados e amor que merecem. Por isso, trabalhamos para que todos os animais que passam pela Local Pet recebam tratamento médico e tenha assegurada a oportunidade de um lar através da adoção. É inconcebível a prática do recolhimento de animais nas ruas com destino ao sacrifício. Muitos abrigos também optam por colocar para dormir os animais idosos ou doentes com o argumento de por fim ao sofrimento, ou controlar a quantidade de seres vivos abrigados evitando a superlotação. Isto não acontece com as ONGs parceiras da LOCAL PET, que presa pela saúde e bem-estar de todos os animais.
        </p>
        <br>

        <!-- TEXTO -->
        <div class="container">
            <p class="blockquote text-center">VEJA ALGUNS DOS ANIMAIS ADOTADOS ATRAVÉS DA LOCAL PET </p>
        </div>
        <br>

        <!-- IMAGENS -->
        <div id="portfolio-grid" class="row no-gutter" data-aos="fade-up" data-aos-delay="200">
            <div class="item web col-sm-6 col-md-4 col-lg-4 mb-4">
                <img class="img-fluid" src="../images/yusuke.png">
                <br><br>
                <div class="work-info">
                    <h3>Yusuke</h3>
                </div>
            </div>
            <div class="item web col-sm-6 col-md-4 col-lg-4 mb-4">
                <img class="img-fluid" src="../images/pandora.png">
                <br><br>
                <div class="work-info">
                    <h3>Pandora</h3>
                </div>
            </div>
            <div class="item web col-sm-6 col-md-4 col-lg-4 mb-4">
                <img class="img-fluid" src="../images/sanji.png">
                <br><br>
                <div class="work-info">
                    <h3>Sanji</h3>
                </div>
            </div>
            <div class="item web col-sm-6 col-md-4 col-lg-4 mb-4">
                <img class="img-fluid" src="../images/luffy.png">
                <br><br>
                <div class="work-info">
                    <h3>Luffy</h3>
                </div>
            </div>
            <div class="item web col-sm-6 col-md-4 col-lg-4 mb-4">
                <img class="img-fluid" src="../images/rajado.png">
                <br><br>
                <div class="work-info">
                    <h3>Rajado</h3>
                </div>
            </div>
            <div class="item web col-sm-6 col-md-4 col-lg-4 mb-4">
                <img class="img-fluid" src="../images/bem.png">
                <br><br>
                <div class="work-info">
                    <h3>Bem</h3>
                </div>
            </div>
            <br>

            <!-- RODAPÉ -->
            <footer class="container">
                <!-- BOTÂO VOLTAR -->
                <div class="text-end">
                    <a href="#" class="btn btn-danger btn-block">Voltar</a>
                </div>
                <p>&copy; 2023-Meraki, Inc. &middot; <a href="#">Privacy</a> &middot; <a href="#">Terms</a></p>
            </footer>
    </main>

    <!-- SCRIPT -->
    <script src="https://cdn.lordicon.com/ritcuqlt.js%22%3E"></script>
    <script src="../js/bootstrap.bundle.min.js"></script>


</body>

</html>