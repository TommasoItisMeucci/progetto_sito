<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
  <body class="bg-dark">

  <!--nav-bar-->
  <nav class="navbar navbar-expand-lg border border-success bg-black">
    <div class="container-fluid">
        <a class="navbar-brand" href="#">
            <img src="images/logo.webp" alt="" width="50" height="10%">
        </a>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link active text-white" aria-current="page" href="#">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white text-decoration-none p-2" data-bs-toggle="offcanvas" href="#offcanvasExample" aria-controls="offcanvasExample">Chi siamo</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle text-white" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Animes
                    </a>
                    <ul class="dropdown-menu"><!--mettere generazione in php query-->
                        <li><a class="dropdown-item" href="#">1</a></li>
                        <li><a class="dropdown-item" href="#">2</a></li>
                        <li><a class="dropdown-item" href="#">3</a></li>
                    </ul>
                </li>
            </ul>
            <a>
                <img><!-- immagine con la query e controllo in PHP --></img>
            </a>
            <form class="d-flex" role="search">
                <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-danger" type="submit">Search</button>
            </form>
        </div>
    </div>
</nav>


    <!--card da generare con le query e php-->
    <!--container-->
    <div class="container text-center border border-success mt-4" id="container">
        <div class="row">
            <!--la colonne saranno generate con query php-->
            <div class="col-sm-4">
                <!--card 1-->
                <div class="card">
                    <img src="..." class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Titolo</h5><!--da prendere in php query-->
                        <p class="card-text">Descrizione della card.</p>
                        <a href="#" class="btn btn-primary">Scopri di più</a>
                    </div>
                </div>
            </div>
            <div class="col-sm-4">
                <!--card 2-->
                <div class="card">
                    <img src="..." class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Titolo</h5>
                        <p class="card-text">Descrizione della card.</p>
                        <a href="#" class="btn btn-primary">Scopri di più</a>
                    </div>
                </div>
            </div>
            <div class="col-sm-4">
                <!--card 3-->
                <div class="card">
                    <img src="..." class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Titolo</h5>
                        <p class="card-text">Descrizione della card.</p>
                        <a href="#" class="btn btn-primary">Scopri di più</a>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <!--side-bar con informazioni mie-->
    <div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasExample" aria-labelledby="offcanvasExampleLabel">
        <div class="offcanvas-header">
            <h5 class="offcanvas-title" id="offcanvasExampleLabel">Chi siamo?<!--forse la tolgo<img src="images/logo.webp" alt="" width="10%" height="30%">--></h5>
            <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
        </div>
        <div class="offcanvas-body">
            <div>
            introduzione
            </div>
            <div>
                <!--link miei-->
            </div>
        </div>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>