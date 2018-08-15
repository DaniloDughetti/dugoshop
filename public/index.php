<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Dugo official web shop">
    <meta name="author" content="Danilo Dughetti">
    <title>DugoShop</title>
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/styles/dugoshop.css?v=1.1" rel="stylesheet">
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    
    <?php
      require('database/PreOrderUser.php');
      try{
        $preOrderUser = new PreOrderUser();
        $progress = 90 + ($preOrderUser->getPreOrderUserNumber()/500);
        $tshirtNumber = $progress * 500;
        $tshirtLeft = 50000 - $tshirtNumber;
      } catch(Exception $e){
        echo "ERROR: Could not connect. " . $e->getMessage();
      }
    ?>
  </head>
  <body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark static-top">
      <div class="container">
        <a class="navbar-brand" href="#"><img class="logo" src="assets/images/logo.png"></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item active">
              <a class="nav-link" href="#">Home
                <span class="sr-only">(current)</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="http://dughettidanilo.com">Go to portfolio</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>

    <div class="container">
      <div class="raw">
        <div class="col-12 col-sm-12 col-md-14 col-lg-12 col-xl-12 text-center">
          <h1 class="mt-5 tshirt-title">Per-order now the hottest 2018 t-shirt</h1>
          <p class="lead">At 50k orders we'll start sending your idol t-shirt! <span class="badge badge-primary"><?php 
          echo $tshirtLeft . ' left!';
          ?></span></p>
        </div>
      </div>

      <div class="row">
        <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6 text-center">
          <img class="tshirt" src="assets/images/tshirt.png">
        </div>
        <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6 text-center">
          <ul class="list-unstyled preorderuser-tshirt">
            <li>
              <form action="purchaseComplete.php" method="post" id="tshirt-form" data-toggle="validator">
                <div class="form-group">
                  <input type="email" class="form-control" name="input-email" id="input-email" aria-describedby="email" placeholder="Email" required>
                </div>
                <div class="form-group">
                  <input type="text" class="form-control" name="input-firstName" id="input-firstName" placeholder="First name" required>
                </div>
                <div class="form-group">
                  <input type="text" class="form-control" name="input-lastName" id="input-lastName" placeholder="Last name" required>
                </div>
                <div class="form-group">
                  <select class="form-control" name="input-tshirtSize">
                    <option value="S">Small</option>
                    <option value="M">Medium</option>
                    <option value="L">Large</option>
                  </select>
                </div>
                <button type="submit" class="btn btn-primary">Pre-Order your awesome t-shirt now</button>
              </form>
            </li>
          </ul>
        </div>
      </div>

      <div class="raw">
        <div class="col-12 col-sm-12 col-md-14 col-lg-12 col-xl-12 text-center">
          <div class="progress">
              <div class="progress-bar progress-bar-striped progress-bar-animated"  role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100" 
              style="width: <?php
              echo $progress . '%'; ?>"> 
              <?php 
              echo $tshirtNumber . ' tshirt preordered!' ; 
              ?>
              </div>
            </div>
          </div>
        </div>
        <script async src="https://www.googletagmanager.com/gtag/js?id=UA-68566370-4"></script>
          <script>
            window.dataLayer = window.dataLayer || [];
            function gtag(){dataLayer.push(arguments);}
            gtag('js', new Date());
            gtag('config', 'UA-68566370-4');
            </script>
  </body>
</html>
