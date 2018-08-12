<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>DugoShop</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/styles/dugoshop.css?v=1.5" rel="stylesheet">

  <?php
    require('database/PreOrderUser.php');
    try{
      $preOrderUser = new PreOrderUser();
      $progress = 90 + ($preOrderUser->getPreOrderUserNumber()/50);
      $tshirtNumber = $progress * 500;
      $tshirtLeft = 50000 - $tshirtNumber;
    } catch(Exception $e){
      die("ERROR: Could not connect. " . $e->getMessage());
    }
  ?>
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

      <div class="raw">
<div class="col-12 col-sm-12 col-md-14 col-lg-12 col-xl-12 text-center">
          
<div class="progress">
              <div class="progress-bar progress-bar-striped progress-bar-animated"  role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100" 
              style="width: <?php
              echo $progress . '%'; ?>"> 
              <?php 
              echo $tshirtNumber . ' tshirt preordered!' ; 
              ?></div>
            </div>
</div>

    </div>

    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  </body>
  <?php
  /*
$servername = "mysql";
$username = "root";
$password = "password";

    try{
      $pdo = new PDO("mysql:host=$servername;port=3306;dbname=dugoshop_db", $username, $password);
      // Set the PDO error mode to exception
      $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  } catch(PDOException $e){
      die("ERROR: Could not connect. " . $e->getMessage());
  }
   
  // Attempt select query execution
  try{
      $sql = "SELECT * FROM PreOrderUser";   
      $result = $pdo->query($sql);
      if($result->rowCount() > 0){
          echo "<table>";
              echo "<tr>";
                  echo "<th>id</th>";
                  echo "<th>first_name</th>";
                  echo "<th>last_name</th>";
                  echo "<th>email</th>";
              echo "</tr>";
          while($row = $result->fetch()){
              echo "<tr>";
                  echo "<td>" . $row['email'] . "</td>";
                  echo "<td>" . $row['firstName'] . "</td>";
                  echo "<td>" . $row['lastName'] . "</td>";
                  echo "<td>" . $row['shirtSize'] . "</td>";
              echo "</tr>";
          }
          echo "</table>";
          // Free result set
          unset($result);
      } else{
          echo "No records matching your query were found.";
      }
  } catch(PDOException $e){
      die("ERROR: Could not able to execute $sql. " . $e->getMessage());
  }
   
  // Close connection
  unset($pdo);
  */
?>
</html>
