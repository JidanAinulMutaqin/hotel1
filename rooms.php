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

<div class="container mt-4 ">
<div class="d-flex justify-content-between">

    <div>
        <h3>Data Kamar</h3>
        <hr>
    </div>

    <form action="" class="d-flex p-2">
        <input type="search" class="form-control me-2 p-1 m-1" placeholder="Search">
        <button class="btn btn-sml btn-danger p-1 m-1 text-white">Search</button>
    </form>
    <br>

</div>


   <div class="row">

        <div class="col-md-3">
    
            <div class="card mb-3">
                <div class="card-header">
                    <img src="img/room2.jpg" class="rounded mx-auto d-block"alt="" height="80px"> 
                </div>
                <div class="card-body">
                    <div>
                        <h3>Family Suite</h3>
                    </div>
                    <div>
                        <p>Rasakan liburan keluarga yang menyenangkan tanpa mengorbankan kenyamanan. Nikmati sarapan lezat gratis yang disajikan untuk 4 orang dewasa dan 2 anak (di bawah 5 tahun). Family Suite kami dilengkapi dengan kamar mandi menakjubkan yang mencakup bathtub dan bilik shower.</p>
                    </div>
                    <div>
                        <p>Harga: IDR 360.000 </p>
                    </div>
                </div>
                <div class="card-footer">
                <div>
                    <a href="reservasi.php" class="btn btn-sml btn-danger p-1 m-1 text-white"><b>BOOK NOW</b></a>
                </div>
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