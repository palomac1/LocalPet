<!DOCTYPE html>
<html lang="pt-BR">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="canonical" href="https://getbootstrap.com/docs/5.3/examples/carousel/">
  <!-- TITULO -->
  <title>Local Pet</title>
  <!-- LINK BOOTSTRAP -->
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="canonical" href="https://getbootstrap.com/docs/5.3/examples/headers/">
  <!-- ICON -->
  <link rel="icon" type="image/png" href="images/favicon.png" />
  <!-- DA ONDE VEM A COR DA HEADER -->
  <link rel="stylesheet" href="css/bootstrap.css">
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

  <?php include 'header.php'; ?>

  <!-- CARROSSEL  -->
  <main>

    <div id="myCarousel" class="carousel slide" data-bs-ride="carousel">
      <div class="carousel-indicators">
        <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
        <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
        <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="2" aria-label="Slide 3"></button>
      </div>
      <!-- BANNER 1 -->
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img src="images/Banner.png" alt="" width="100%" height="100%" aria-hidden="true" preserveAspectRatio="xMidYMid slice" focusable="false">
          <rect width="100%" height="100%" fill="#777" />
          <div class="container">
            <div class="carousel-caption text-start">
            </div>
          </div>
        </div>
        <!-- BANNER 2 -->
        <div class="carousel-item">
          <img src="images/Banner2.png" alt="" width="100%" height="100%" aria-hidden="true" preserveAspectRatio="xMidYMid slice" focusable="false">
          <rect width="100%" height="100%" fill="#777" />
          <div class="container">
            <div class="carousel-caption">
            </div>
          </div>
        </div>
        <!-- BANNER 3 -->
        <div class="carousel-item">
          <img src="images/Banner3.png" alt="" width="100%" height="100%" aria-hidden="true" preserveAspectRatio="xMidYMid slice" focusable="false">
          <rect width="100%" height="100%" fill="#777" />
          <div class="container">
            <div class="carousel-caption text-end">
            </div>
          </div>
        </div>
      </div>
      <!-- BOTÃO -->
      <button class="carousel-control-prev" type="button" data-bs-target="#myCarousel" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Anterior</span>
      </button>
      <!-- BOTÃO -->
      <button class="carousel-control-next" type="button" data-bs-target="#myCarousel" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Próximo</span>
      </button>
    </div>
    <br> <br>

    <!-- 3 COLUNAS DEPOIS DO CARROSSEL -->
    <div class="container marketing">
      <div class="row">
        <div class="col-lg-4">
          <img class="image" src="images/Icon.png" alt="ongs" width="80" height="80">
          <h2>ONGs</h2>
          <p> Conheça nosso espaço dedicado à ONGs. Se você for uma ONG/Protetor interessado em fazer parte dos nossos
            espaços, aqui poderá obter mais informações sobre como participar.</p>
          <br>
          <p><a class="btn btn-danger" href="ongs.php" role="button">SAIBA MAIS &raquo;</a></p>
        </div>
        <div class="col-lg-4">
          <img class="image" src="images/Icon2.png" alt="adote" width="80" height="80">
          <h2>ADOTE</h2>
          <p> Conheça nosso espaço dedicado à adoção. Aqui você irá conhecer mais informçãoes sobre os cães e/ou gatos das
            ONGs/protetores parceiros que buscam um novo lar.</p>
          <br>
          <p><a class="btn btn-danger" href="adocao.php" role="button">SAIBA MAIS &raquo;</a></p>
        </div>
        <div class="col-lg-4">
          <img class="image" src="images/Icon3.png" alt="perdidos" width="80" height="80">
          <h2>ACHADOS E PERDIDOS</h2>
          <p>Conheça nosso espaço dedicado à animais perdidos e/ou que foram achados. Aqui você pode
            divulgar informações sobre o seu pet que foi perdido e/ou algum outro animalzinho que foi achado na rua e pode ser de alguém!
          </p>
          <p><a class="btn btn-danger" href="a&p.php" role="button">SAIBA MAIS &raquo;</a></p>
        </div>
      </div>

      <!-- INÍCIO FEATURETTES -->

      <hr class="featurette-divider">

      <div class="row featurette">
        <a name="carousel">&nbsp;</a>
        <div class="col-md-7">
          <h2 class="featurette-heading fw-normal lh-1">Quem Somos? Somos a LocalPet! <span class="text-muted"><br> Parceiros das ONGs que regatam animais em situação de rua.</span></h2>
          <p class="lead">Nosso site tem parceiria com várias ONGs para você que quer adotar um Pet, fazer doação para uma ONG cadastrada ou até mesmo encontrar o seu Pet perdido.</p>
          <!-- BOTÃO -->
          <a class="btn btn-danger" href="sobre_nos.php" role="button">SAIBA MAIS</a>
        </div>
        <div class="col-md-5">
          <img src="images/sobre.png" alt="" width="500" height="500">
          <rect width="100%" height="100%" fill="#eee" /><text x="50%" y="50%" fill="#aaa" dy=".3em"></text>
          </svg>
        </div>
      </div>

      <hr class="featurette-divider">

      <div class="row featurette">
        <div class="col-md-7 order-md-2">
          <h2 class="featurette-heading fw-normal lh-1">Seu Pet se perdeu? <span class="text-muted">Nos te ajudamos na procura do seu Pet perdido.</span></h2>
          <p class="lead">Encontre seu pet perdido com campanhas de marketing inteligente via Instagram e Facebook. Perdeu seu cachorro ou gato? Divulgue agora!</p>
          <!-- BOTÃO -->
          <a class="btn btn-danger" href="a&p.php" role="button">SAIBA MAIS</a>
        </div>
        <div class="col-md-5 order-md-1">
          <img src="images/A&P.png" alt="" width="500" height="500">
          <rect width="100%" height="100%" fill="#eee" /><text x="50%" y="50%" fill="#aaa" dy=".3em"></text>
          </svg>
        </div>
      </div>

      <hr class="featurette-divider">

      <div class="row featurette">
        <div class="col-md-7">
          <h2 class="featurette-heading fw-normal lh-1">Proteja os animais de rua!</h2>
          <p class="lead">Caso você presencie maus-tratos a animais de quaisquer espécies, sejam domésticos, domesticados, silvestres ou exóticos, vá à delegacia de polícia mais próxima para lavrar o Boletim de Ocorrência (BO), ou compareça à Promotoria de Justiça do Meio Ambiente.</p>
          <!-- BOTÃO -->
          <a class="btn btn-danger" href="proteja.php" role="button">SAIBA MAIS</a>
        </div>
        <div class="col-md-5">
          <img src="images/proteja.png" alt="" width="500" height="500">
          <rect width="100%" height="100%" fill="#eee" /><text x="50%" y="50%" fill="#aaa" dy=".3em"></text>
          </svg>
        </div>
      </div>

      <hr class="featurette-divider">

      <!-- FIM FEATURETTES -->

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
  <script src="js/bootstrap.bundle.min.js"></script>


</body>

</html>