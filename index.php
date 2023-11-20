<?php
session_start();

include('connection.php'); // Sisipkan file koneksi database

// Fungsi untuk membersihkan input dari potensi serangan SQL injection
function cleanInput($data)
{
  global $conn;
  return mysqli_real_escape_string($conn, $data);
}

// Periksa apakah pengguna sudah login
if (!isset($_SESSION["user_id"])) {
  // Jika belum login, arahkan ke halaman login
  header("Location: login.php");
  exit();
}

// Pengguna sudah login, lanjutkan dengan tampilan halaman beranda
$user_id = $_SESSION["user_id"];

// Ambil daftar produk dari database
$query_product = "SELECT * FROM product";
$result_product = mysqli_query($conn, $query_product);

if (!$result_product) {
  die("Error fetching products: " . mysqli_error($conn));
}
?>


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

  <title>Rumah Impian | Beranda</title>
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
            <a class="nav-link active" href="#">Beranda</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#layanan">Layanan</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#produk">Produk</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="cart.php">Keranjang</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#kontak">Kontak</a>
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

  <!-- jumbo -->
  <header>
    <!-- Background image -->
    <div class="p-5 text-center bg-image" style="background-image: url('img/img2.jpg'); height: 89.3vh">
      <div class="mask" style="background-color: rgba(0, 0, 0, 0.6)">
        <div class="d-flex justify-content-center align-items-center h-100">
          <div class="text-white">
            <h1 class="mb-3 fw-bold">
              Membantu Temukan <br />
              Rumah Impian.
            </h1>
            <p class="mb-3">
              Rumah Impian hadir untuk temukan rumah terbaik <br />
              untukmu, untuk di jual ataupun di sewa dengan <br />
              sumber terpercaya.
            </p>
            <a class="btn btn-light rounded-0 btn-lg fw-bold text-black" href="#produk" role="button">Temukan Rumah</a>
          </div>
        </div>
      </div>
    </div>
    <!-- Background image -->
  </header>
  <!-- end jumbo -->

  <!-- layanan -->
  <div class="container" id="layanan">
    <div class="row justify-content-center py-5 my-5">
      <div class="col-md-5 text-center">
        <h1 class="fw-bold text-success">Layanan Kami</h1>
        <p>Rumah impian hadir menjadi solusi bagi kamu</p>
      </div>
      <div class="col-md-12 mt-4">
        <div class="card-group">
          <div class="card me-5">
            <img src="img/img6.jpg" class="card-img-top" alt="Hollywood Sign on The Hill" />
            <div class="card-body text-center">
              <h5 class="card-title fw-bold text-success">Property Baru</h5>
              <p class="card-text">Rumah impian kini jadi kenyataan, Beli rumah bary dengan fasilitas terbaik dengan lingkungan yang nyaman.</p>
            </div>
          </div>
          <div class="card me-5">
            <img src="img/img1.jpg" class="card-img-top" alt="Palm Springs Road" />
            <div class="card-body text-center">
              <h5 class="card-title fw-bold text-success">Sewa Rumah</h5>
              <p class="card-text">Sewa rumah yang indah untuk keluarga anda, pilihan terbaik untuk tempat tinggal keluarga mu.</p>
            </div>
          </div>
          <div class="card">
            <img src="img/img7.jpg" class="card-img-top" alt="Los Angeles Skyscrapers" />
            <div class="card-body text-center">
              <h5 class="card-title fw-bold text-success">Beli Rumah</h5>
              <p class="card-text">Beli Rumah sempurna dengan harga terbaik kualitas terjamin dari sumber terpercaya.</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- end layanan -->

  <!-- search -->
  <!-- Background image -->
  <div class="p-5 text-center bg-image mb-5" style="background-image: url('img/img8.jpg'); height: 400px">
    <div class="mask" style="background-color: rgba(0, 0, 0, 0.6)">
      <div class="d-flex justify-content-center h-100 mt-5 pt-5">
        <div class="text-white">
          <h1 class="mb-3 fw-bold">Temukan Rumah Impianmu</h1>
          <p class="mb-3">
            sekarang Anda dapat menghemat semua hal stres, waktu, dan biaya <br />
            tersembunyi, dengan ratusan rumah untuk anda
          </p>
          <div class="input-group rounded-0">
            <div class="form-outline">
              <input type="search" id="form1" class="form-control" />
              <label class="form-label text-white" for="form1">Cari Rumah Impianmu</label>
            </div>
            <button type="button" class="btn btn-success">Cari</button>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- Background image -->
  <!-- end search -->

  <!-- rumah -->
  <div class="container mb-5" id="produk">
    <div class="row justify-content-center">
      <div class="col-md-10 text-center">
        <h1 class="fw-bold text-success my-5">Rekomendasi Rumah Untuk Mu</h1>
      </div>
    </div>
    <div class="row">
      <div class="col-md-12">
        <div class="row row-cols-1 row-cols-md-3 g-5">
          <?php
          while ($row = mysqli_fetch_assoc($result_product)) {
          ?>
            <div class="col">
              <div class="card h-100 rounded-0">
                <img src="<?php echo $row["image_url"]; ?>" class="card-img-top" alt="Hollywood Sign on The Hill" />
                <div class="card-body">
                  <h5 class="card-title mb-1 text-black fw-bold">IDR.<?php echo $row["price"]; ?></h5>
                  <p class="card-text mb-1"><?php echo $row["product_name"]; ?></p>
                  <span class="badge badge-info"><?php echo $row["status"]; ?></span> <br />
                  <form action="cart.php" method="post">
                    <input type='hidden' name='product_id' value='<?php echo $row['product_id']; ?>'>
                    <input class="btn btn-success rounded-0 mt-4" type='submit' value='+ Keranjang' name='add_to_cart'>
                  </form>
                </div>
              </div>
            </div>
          <?php
          }
          ?>
        </div>
      </div>
    </div>
  </div>
  <!-- end rumah -->

  <!-- contact -->
  <div class="container-fluid mt-5 pt-5" id="kontak">
    <div class="row">
      <!-- Background image -->
      <div class="p-5 text-center bg-image" style="background-image: url('img/img9.jpg'); height: 600px">
        <div class="mask" style="background-color: rgba(0, 0, 0, 0.6)">
          <div class="d-flex justify-content-center align-items-center h-100">
            <div class="col-6 px-5">
              <div class="text-white text-start ms-5">
                <h1 class="mb-3">
                  Butuh Konsultasi..? <br />
                  Silahkan kontak kami <br />
                  Kami Siap Membantu
                </h1>
                <p class="mb-3 fw-bold">Kontak</p>
                <p><i class="fa-solid fa-location-dot me-2"></i> Jl. Pelajar Pejuang 123 Bandung Indonesia</p>
                <p><i class="fa-solid fa-phone me-2"></i> 022-6545-2041</p>
                <p><i class="fa-solid fa-envelope me-2"></i> rumahimpian@gmail.com</p>
                <p class="mb-2 fw-bold">Sosial Media</p>
                <p><i class="fa-brands fa-facebook me-2"></i> <i class="fa-brands fa-twitter me-2"></i> <i class="fa-brands fa-instagram"></i></p>
              </div>
            </div>
            <div class="col-6 bg-white px-5 pb-5 pt-4" style="width: 40%">
              <h1 class="text-success fw-bold mb-4">ada pertanyaan..?</h1>
              <form action="">
                <div class="form-outline mb-4">
                  <input type="email" id="form4Example2" class="form-control" />
                  <label class="form-label" for="form4Example2">Email address</label>
                </div>
                <div class="form-outline mb-4">
                  <input type="text" id="form4Example1" class="form-control" />
                  <label class="form-label" for="form4Example1">Name</label>
                </div>
                <button type="button" class="btn btn-success btn-lg rounded-0 w-100">kirim</button>
              </form>
            </div>
          </div>
        </div>
      </div>
      <!-- Background image -->
    </div>
  </div>
  <!-- end contact -->

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