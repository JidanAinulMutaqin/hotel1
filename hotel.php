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
          <a class="nav-link active" aria-current="page" href="#">Home</a>
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

<img src="img/hotel1.jpg" class="img-fluid" alt="...">

<div class="container-fluid mt-3 md-3">
     <div class="text-center p-3"><h4><b>Penawaran Terbaik untuk Anda</b></h4></div>
</div>

<div class="container">
<div class="d-flex justify-content-center">
<div class="row">
<div class="card" style="width: 18rem;">
  <img src="img/room3.jpg" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">Presidential Suite</h5>
    <p class="card-text">Manjakan diri Anda dalam relaksasi total, Presidential Suite kami memberikan keseimbangan ideal antara keanggunan dan kenyamanan. Suite memiliki ruang kerja yang sangat indah, ruang tamu. . .</p>
    <a href="rooms.php" class="btn btn-danger">Baca Selengkapnya</a>
  </div>
</div>
<div class="card" style="width: 18rem;">
  <img src="img/room4.jpg" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">Pine Suite</h5>
    <p class="card-text">Setiap Pine Suite memiliki ruang tamu yang indah dan berperabotan. Cocok untuk liburan pasangan dengan tempat tidur king. Dilengkapi dengan kamar mandi yang meliputi. . .</p>
    <a href="rooms.php" class="btn btn-danger">Baca Selengkapnya</a>
  </div>
</div>
<div class="card" style="width: 18rem;">
  <img src="img/room2.jpg" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">Family Suite</h5>
    <p class="card-text">Rasakan liburan keluarga yang menyenangkan tanpa mengorbankan kenyamanan. Nikmati sarapan lezat gratis yang disajikan untuk 4 orang dewasa dan 2 anak (di bawah 5 tahun). Family Suite Kami. . .</p>
    <a href="rooms.php" class="btn btn-danger">Baca Selengkapnya</a>
  </div>
</div>
</div>
</div>
</div>

<footer class="text-center text-white mt-3" style="background-color: #21081a;">
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