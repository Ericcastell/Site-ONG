<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.88.1">
    <title>Grandes A(l)titudes</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/5.1/examples/carousel/">

    

    <!-- Bootstrap core CSS -->
    <link href="../assets/dist/css/bootstrap.min.css" rel="stylesheet">

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
    </style>

    
    <!-- Custom styles for this template -->
    <link href="carousel.css" rel="stylesheet">
  </head>
  <body>
    
  <!-- HEADER --> <?php include '../assets/xmenu.php'; /* Lindinho capaz de substituir o header s2 */ ?> 

<main>

  <div id="myCarousel" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-indicators"> <!-- indicadores de indices(os tracinhos cinza)-->
      <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
      <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
      <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="2" aria-label="Slide 3"></button>
    </div>
    <div class="carousel-inner"> <!-- barra de navegação -->
    <!-- Redirecionamento para as informações sobre a ONG -->
      <div class="carousel-item active">
        <svg class="bd-placeholder-img" width="100%" height="100%" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" preserveAspectRatio="xMidYMid slice" focusable="false"><rect width="100%" height="100%" fill="#777"/></svg>
        <div class="container">
          <div class="carousel-caption">
            <h1>Seja bem-vindo ao Grandes A(l)titudes!</h1>
            <p>Quer entender o que fazemos?</p>
            <p><a class="btn btn-lg btn-primary" href="#">Saiba mais</a></p>
          </div>
        </div>
      </div>
      <!-- Fim div -->

      <!-- Redirecionamento para a página de inscrição de novos voluntários -->
      <div class="carousel-item">
        <svg class="bd-placeholder-img" width="100%" height="100%" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" preserveAspectRatio="xMidYMid slice" focusable="false"><rect width="100%" height="100%" fill="#777"/></svg>
        <div class="container">
          <div class="carousel-caption">
            <h1>Quer ser voluntário?</h1>
            <p>Vem fazer parte desse time!</p>
            <p><a class="btn btn-lg btn-primary" href="../../Back-End/salvar_insc/FormsOficial_voluntarios.php">Inscreva-se</a></p>
          </div>
        </div>
      </div>
      <!-- Final div -->

      <!-- Perguntas Frequentes -->
      <div class="carousel-item"> <!-- Ideia pra fazer um lugar de Dúvidas frequentes e para esclarecer dúvidas de futuros voluntários/curiosos/estudantes-->
        <svg class="bd-placeholder-img" width="100%" height="100%" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" preserveAspectRatio="xMidYMid slice" focusable="false"><rect width="100%" height="100%" fill="#777"/></svg>
        <div class="container">
          <div class="carousel-caption">
            <h1>Possui alguma Dúvida?</h1>
            <p>Consulte as Dúvidas mais Frequentes!</p>
            <p><a class="btn btn-lg btn-primary" href="duvidas_frequentes.php">Dúvidas Frequentes</a></p> 
          </div>
        </div>
      </div>
      <!-- Final div -->

    </div>
    <!-- botões de Next e Prox "<" ">" --> 
    <button class="carousel-control-prev" type="button" data-bs-target="#myCarousel" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#myCarousel" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>
  </div>


  <!-- Marketing messaging and featurettes
  ================================================== -->
  <!-- Wrap the rest of the page in another container to center all the content. -->

  <div class="container marketing">

    <!-- Three columns of text below the carousel -->
    <div class="row">
      <div class="col-lg-4">
        <!-- <svg class="bd-placeholder-img rounded-circle" width="140" height="140" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: 140x140" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#777"/><text x="50%" y="50%" fill="#777" dy=".3em">140x140</text></svg> -->
        <img src="../../Imagens_and_Icons/clei.png" class="bd-placeholder-img rounded-circle" width="140" height="140">
        <h2>Cleiton Rasta</h2>
        <p>INCRÍVEL IGUAL AS MINHAS PEDRADAS!</p>
        <p>Graças ao material disponibilizado, consegui entrar no melhor da UFRJ! Especialização no jogo do bicho. Atualmente, estou realizando meu sonho, doutorado no jogo do bicho,grato eternamente a ONG.</p>
      </div><!-- /.col-lg-4 -->
      
      <div class="col-lg-4">
        <!--<svg class="bd-placeholder-img rounded-circle" width="140" height="140" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: 140x140" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#777"/><text x="50%" y="50%" fill="#777" dy=".3em">140x140</text></svg>-->
        <img src="../../Imagens_and_Icons/depoiment_real.png" class="bd-placeholder-img rounded-circle" width="140" height="140">
        <h2>Helena</h2>
        <p>O mérito do meu ingresso na UFF,dedico totalmente a essa ONG maravilhosa. Hoje sou formada em Engenharia da computação, mas conheci a ONG quando tinha apenas 18 anos. Os resumos são incíveis, altamente detalhados e completos! Muito obrigado a todos que colaboram até hoje para esse projeto surreal!</p>
        <p>Vocês são Incíveis. :)</p>
        <p><a class="btn btn-secondary" href="depoimentos.php">Veja mais depoimentos &raquo;</a></p>
      </div><!-- /.col-lg-4 -->
      
      <div class="col-lg-4">
        <!--<svg class="bd-placeholder-img rounded-circle" width="140" height="140" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: 140x140" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#777"/><text x="50%" y="50%" fill="#777" dy=".3em">140x140</text></svg>-->
        <img src="../../Imagens_and_Icons/mulher.jpg" class="bd-placeholder-img rounded-circle" width="140" height="140">
        <h2>Giulia</h2>
        <p>And lastly this, the third column of representative placeholder content.</p>
      </div><!-- /.col-lg-4 -->
    </div><!-- /.row -->


    <!-- START THE FEATURETTES -->

    <hr class="featurette-divider">

    <div class="row featurette">
      <div class="col-md-7">
        <h2 class="featurette-heading"> Matérias</h2>
        <p class="lead">Some great placeholder content for the first featurette here. Imagine some exciting prose here.</p>
        <a class="btn btn-primary" href="../materias_front/materias.php" role="button">Matérias</a>
      </div>
      <div class="col-md-5">
        <svg class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto" width="500" height="500" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: 500x500" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#eee"/><text x="50%" y="50%" fill="#aaa" dy=".3em">500x500</text></svg>

      </div>
    </div>

    <hr class="featurette-divider">

    <div class="row featurette">
      <div class="col-md-7 order-md-2">
        <h2 class="featurette-heading">Como funciona o voluntariado?</h2>
        <p class="lead">Another featurette? Of course. More placeholder content here to give you an idea of how this layout would work with some actual real-world content in place.</p>
      </div>
      <div class="col-md-5 order-md-1">
        <svg class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto" width="500" height="500" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: 500x500" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#eee"/><text x="50%" y="50%" fill="#aaa" dy=".3em">500x500</text></svg>

      </div>
    </div>

    <hr class="featurette-divider">

    <div class="row featurette">
      <div class="col-md-7">
        <h2 class="featurette-heading">Doações</h2>
        <p class="lead">And yes, this is the last block of representative placeholder content. Again, not really intended to be actually read, simply here to give you a better view of what this would look like with some actual content. Your content.</p>
      </div>
      <div class="col-md-5">
        <svg class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto" width="500" height="500" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: 500x500" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#eee"/><text x="50%" y="50%" fill="#aaa" dy=".3em">500x500</text></svg>

      </div>
    </div>

    <hr class="featurette-divider">

    <!-- /END THE FEATURETTES -->

  </div><!-- /.container -->


  <!-- FOOTER -->
</main>
  <footer class="container">
      <p class="float-end"><a href="#">Voltar ao topo</a></p>
      <p>&copy; 2018–2021 Grande A(l)titudes, Ong. &middot; <a href="#">Privacy</a> &middot; <a href="#">Terms</a></p>
  </footer>
    <script src="../assets/dist/js/bootstrap.bundle.min.js"></script>
  </body>
</html>
