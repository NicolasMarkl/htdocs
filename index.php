<?php 
  session_start(); 

  if (!isset($_SESSION['username'])) {
  	$_SESSION['msg'] = "You must log in first";
  	header('location: login.php');
  }
  if (isset($_GET['logout'])) {
  	session_destroy();
  	unset($_SESSION['username']);
  	header("location: login.php");
  }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
    <link href="/hotel.css" rel="stylesheet" crossorigin="anonymous">
    <title>Hotel Hangover</title>
    
</head>
<body>
    <header class="p-3 bg-dark text-white">
        <div class="container">
          <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">
            <a href="/" class="d-flex align-items-center mb-2 mb-lg-0 text-white text-decoration-none">
              <svg class="bi me-2" width="40" height="32" role="img" aria-label="Bootstrap"><use xlink:href="#bootstrap"></use></svg>
            </a>
    
            <ul class="nav col-12 col-lg-auto me-lg-auto mb-2 justify-content-center mb-md-0">
              <li><a href="#" class="nav-link px-2 text-secondary">Home</a></li>
              <li><a href="./impressum.html" class="nav-link px-2 text-white">Impressum</a></li>
            </ul>
    
            <form class="col-12 col-lg-auto mb-3 mb-lg-0 me-lg-3">
              <input type="search" class="form-control form-control-dark" placeholder="Suche..." aria-label="Search" control-id="ControlID-1">
            </form>
    
            <div class="text-end">
                <a href="./login.html"><button type="button" class="btn btn-outline-light me-2">Login</button></a>
              <a href="./register.html"><button type="button" class="btn btn-warning">Registrieren</button></a>
            </div>
          </div>
        </div>
      </header>

      <section class="bgimage">
        <div class="container-fluid">
          <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
              <h5>Hotel Hangover</h5>
              <p>Schlafen Sie Ihren Kater aus</p>
              <p><a href="#" class="btn btn-primary btn-large">Mehr erfahren »</a></p>
            </div>
          </div>
        </div>
      </section>



      <div style="padding:10%"class="row row-cols-1 row-cols-md-3 mb-3 text-center">
        <div class="col">
          <div class="card mb-4 rounded-3 shadow-sm">
            <div class="card-header py-3">
              <h4 class="my-0 fw-normal">Normales Zimmer</h4>
            </div>
            <div class="card-body">
              <h1 class="card-title pricing-card-title">30€<small class="text-muted fw-light">/Nacht</small></h1>
              <ul class="list-unstyled mt-3 mb-4">
                <li>Gratis WLAN</li>
                <li>Dusche</li>
                <li>WC</li>
                <li>Bett</li>
              </ul>
              <button type="button" class="w-100 btn btn-lg btn-outline-primary">Buchen Sie jetzt!</button>
            </div>
          </div>
        </div>
        <div class="col">
          <div class="card mb-4 rounded-3 shadow-sm">
            <div class="card-header py-3">
              <h4 class="my-0 fw-normal">Junior Suite</h4>
            </div>
            <div class="card-body">
              <h1 class="card-title pricing-card-title">70€<small class="text-muted fw-light">/Nacht</small></h1>
              <ul class="list-unstyled mt-3 mb-4">
                <li>Gratis WLAN</li>
                <li>Minibar</li>
                <li>Wohnzimmer</li>
                <li>Boxspringbett</li>
              </ul>
              <button type="button" class="w-100 btn btn-lg btn-primary">Buchen Sie jetzt!</button>
            </div>
          </div>
        </div>
        <div class="col">
          <div class="card mb-4 rounded-3 shadow-sm border-primary">
            <div class="card-header py-3 text-white bg-primary border-primary">
              <h4 class="my-0 fw-normal">Große Suite</h4>
            </div>
            <div class="card-body">
              <h1 class="card-title pricing-card-title">€200<small class="text-muted fw-light">/Nacht</small></h1>
              <ul class="list-unstyled mt-3 mb-4">
                <li>Gratis WLAN</li>
                <li>Whirlpool</li>
                <li>Concierge Service</li>
                <li>Kingsize Bett</li>
              </ul>
              <button type="button" class="w-100 btn btn-lg btn-primary">Buchen Sie jetzt!</button>
            </div>
          </div>
        </div>
      </div>

</body>
</html>