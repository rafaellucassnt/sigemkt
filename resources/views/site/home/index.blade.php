<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">

<head>
  <meta charset="utf-8" />
  <link rel="icon" type="image/png" href="favicon.ico">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <title>
      SIGE MKT
  </title>
  <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
  <!--     Fontes e icones     -->
  <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet" />
  <link href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">

  <!-- Arquivos CSS -->
  <link href="assets/css/bootstrap.min.css" rel="stylesheet" />
  <link href="assets/css/paper-kit.css?v=2.2.0" rel="stylesheet" />
  <link href="assets/css/home.css" rel="stylesheet"/>
  <link href="assets/css/table-hs.css" rel="stylesheet"/>

</head>

<body class="landing-page sidebar-collapse">
  <!-- Navbar -->
  <nav class="navbar navbar-expand-lg fixed-top navbar-transparent " color-on-scroll="120">
    <div class="container">
      <div class="navbar-translate">
        <a class="navbar-brand" href="/" rel="tooltip" title="SIGE MARKETING E VENDAS" data-placement="bottom" target="_blank">
          SigeMKT
        </a>
        <button class="navbar-toggler navbar-toggler" type="button" data-toggle="collapse" data-target="#navigation" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-bar bar1"></span>
          <span class="navbar-toggler-bar bar2"></span>
          <span class="navbar-toggler-bar bar3"></span>
        </button>
      </div>
      <div class="collapse navbar-collapse justify-content-end" id="navigation">
        @if (Route::has('login'))
        <ul class="navbar-nav">
            <li class="nav-item">
                <a href="{{ url('/') }}" class="nav-link"><i class="fas fa-home"></i></i>Home</a>
            </li>
          @auth
          <li class="nav-item">
            <a href="{{ url('admin') }}" class="nav-link"><i class="fas fa-tachometer-alt"></i></i>Dashboard</a>
          </li>
          <li class="nav-item">
                <a href="{{ url('guideapi') }}" class="nav-link"><i class="fa fa-code" aria-hidden="true"></i></i>API</a>
              </li>
          @else 
          <li class="nav-item">
                <a href="{{ url('guideapi') }}" class="nav-link"><i class="fa fa-code" aria-hidden="true"></i></i>API</a>
              </li>
          <li class="nav-item">
            <a href="{{ url('login') }}" class="nav-link"><i class="fas fa-sign-in-alt"></i>Login</a>
          </li>
          @endauth
        </ul>
         @endif
      </div>
    </div>
  </nav>
  <!-- End Navbar -->
  <div class="page-header" data-parallax="true" style="background-image: url(assets/img/bg01.jpg);">
    <div class="filter"></div>
    <div class="container space-nav">
      <div class="motto title-brand">
        <h2 class="presentation-subtitle">SIGE Markentig e Vendas</h2>
        <br/>
      
      </div>
    </div>
  </div>
  <div class="main">
    <div class="section text-center">
      <div class="container">
        <div class="row">
          <div class="col-md-8 ml-auto mr-auto">
            <h2 class="title">Sobre o Software</h2>
            <h5 class="description">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Doloribus repudiandae quaerat, ipsa, vitae incidunt magnam voluptate atque asperiores dolor, inventore illum! Alias mollitia autem eos et voluptates hic necessitatibus pariatur.</h5>
            <br>
          </div>
        </div>
        <br/>
        <br/>
        <div class="row">
          <div class="col-md-3">
            <div class="info">
              <div class="icon icon-purple">
                <i class="fas fa-brain"></i>
              </div>
              <div class="description">
                <h5 class="info-title">Módulo inteligente</h5>
                <p class="description">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Doloribus repudiandae quaerat, ipsa, vitae incidunt magnam voluptate atque asperiores dolor, inventore illum!</p>
              </div>
            </div>
          </div>
          <div class="col-md-3">
            <div class="info">
              <div class="icon icon-purple">
                <i class="fas fa-chart-line"></i>
              </div>
              <div class="description">
                <h5 class="info-title">Dashboard</h5>
                <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Doloribus repudiandae quaerat, ipsa, vitae incidunt magnam voluptate atque asperiores dolor, inventore illum!</p>
              </div>
            </div>
          </div>
          <div class="col-md-3">
            <div class="info">
              <div class="icon icon-purple">
                <i class="fas fa-lock"></i>
              </div>
              <div class="description">
                <h5 class="info-title">Segurança dos dados</h5>
                <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Doloribus repudiandae quaerat, ipsa, vitae incidunt magnam voluptate atque asperiores dolor, inventore illum!</p>
              </div>
            </div>
          </div>
          <div class="col-md-3">
            <div class="info">
              <div class="icon icon-purple">
                <i class="fas fa-cloud"></i>
              </div>
              <div class="description">
                <h5 class="info-title">Acessível de qualquer lugar</h5>
                <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Doloribus repudiandae quaerat, ipsa, vitae incidunt magnam voluptate atque asperiores dolor, inventore illum!</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <footer class="footer">
      <div class="container">
          <div class="row">
              <nav class="footer-nav">

              </nav>
              <div class="credits ml-auto">
                  <span class="copyright">
                      © <script>document.write(new Date().getFullYear())</script>, feito com <i class="fa fa-heart heart"></i> por <a href="/">SigeMKT</a>
                  </span>
              </div>
          </div>
      </div>
  </footer>
  <!--   Core JS Files   -->
  <script src="../assets/js/core/jquery.min.js" type="text/javascript"></script>
  <script src="../assets/js/core/popper.min.js" type="text/javascript"></script>
  <script src="../assets/js/core/bootstrap.min.js" type="text/javascript"></script>
  <script src="../assets/js/paper-kit.js?v=2.2.0" type="text/javascript"></script>
</body>

</html>