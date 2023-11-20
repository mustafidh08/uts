<?php
session_start();

include('connection.php'); // Sisipkan file koneksi database

function cleanInput($data)
{
  global $conn;
  return mysqli_real_escape_string($conn, $data);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $name = cleanInput($_POST["login_name"]);
  $email = cleanInput($_POST["login_email"]);
  $password = cleanInput($_POST["login_password"]);

  // Hash kata sandi sebelum disimpan di database
  $hashed_password = password_hash($password, PASSWORD_DEFAULT);

  // Periksa apakah email sudah digunakan
  $check_email_query = "SELECT * FROM users WHERE email = '$email'";
  $check_email_result = mysqli_query($conn, $check_email_query);

  if ($check_email_result && mysqli_num_rows($check_email_result) > 0) {
    echo "Email sudah digunakan. Silakan gunakan email lain.";
  } else {
    // Tambahkan pengguna ke database
    $insert_user_query = "INSERT INTO users (name, email, password) VALUES ('$name', '$email', '$hashed_password')";
    $insert_user_result = mysqli_query($conn, $insert_user_query);

    if ($insert_user_result) {
      header ("Location: login.php");
    } else {
      echo "Error: " . mysqli_error($conn);
    }
  }

  mysqli_close($conn);
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

  <title>Rumah Impian | Daftar</title>
</head>

<body>
  <!-- register -->
  <div class="container px-4" style="margin-top: 10%">
    <div class="row">
      <div class="col-md-12 text-center">
        <h1 class="fw-bold text-success">Rumah Impian</h1>
        <h4 class="fw-bold mb-4">Daftar</h4>
      </div>
    </div>
    <div class="row justify-content-center">
      <div class="col-md-5">
        <form action="register.php" method="post">
          <!-- Name input -->
          <div class="form-outline mb-4">
            <input type="text" id="form4Example1" class="form-control" name="login_name" required/>
            <label class="form-label" for="form4Example1">Name</label>
          </div>

          <!-- Email input -->
          <div class="form-outline mb-4">
            <input type="email" id="form2Example1" class="form-control" name="login_email" required/>
            <label class="form-label" for="form2Example1">Email address</label>
          </div>

          <!-- Password input -->
          <div class="form-outline mb-4">
            <input type="password" id="form2Example2" class="form-control" name="login_password" required/>
            <label class="form-label" for="form2Example2">Password</label>
          </div>

          <!-- Submit button -->
          <button type="submit" class="btn btn-success btn-block mb-4" name="register">Daftar</button>

          <!-- Register buttons -->
          <div class="text-center">
            <p>Sudah punya akun? <a href="login.php">Masuk</a></p>
          </div>
        </form>
      </div>
    </div>
  </div>
  <!-- end register -->

  <!-- MDB -->
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.4.2/mdb.min.js"></script>
</body>

</html>