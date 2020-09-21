<?php

session_start();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GoDigital</title>
    <link rel="stylesheet" href="style1.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"> 
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</head>
<body>

  <header class="site-header">
    <section id="nav-bar">
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="#"><img src="images/logo.jpg"></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item">
              <a class="nav-link" href="#">HOME</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="account1.html">ABOUT US</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">FEATURES</a>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">CATEGORY</a>
                <div class="dropdown-menu">
                  <a class="dropdown-item" href="#">FOOD</a>
                  <a class="dropdown-item" href="#">EDUCATIONAL</a>
                  <a class="dropdown-item" href="#">MENS FASHION</a>
                  <div class="dropdown-divider"></div>
                  <a class="dropdown-item" href="#">WOMENS FASHION</a>
                  <a class="dropdown-item" href="#">AUTOMOBILE</a>
                  <a class="dropdown-item" href="#">FITNESS</a>
                  <a class="dropdown-item" href="#">TECHNOLOGY</a>
                  <a class="dropdown-item" href="#">ENTERTAINMENT</a>

                </div>
              </li>
            <li class="nav-item">
                <a class="nav-link" href="#">CONTACT US</a>
              </li>
              <li>
                <a href="logout.php">LOGOUT</a>
              </li>
          </ul>
        </div>
      </nav>
    </section>
      <section>
        <div class="leftside">
          <img src="image/logo.jpg">
        </div>
        <div class="rightside">
          <h1 class="heading1">Welcome</h1><h1 class="heading2"> to</h1> <h1 class="heading"> Advertising Maven</h1>
          <p>LOCAL FOR VOCAL</p>
          <button><a class="linkdesign" href="account1.html">LEARN MORE</a></button>
        </div>
  </section>
      </header>
     


    
</body>
</html>