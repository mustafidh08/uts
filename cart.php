<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />

  <!-- Font Awesome -->
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet" />

  <!-- Google Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@200;400;700&display=swap" rel="stylesheet" />

  <!-- MDB -->
  <link href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.4.2/mdb.min.css" rel="stylesheet" />

  <!-- CSS -->
  <link rel="stylesheet" href="style.css" />

  <title>Rumah Impian | Keranjang</title>
</head>

<body>
  <!-- Navbar -->
  <nav class="navbar navbar-expand-lg shadow-0 py-3">
    <!-- Container wrapper -->
    <div class="container">
      <!-- Navbar brand -->
      <a class="navbar-brand me-2 text-success" href="https://mdbgo.com/"><strong>Rumah Impian</strong></a>

      <!-- Toggle button -->
      <button class="navbar-toggler" type="button" data-mdb-toggle="collapse" data-mdb-target="#navbarButtonsExample" aria-controls="navbarButtonsExample" aria-expanded="false" aria-label="Toggle navigation">
        <i class="fas fa-bars"></i>
      </button>

      <!-- Collapsible wrapper -->
      <div class="collapse navbar-collapse justify-content-center" id="navbarButtonsExample">
        <!-- Left links -->
        <ul class="navbar-nav mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link" href="index.php">Beranda</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Layanan</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Produk</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" href="#">Keranjang</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Kontak</a>
          </li>
        </ul>
        <!-- Left links -->
      </div>
      <div class="d-flex align-items-center">
        <a href="logout.php"><button type="button" class="btn btn-success me-3 rounded-0">LOGOUT</button></a>
      </div>
      <!-- Collapsible wrapper -->
    </div>
    <!-- Container wrapper -->
  </nav>
  <!-- end navbar -->

  <!-- cart -->
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-md-6 text-center">
        <h1 class="fw-bold text-success my-5">Keranjang Belanja</h1>
      </div>
    </div>
    <div class="row mb-5">
      <div class="col-md-12">
        <!-- Daftar Properti dalam Keranjang -->
        <ul class="list-group list-group-light mb-4">
          <!-- Item 1 -->
          <li class="list-group-item">
            <div class="row align-items-center">
              <div class="col-md-2">
                <img src="img/img8.jpg" alt="Properti 1" class="img-fluid" />
              </div>
              <div class="col-md-3">
                <h5 class="mb-0 fw-bold">Properti 1</h5>
              </div>
              <div class="col-md-4">
                <p class="mb-0">IDR.200.000.000</p>
              </div>
              <div class="col-md-3">
                <button class="btn btn-danger btn-sm float-right">Hapus</button>
              </div>
            </div>
          </li>

          <!-- Item 2 -->
          <li class="list-group-item">
            <div class="row align-items-center">
              <div class="col-md-2">
                <img src="img/img1.jpg" alt="Properti 2" class="img-fluid" />
              </div>
              <div class="col-md-3">
                <h5 class="mb-0 fw-bold">Properti 2</h5>
              </div>
              <div class="col-md-4">
                <p class="mb-0">IDR.200.000.000</p>
              </div>
              <div class="col-md-3">
                <button class="btn btn-danger btn-sm float-right">Hapus</button>
              </div>
            </div>
          </li>
        </ul>

        <!-- Total Harga -->
        <p>Total Harga: <strong>IDR.400.000.000</strong></p>

        <!-- Tombol Checkout -->
        <a href="checkout.php"><button class="btn btn-success btn-lg rounded-0 w-25">Bayar</button></a>
      </div>
    </div>
  </div>
  <!-- end cart -->

  <!-- footer -->
  <footer class="bg-black text-white text-center text-lg-start pt-5 pb-2">
    <!-- Grid container -->
    <div class="container p-4">
      <!--Grid row-->
      <div class="row">
        <!--Grid column-->
        <div class="col-lg-6 col-md-12 mb-4 mb-md-0">
          <h5 class="fw-bold">Rumah Impian</h5>
        </div>
        <!--Grid column-->

        <!--Grid column-->
        <div class="col-lg-6 col-md-12 mb-4 mb-md-0">
          <a class="text-white fw-bold me-3" href="">Beranda</a>
          <a class="text-white fw-bold me-3" href="">Layanan</a>
          <a class="text-white fw-bold me-3" href="">Produk</a>
          <a class="text-white fw-bold me-3" href="">Keranjang</a>
          <a class="text-white fw-bold" href="">Kontak</a>
        </div>
        <!--Grid column-->
      </div>
      <!--Grid row-->
    </div>
    <!-- Grid container -->

    <!-- Copyright -->
    <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2)">
      © 2023 Copyright:
      <a class="text-white" href="https://mdbootstrap.com/">Mustafidh All Right Reserved.</a>
    </div>
    <!-- Copyright -->
  </footer>
  <!-- end footer -->

  <!-- MDB -->
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.4.2/mdb.min.js"></script>
</body>

</html>