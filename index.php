<?php
$host = "localhost";
$db   = "quadros";
$user = "root";
$pass = "";
$conn = mysqli_connect($host, $user, $pass, $db); ?>
<!doctype html>
<html lang="pt-br">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.2/font/bootstrap-icons.css" rel="stylesheet">
  <link href="cssjs/style.css" rel="stylesheet">

  <title>Quadros Decor</title>
</head>

<div>
  <div class="navigation-wrap start-header start-style">
    <div class="container-fluid d-flex justify-content-center">
      <nav class="navbar" style="padding: 1px;" aria-label="Fourth navbar example">
        <a class="navbar-brand">
          <div class="icone"><img src="imagens/icone.png" style=" height: 80px; " alt="icone"></div>
        </a>
        <ul class="nav nav-pills">
          <li class="nav-item dropdown">
          <li class="nav-item">
            <a class="nav-link" href="#" style="color: white">INÍCIO</a>
          </li>

          <li class="nav-item">
            <a class="nav-link" href="subpaginas/compras.html" style="color: white">ONDE COMPRAR</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="subpaginas/info.html" style="color: white">QUEM SOMOS</a>
          </li>
        </ul>
        </li>
        </ul>
        <div>
          <a href="https://wa.me/message/MJ6Q3FRHMGUQM1" target=”_blank”><i class="bi bi-whatsapp" style="font-size: 25px; color:white;"></i></a>
          <a href="https://instagram.com/quadrosde.cor?igshid=YmMyMTA2M2Y=" target=”_blank”><i class="bi bi-instagram" style="font-size: 25px; color:white;"></i></a>
          <a href="https://mail.google.com/mail/?view=cm&fs=1&tf=1&to=quadrosdecorcambe@gmail.com" target=”_blank”><i class="bi bi-envelope" style="font-size: 28px; color:white;"></i></a>
        </div>
      </nav>
    </div>
  </div>
</div>

<div id="corpo">
  <div class="container my-5">
    <div class="ombre-externe">
      <div class="ombre-interne">
        <div id="carouselExampleCaptions" class="carousel slide " data-bs-ride="carousel">
          <div class="carousel-inner">
            <div class="carousel-item active">
              <img src="https://thumbs.dreamstime.com/b/sparkly-glitter-red-background-bokeh-effect-abstract-luxury-color-little-122673393.jpg" class="d-block w-100 peinture-ombre-interne-fine" alt="...">
              <div class="carousel-caption">
                <h5>First slide</h5>
                <p></p>
              </div>
            </div>
            <div class="carousel-item">
              <img src="https://img.freepik.com/free-photo/abstract-grunge-decorative-relief-navy-blue-stucco-wall-texture-wide-angle-rough-colored-background_1258-28311.jpg?w=2000" class="d-block w-100" alt="...">
              <div class="carousel-caption">
                <h5>Second slide</h5>
                <p></p>
              </div>
            </div>
            <div class="carousel-item">
              <img src="https://d1csarkz8obe9u.cloudfront.net/posterpreviews/green-grass-zoom-background-design-template-e20631e075d95517932f6eca6686cea9_screen.jpg?ts=1586910294" class="d-block w-100" alt="...">
              <div class="carousel-caption">
                <h5>Third slide</h5>
                <p></p>
              </div>
            </div>
          </div>
          <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          </button>
          <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
          </button>
        </div>
      </div>
    </div>
  </div>

  <div class="pagina">
    <div class='container py-5'>
      <h4>NAMORADOS</h4>
      <hr>
      <div class='row pb-5 mb-4'>
        <?php
        $sql =  mysqli_query($conn, "select * from registro order by Categoria");

        if (!$sql > 0) {
          echo "<div class='alert alert-danger' role='alert'>ERRO</div>";
        } else {
          while ($produto = mysqli_fetch_assoc($sql)) {
            echo "
            <div class='card-group col-lg-3 mb-1 mb-lg-3 '>
              <div class='card rounded shadow-sm border-0' style='color:white;'>
                  <div class='card-body p-2 text-center'>
                    <img src='data:image/jpeg;base64," . base64_encode($produto['Imagem']) . " alt='' class='img-fluid d-block mx-auto mb-3'>
                     <h5>{$produto['Produto']}</h5>
                     <h6 class='font-italic' style='color:#ae32e1';>R$ {$produto['Valor']}</h6>
                     <p class='small text muted font-italic'style='color:white'>{$produto['Texto']}</p>
                    <ul class='list-inline small'>
                    </ul>
                  </div>
               </div>
            </div>
        ";
          }
        }

        ?>
      </div>
      <h4>FAMÍLIA</h4>
      <hr>

      <h4>QUADROS FLORK</h4>
      <hr>
      <h4>GEEK</h4>
      <hr>
    </div>

  </div>
  <footer>
    <div class='container py-5'>
      <h6 style="opacity:0.7">Desenvolvido por Felipe Bertoli</h6>
      <div>
        <a href="https://github.com/FelipeBertoli" target=”_blank”><i style="color:white" class="bi bi-github"></i></a>
        <a href="https://www.linkedin.com/in/felipebertoli" target=”_blank”><i class="bi bi-linkedin"></i></a>
        <a href="https://wa.me/5543984331545" target=”_blank”><i style="color:green" class="bi bi-whatsapp"></i></a>
        <a href="https://mail.google.com/mail/?view=cm&fs=1&tf=1&to=felipebertolioliveira@gmail.com" target=”_blank”><i style="color:red" class="bi bi-envelope"></i></a>
      </div>
    </div>


  </footer>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js"></script>
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
  <script src="../../../../assets/js/vendor/popper.min.js"></script>
  <script src="../../../../dist/js/bootstrap.min.js"></script>
  <script src="cssjs/script.js"></script>

</html>