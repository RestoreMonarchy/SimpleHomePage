<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="Michael Crow">
    <?php require("config.php"); ?>

    <title><?php echo $title; ?></title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css">

    <link rel="stylesheet" href="css/global.css">

    <link href="css/scrolling-nav.css" rel="stylesheet">
    <link href="css/header.css" rel="stylesheet">
    <link href="css/navbar.css" rel="stylesheet">
    <link href="css/sections.css" rel="stylesheet">
    <link href="css/servers.css" rel="stylesheet">
    
  </head> 

  <body id="page-top">

    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top" id="mainNav">
      <div class="container">
        <a class="navbar-brand js-scroll-trigger" href="#page-top"><?php echo $trans['nav']['brand']; ?></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
            <li>
              <a class="nav-link js-scroll-trigger" href="#page-top"><?php echo $trans['nav']['home']; ?></a>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link js-scroll-trigger" href="#servers"><?php echo $trans['nav']['servers']; ?></a>
            </li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="#store"><?php echo $trans['nav']['shop']; ?></a>
            </li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="#discord"><?php echo $trans['nav']['discord']; ?></a>
            </li>
          </ul>
        </div>
      </div>
    </nav>

    <header class="text-white">
      <div class="container text-center">
      <img class="img-fluid" src="img/logo.png" alt="" height="150" width="150">
        <h1><?php echo $trans['header']['title']; ?></h1>
        <p class="lead"><?php echo $trans['header']['description']; ?></p>
      </div>
    </header>

    <section id="servers">
      <div class="container">
        <div class="row">
          <div class="col-lg-8 mx-auto">
            <h2 class="text-center"><?php echo $trans['servers']['heading']; ?></h2>
            <div class="border"></div>
            <p class="lead text-center"><?php echo $trans['servers']['description']; ?></p>
            <div style="overflow-x:auto;">
              <table class="table">
                <thead>
                  <th scope="col">Game</th>
                  <th scope="col" class="text-center">Server Name</th>
                  <th scope="col">Map</th>
                  <th scope="col">Players</th>
                  <th scope="col">IP:Port</th>
                  <th scope="col">Status</th>
                </thead>
                <tbody>
                  <?php include("other\servers.php") ?>
                </tbody>
              </table>
            </div>        
          </div>
        </div>
      </div>
    </section>

    <section id="store">
      <div class="container">
        <div class="row">
          <div class="col-lg-8 mx-auto">
            <h2 class="text-center"><?php echo $trans['shop']['heading']; ?></h2>
            <div class="border"></div>
            <p class="lead text-center"><?php echo $trans['shop']['description']; ?></p><br><br>
            <div class="row ">
              <?php
                include('other/shops.php');              
              ?>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section id="discord">
      <div class="container">
        <div class="row">
          <div class="col-lg-8 mx-auto">
          <h2 class="text-center"><?php echo $trans['discord']['heading']; ?></h2>
            <div class="border"></div>
            <p class="lead text-center"><?php echo $trans['discord']['description']; ?></p><br><br>
            <div class="row">
              <?php
                include('other/discords.php');              
              ?>
            </div>
          </div>
        </div>
      </div>
    </section>

    <footer class="py-5 bg-dark">
      <div class="container">
        <p class="m-0 text-center text-white"><?php echo $trans['footer']['copyright']; ?></p>
        <p class="m-0 text-center text-white"><?php echo $trans['footer']['credits']; ?></p>
      </div>
    </footer>

    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>
    <script src="vendor/bootstrap-growl/jquery.bootstrap-growl.min.js"></script>

    <!-- Custom JavaScript for this theme -->
    <script src="js/scrolling-nav.js"></script>
    <script src="js/notifications.js"></script>

  </body>

</html>
