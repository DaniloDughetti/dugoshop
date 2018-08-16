<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Dugo official web shop">
    <meta name="author" content="Danilo Dughetti">
    <title>DugoShop</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/styles/dugoshop.css?v=1.5" rel="stylesheet">
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

<?php
      require('database/PreOrderUser.php');
      $preOrderUser = new PreOrderUser();
      $email =  $_POST["input-email"];
      $firstName =  $_POST["input-firstName"];
      $lastName =  $_POST["input-lastName"];
      $tshirtSize =  $_POST["input-tshirtSize"];
      $isPostParamsInit = isset($email) && isset($firstName) && isset($lastName) && isset($tshirtSize);
      $isInsertDone = true;
      try{
        if($isPostParamsInit){
          $isInsertDone = $preOrderUser->insertPreOrderUser($email, $firstName, $lastName, $tshirtSize);
          if($isInsertDone){
            $preOrderUser->sendConfirmEmail($email, $firstName);
          }
        }
      }catch(Exception $e){
        echo "Error " . $e->getMessage();
      }
      ?>    

  <?php
      $progress = 90 + ($preOrderUser->getPreOrderUserNumber()/500);
      $tshirtNumber = $progress * 500;
      $tshirtLeft = 50000 - $tshirtNumber;
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
              <a class="nav-link" href="index.php">Home
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
          <p class="lead">At 50k orders we'll start shipping your idol t-shirt! <span class="badge badge-primary"><?php 
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
            <?php 
            if($isPostParamsInit && $isInsertDone){
              echo "
              <div class=\"alert alert-success\" role=\"alert\">
                <h4 class=\"alert-heading\">Well done $firstName!</h4>
                  <p>Aww yeah, you successfully pre-ordered your awesome shirt and you will receive a confirmation email to $email when we'll reach 50k t-shirts pre-ordered</p>
                  <hr>
                  <p class=\"mb-0\"><b>Dugo is defenitively proud of you</b></p>
              </div>";
            }else{
              echo "
              <div class=\"alert alert-danger\" role=\"alert\">
                <h4 class=\"alert-heading\">Something gone wrong $firstName!</h4>
                  <p>It seems you had already ordered one tshirt or somebody else have your same email</p>
                  <hr>
                  <p class=\"mb-0\"><b>Please retry, dugo would be proud of you</b></p>
              </div>";
            }
            ?>
         
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
              echo $tshirtNumber . ' t-shirts pre-ordered!' ; 
              ?></div>
            </div>
      </div>
    </div>
  </body>
</html>
