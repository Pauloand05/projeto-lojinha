<?php
  // Início do código PHP, caso precise (não altere se não for necessário)
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <title>inicio</title>
</head>
<body>
    <!-- Navbar do site -->
<nav  data-bs-theme="dark">
<nav class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Navbar</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Link</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Dropdown
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="#">Action</a></li>
            <li><a class="dropdown-item" href="#">Another action</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="#">Something else here</a></li>
          </ul>
        </li>
        <li class="nav-item">
          <a class="nav-link disabled" aria-disabled="true">Disabled</a>
        </li>
      </ul>
      <form class="d-flex" role="search">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Search</button>
      </form>
    </div>
  </div>
</nav>
    <!-- carrosel do site -->
<div id="carouselExampleIndicators" class="carousel slide">
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
  </div>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="img/img-1.jpeg" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="img/img-2.jpeg" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="img/img-3.jpeg" class="d-block w-100" alt="...">
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>
    <!-- cards para amostra de produtos -->
<div class="container mt-5">
    <div class="row">
        <!-- Card 1 -->
        <div class="col-md-4">
            <div class="card" style="width: 18rem;">
            <img src="img/img-1.jpeg" class="card-img-top" alt="Imagem do produto 1">
                <div class="card-body">
                    <p class="card-text">Imagem do produto 1.</p>
                </div>
            </div>
        </div>

        <!-- Card 2 -->
        <div class="col-md-4">
            <div class="card" style="width: 18rem;">
            <img src="img/img-1.jpeg" class="card-img-top" alt="Imagem do produto 2">
                <div class="card-body">
                    <p class="card-text">Imagem do produto 2.</p>
                </div>
            </div>
        </div>
        <!-- Card 3 -->
        <div class="col-md-4">
            <div class="card" style="width: 18rem;">
            <img src="img/img-1.jpeg" class="card-img-top" alt="Imagem do produto 2">
                <div class="card-body">
                    <p class="card-text">Imagem do produto 3.</p>
                </div>
            </div>
        </div>
    </div>
    <!-- Segunda linha de cards (Card 4) -->
    <div class="row mt-5">
      <!-- Card 4 -->
      <div class="col-md-4">
        <div class="card" style="width: 18rem;">
          <img src="img/img-1.jpeg" class="card-img-top" alt="Imagem do produto 4">
          <div class="card-body">
            <p class="card-text">Imagem do produto 4.</p>
          </div>
        </div>
      </div>
      <!-- Card 5 -->
      <div class="col-md-4">
        <div class="card" style="width: 18rem;">
          <img src="img/img-1.jpeg" class="card-img-top" alt="Imagem do produto 4">
          <div class="card-body">
            <p class="card-text">Imagem do produto 5.</p>
          </div>
        </div>
      </div>
      <!-- Card 6 -->
      <div class="col-md-4">
        <div class="card" style="width: 18rem;">
          <img src="img/img-1.jpeg" class="card-img-top" alt="Imagem do produto 4">
          <div class="card-body">
            <p class="card-text">Imagem do produto 6.</p>
          </div>
        </div>
      </div>
    </div>

</div>
<script src="js/bootstrap.min.js"></script>
<script src="js/bootstrap.bundle.min.js"></script>
</body>
</html>