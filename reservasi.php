<?php

require 'functions.php';

if (isset($_POST["submit"])){
  // buat test
  // var_dump($_POST);
  //mysqli_error();

  //alert
  if (create($_POST)>0){
      echo
      "<script>
          alert('Data Berhasil Ditambahkan');
          document.location.href = 'guest.php';
      </script>";
  }
  else{
      echo 
      "<script>
          alert('Data Gagal Ditambahkan');
          document.location.href = 'guest.php';
      </script>";
  }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Red Vought Hotel</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
</head>
<body>
    

<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <div class="container-fluid">
    <a class="navbar-brand text-danger" style="font-family:Arial;" href="#"><i>Red Vought</i></a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link" aria-current="page" href="hotel.php">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Layanan</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Fasilitas</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="login.php">Login</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Contact</a>
        </li>
        <li>
          <div class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            More About
            </a>
              <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                <li><a class="dropdown-item" href="rooms.php">Data Kamar</a></li>
                <li><a class="dropdown-item" href="guest.php">Data Pengunjung</a></li>
              </ul>
          </div>
        </li>
      </ul>
    </div>
  </div>
</nav>


<form action="" method="post" class="row g-3 needs-validation p-4" novalidate>
  <div class="col-md-4">
    <label for="nama" class="form-label">Nama</label>
    <input name="nama" type="text" class="form-control" id="nama" required>
  </div>
  </div>
  <div class="col-md-3">
    <label for="kamar" class="form-label">Nomor Kamar</label>
    <select name="kamar" class="form-select" id="kamar" required>
      <option selected disabled value="">Choose...</option>
      <option>01</option>
      <option>02</option>
      <option>03</option>
      <option>04</option>
      <option>05</option>
      <option>06</option>
      <option>07</option>
      <option>08</option>
    </select>
  </div>
  <div class="col-md-2">
    <label for="cekin" class="form-label">Check-In</label>
    <input name="cekin" type="date" class="form-control" id="cekin" required>
  </div>

  <div class="col-md-4">
    <label for="cekout" class="form-label">Check-Out</label>
    <input name="cekout" type="date" class="form-control" id="cekout" required>
  </div>

  <div class="col-md-3">
    <label for="email" class="form-label">Email</label>
    <input name="email" type="email" class="form-control" id="email" required>
  </div>

  <div class="col-12">
    <button class="btn btn-danger" name="submit" type="submit">Submit</button>
  </div>
</form>

<footer class="text-center text-white fixed-bottom" style="background-color: #21081a;">
  <!-- Grid container -->
  <div class="container p-4"></div>
  <!-- Grid container -->

  <!-- Copyright -->
  <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
    © 2021 Copyright:
    <a class="text-white" href="http://localhost/hotel1/hotel.php">RedVought.com</a>
  </div>
  <!-- Copyright -->
</footer>

<script src="js/bootstrap.bundle.min.js"></script>

</body>
</html>