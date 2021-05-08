<?php
$data = file_get_contents('assets/js/pizza.json');
$menu = json_decode($data, true);

// var_dump($menu["menu"][0]["nama"]);
// 

$menu = $menu["menu"];

?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="./assets/css/bootstrap.min.css">

    <title>Hello, world!</title>
  </head>
  <body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
      <div class="container">
        <a class="navbar-brand" href="#">
          <img src="img/logo.png" height="30px" alt="">
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
          <div class="navbar-nav">
            <a class="nav-item nav-link active" href="#">Home</a>
          </div>
        </div>
      </div>
  </nav>

  <div class="container">
    <div class="row mt-3">
      <div class="col">
        <h1>All Menu</h1>
      </div>
    </div>
    
    <div class="row">
      <?php foreach ($menu as $row): ?>
      <div class="col-md-4">
        <div class="card mb-3">
          <img class="card-img-top" height="254px" src="img/menu/<?= $row["gambar"]; ?>">
          <div class="card-body">
            <h5 class="card-title"><?= $row["nama"]; ?></h5>
            <p class="card-text"><?= $row["deskripsi"] ?></p>
            <h5 class="card-title">Rp. <?= $row["harga"]?></h5>
            <a href="#" class="btn btn-danger">Pesan Sekarang</a>
          </div>
        </div>
      </div>
      <?php endforeach; ?>
    </div>
  </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="./assets/js/jquery-3.6.0.min.js"></script>
    <script src="./assets/js/bootstrap.min.js"></script>
    <script src="./assets/js/popper.min.js"></script>
  </body>
</html>