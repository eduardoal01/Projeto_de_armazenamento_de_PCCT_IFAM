<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta http-equiv="X-UA-Compatible" content="ie=edge" />
  <title>Armazenamento-Pcct</title>

  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T"
    crossorigin="anonymous" />
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr"
    crossorigin="anonymous">
  <link rel="stylesheet" href="Style.css"/>
  <link rel="stylesheet" href="mobile-style.css">
</head>

<body>
  <header> <!-- Inicio do Cabecalho -->
    
    <div class="container-fluid p-0">
      <nav class="navbar navbar-expand-lg"> <!-- Inicio do Menu-->
        <a class="navbar-brand" href="Index.php">
          <i class="fas fa-book-reader fa-2x mx-3"></i>Repositorio de Pcct</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false"
          aria-label="Toggle navigation">
          <i class="fas fa-align-right text-light"></i>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
          
          <ul class="navbar-nav">
            <li class="nav-item active">
              <a class="nav-link" href="Index.php">Pagina Inicial</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="navegar.php">Navegar</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Contato</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Sobre</a>
            </li>
          </ul>

          <form class="d-flex">
            <input class="form-control me-2" type="search" placeholder="Buscar no Repositorio" aria-label="Search"> 
            <button class="btn btn-danger" type="submit"><i class="fas fa-search"></i></button>
          </form>

          <ul class="navbar-nav">
            <li class="nav-item active">
              <a class="nav-link" href="Cadastro.php">Cadastre-se</a>
            </li>
            <li><a class="nav-link" href="login.php">Login</a></li>
          </ul>  

        </div>
      </nav><!-- Fim do Menu -->
    </div>
  </header> <!-- Fim do Cabeçalho -->

  <main> <!-- Inicio do Corpo do site -->

    <section class="section-1"> <!-- Inicio do conteudo Primario -->
      <div class="container text-center">
        <div class="row">
          <div class="col-md-7 col-sm-12  text-dark">
            <h2>Bem Vindo !</h6>
            <h1>Repositorio de Pcct IFAM</h1>
            <p>
              Lorem ipsum dolor sit amet consectetur adipisicing elit. Facere accusamus eum dignissimos ipsa sequi expedita.
            </p>
            <input type="text" class="form-control" placeholder="Buscar no Repositorio"> <!-- Barra de pesquisa inicial - Finalizar -->
  
          </div>
        </div>
      </div> <!-- Fim do Conteudo Primario -->
      
    </section> <!-- Fim do conteudo Secundario -->

  </main> <!-- Fim do corpo do site -->

  <footer> <!-- Inicio do Rodape-->
    <div class="container-fluid p-0">
      <div class="row text-left">
        <div class="col-md-5 col-sm-5">
          <h4 class="text-light">About us</h4>
          <p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Earum maxime ea similique illum corrupti</p>
          <p class="pt-4 text-muted">Copyright ©2019 All rights reserved | This template is made with by
            <span> Daily Tuition</span>
          </p>
        </div>
        <div class="col-md-5 col-sm-12">
          <h4 class="text-light">Newsletter</h4>
          <p class="text-muted">Stay Updated</p>
        </div>
      </div>
    </div>
  </footer> <!-- Fim do rodape -->

  <!-- Inicio do BootStrap -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
    crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
    crossorigin="anonymous"></script>
  <!-- Fim do BootStrap -->
</body>
</html>