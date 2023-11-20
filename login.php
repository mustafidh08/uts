<?php
session_start();

include('connection.php'); // Sisipkan file koneksi database

function cleanInput($data)
{
  global $conn;
  return mysqli_real_escape_string($conn, $data);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $email = cleanInput($_POST["login_email"]);
  $password = cleanInput($_POST["login_password"]);

  $query = "SELECT * FROM users WHERE email = '$email'";
  $result = mysqli_query($conn, $query);

  if ($result) {
    if (mysqli_num_rows($result) == 1) {
      $row = mysqli_fetch_assoc($result);
      if (password_verify($password, $row["password"])) {
        $_SESSION["user_id"] = $row["id"];
        $_SESSION["user_name"] = $row["name"];
        header("Location: index.php");
        exit();
      } else {
        echo "Kata sandi tidak valid.";
      }
    } else {
      echo "Akun dengan email tersebut tidak ditemukan.";
    }
  } else {
    echo "Error: " . mysqli_error($conn);
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

  <title>Rumah Impian | Masuk</title>
</head>

<body>
  <!-- login -->
  <div class="container px-4" style="margin-top: 10%">
    <div class="row">
      <div class="col-md-12 text-center">
        <h1 class="fw-bold text-success">Rumah Impian</h1>
        <h4 class="fw-bold mb-4">Masuk</h4>
      </div>
    </div>
    <div class="row justify-content-center">
      <div class="col-md-5">
        <form action="login.php" method="post">
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
          <button type="submit" class="btn btn-success btn-block mb-4" name="login">Masuk</button>

          <!-- Register buttons -->
          <div class="text-center">
            <p>Belum punya akun? <a href="register.php">Daftar</a></p>
          </div>
        </form>
      </div>
    </div>
  </div>
  <!-- end login -->

  <!-- MDB -->
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.4.2/mdb.min.js"></script>
</body>

</html>