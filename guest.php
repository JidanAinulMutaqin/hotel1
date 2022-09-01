<?php

require 'functions.php';
$salman = query ("SELECT * FROM datapengunjung ORDER BY id DESC");

//tombol search
if (isset($_POST["temukan"])){
  $salman = temukan($_POST['search']);
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
                <li><a class="dropdown-item" href="#">Data Pengunjung</a></li>
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
        <h3>Data Pengunjung</h3>
        <hr>
    </div>

    <form action="" method="post" class="d-flex p-2">
        <input name="search" type="search" class="form-control me-2 p-1 m-1" autocomplete="off" placeholder="Search">
        <button name="temukan" type="submit" class="btn btn-sml btn-danger p-1 m-1 text-white">Search</button>
    </form>
    <br>

      <a href="reservasi.php" class="btn btn-sml btn-outline-danger p-1 m-1 mb-4">Reservasi</a>

</div>
</div>

<div class="container p-3 my-3 bg-white">
    <table class="table table-striped">
    <thead>
        <tr>
        <th scope="col">No</th>
        <th scope="col">Nama</th>
        <th scope="col">No Kamar</th>
        <th scope="col">Check in</th>
        <th scope="col">Check out</th>
        <th scope="col">Email</th>
        <th scope="col">Action</th>
        </tr>
    </thead>
    <tbody>
        <?php  $i=1; ?>
        <?php foreach ($salman as $row): ?>
        <tr>
        <th><?= $i; ?></th>
        <td><?= $row["nama"]; ?></td>
        <td><?= $row["kamar"]; ?></td>
        <td><?= $row["cekin"]; ?></td>
        <td><?= $row["cekout"]; ?></td>
        <td><?= $row["email"]; ?></td>
        <td>
        <a href="hapus.php?id=<?=$row["id"];?>" onclick="return confirm('Anda Yakin Ingin Mengahapus?')" class="btn btn-sml btn-outline-dark">Hapus</a>
        <a href="update.php?id=<?=$row["id"];?>" class="btn btn-sml btn-outline-danger">Ubah</a>                    
        </td>
        </tr>
        <?php $i++; ?>
        <?php endforeach ?>
    </tbody>
    </table>
</div>
</div>

<footer class="text-center text-white mt-3" style="background-color: #21081a;">
  <!-- Grid container -->
  <div class="container-fluid p-4"></div>
  <!-- Grid container -->

  <!-- Copyright -->
  <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
    © 2021 Copyright:
    <a class="text-white" href="http ://localhost/hotel1/hotel.php">RedVought.com</a>
  </div>
  <!-- Copyright -->
</footer>

<script src="js/bootstrap.bundle.min.js"></script>

</body>
</html>