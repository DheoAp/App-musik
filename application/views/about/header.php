<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="<?= base_url().'assets/bootstrap/bootstrap.min.css'?>">
  
  <title>About Me</title>
  <style>
    body{
      background-image: url('assets/vintage-wallpaper.png');
    }
    .card{
      background-color: #dfe4ea;
      margin: 50px auto;
    }
    
  </style>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <a class="navbar-brand" href="<?= base_url().'musik'?>">Dheo Apriansyah</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
    <div class="navbar-nav">
      <a class="nav-link active" href="<?= base_url().'about'?>">Home <span class="sr-only">(current)</span></a>
      <ul class="navbar-nav">
        <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Portfolio
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
          <a class="dropdown-item" href="<?= base_url().'musik'?>">App Musik</a>
          <!-- <a class="dropdown-item" href="#">Blog</a> -->
        </div>
        </li>
      </ul>
    </div>
  </div>
</nav>
