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

  <title>Rumah Impian | Beli</title>
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
            <a class="nav-link" href="#">Beranda</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Layanan</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Produk</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" href="cart.php">Keranjang</a>
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

  <!-- payment -->
  <div class="container py-5 pb-5 mb-5">
    <div class="row justify-content-center">
      <div class="col-md-6 text-center">
        <h1 class="mb-5 fw-bold text-success">Pembayaran</h1>
      </div>
    </div>
    <div class="row">
      <div class="col-md-5 border border-1 rounded py-4 px-4">
        <div class="d-flex flex-row justify-content-between">
          <img class="h-25" src="img/trash1.png" alt="" />
          <p>Detail Pembayaran</p>
        </div>
        <hr class="m-0" />
        <div class="scroll">
          <div class="mt-3">
            <div style="height: 20%" class="scroll d-flex flex-row mb-3 justify-content-between bg-light pt-3 px-3 rounded-4">
              <div class="col-md-4 mt-2">
                <button class="bg-transparent border-0"><i class="far fa-trash-can text-success"></i></button>
              </div>
              <div class="main">
                <p class="mb-0">Properti 1</p>
                <p style="font-size: 13px" class="mt-0 text-end text-muted">IDR.200.000.000</p>
              </div>
            </div>
            <div style="height: 20%" class="scroll d-flex flex-row mb-3 justify-content-between bg-light pt-3 px-3 rounded-4">
              <div class="col-md-4 mt-2">
                <button class="bg-transparent border-0"><i class="far fa-trash-can text-success"></i></button>
              </div>
              <div class="main">
                <p class="mb-0">Properti 2</p>
                <p style="font-size: 13px" class="mt-0 text-end text-muted">IDR.200.000.000</p>
              </div>
            </div>
          </div>
        </div>
        <hr class="m-0 mb-4" />
        <div class="d-flex flex-row justify-content-between">
          <p>Total</p>
          <p class="text-muted" style="font-size: 13px">IDR.400.000.000</p>
        </div>
        <a href="sukses.php"><button class="btn btn-success rounded-0 w-100" type="button">Beli <img src="img/card.png" alt="" /></button></a>
      </div>
      <div class="col-md-7">
        <div class="discount d-flex flex-row border border-1 align-items-center rounded py-1 px-5">
          <button type="button" class="btn btn-info w-25 h-50 me-3 shadow-0 text-capitalize">Use Discount</button>
          <div class="form-outline mb-4 w-50 me-5 mt-4">
            <input type="text" id="form2Example1" class="form-control" />
            <label class="form-label" for="form2Example1">Discount</label>
          </div>
          <div class="discount-p d-flex flex-row mt-3">
            <p class="me-2">Discount</p>
            <img height="20" src="img/discount-shape.png" alt="" />
          </div>
        </div>

        <a href="">
          <div class="debit d-flex flex-row border border-1 text-dark justify-content-center align-items-center rounded pt-4 pb-2 px-5 mt-4">
            <img class="me-3 mb-3" src="img/card-pos.png" alt="" />
            <div class="debit-p lh-1 text-center">
              <p style="font-size: 14px">Debit/Kredit</p>
              <p class="mt-0" style="font-size: 10px">PAYMENT METHOD</p>
            </div>
          </div>
        </a>

        <div class="bank border border-1 d-flex flex-row justify-content-center rounded py-4 mt-4">
          <div class="bank-img">
            <div class="d-flex flex-row justify-content-center">
              <p class="m-0">Payment</p>
              <img height="20" src="img/card.png" alt="" />
            </div>
            <div class="wadah">
              <form action="#">
                <input type="radio" name="payment" id="visa" />
                <input type="radio" name="payment" id="mastercard" />
                <input type="radio" name="payment" id="paypal" />
                <input type="radio" name="payment" id="AMEX" />

                <div class="category">
                  <label id="kotak" for="visa" class="visaMethod">
                    <div class="imgName">
                      <div class="imgContainer visa">
                        <img class="gambar" src="https://i.ibb.co/vjQCN4y/Visa-Card.png" alt="" />
                      </div>
                      <span class="name">VISA</span>
                    </div>
                    <span class="check"><i class="fa-solid fa-circle-check" style="color: #6064b6"></i></span>
                  </label>

                  <label id="kotak" for="mastercard" class="mastercardMethod">
                    <div class="imgName">
                      <div class="imgContainer mastercard">
                        <img class="gambar" src="https://i.ibb.co/vdbBkgT/mastercard.jpg" alt="" />
                      </div>
                      <span class="name">Mastercard</span>
                    </div>
                    <span class="check"><i class="fa-solid fa-circle-check" style="color: #6064b6"></i></span>
                  </label>

                  <label id="kotak" for="paypal" class="paypalMethod">
                    <div class="imgName">
                      <div class="imgContainer paypal">
                        <img class="gambar" src="https://i.ibb.co/KVF3mr1/paypal.png" alt="" />
                      </div>
                      <span class="name">Paypal</span>
                    </div>
                    <span class="check"><i class="fa-solid fa-circle-check" style="color: #6064b6"></i></span>
                  </label>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- end payment -->

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