<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Bare - Start Bootstrap Template</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/styles/dugoshop.css" rel="stylesheet">

  </head>

  <body>

    <!-- Navigation -->
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
              <a class="nav-link" href="dughettidanilo.com">Go to blog</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>

    <!-- Page Content -->
    <div class="container">
      <div class="row">
        <div class="col-lg-12 text-center">
          <h1 class="mt-5">Per-order now the hottest 2018 t-shirt</h1>
          <p class="lead">At 50k orders we'll start sending your idol t-shirt!</p>
          <ul class="list-unstyled">
            <li><img class="tshirt" src="assets/images/tshirt.png"></li>
            <li>
            <form>
              <div class="form-group">
                <input type="email" class="form-control" id="input-email" aria-describedby="email" placeholder="Email">
              </div>
              <div class="form-group">
                <input type="text" class="form-control" id="input-name" placeholder="Name">
              </div>
              <div class="form-group">
                <input type="text" class="form-control" id="input-surname" placeholder="Surname">
              </div>
              <div class="form-group">
              <select class="form-control">
                <option>Small</option>
                <option>Medium</option>
                <option>Large</option>
              </select>
              </div>
              <button type="submit" class="btn btn-primary">Pre-Order your awesome t-shirt now</button>
            </form>
            </li>
          </ul>
        </div>
      </div>
    </div>

    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  </body>
  <?php
$servername = "mysql";
$username = "root";
$password = "password";

try {
    $conn = new PDO("mysql:host=$servername;port=3306;dbname=dugoshop_db", $username, $password);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "Connected successfully"; 
    }
catch(PDOException $e)
    {
    echo "Connection failed: " . $e->getMessage();
    }
?>
</html>
