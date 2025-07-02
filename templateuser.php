<?php 
//memulai session yang disimpan pada browser
session_start();

//cek apakah sesuai status sudah login? kalau belum akan kembali ke form login
if($_SESSION['status']!="sudah_login"){
//melakukan pengalihan
header("location:login.php");
} 
?>

<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">

  <title></title>
</head>

<body>
  <!-- NAVBAR -->
  <nav class="navbar navbar-expand-lg navbar-light" style="background-color: #c2e935;">
    <div class="container-fluid">
      <a class="navbar-brand" href="#">SIKUM <?php echo $_SESSION['tahun']?></a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="index.html">Home</a>
          </li>

          <li class="nav-item dropdown">
            <a class="nav-link active dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown"
              aria-expanded="false">
              Informasi
            </a>
            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
              <li><a class="dropdown-item" href="dataprosesskuser.php">SK</a></li>
              <li><a class="dropdown-item" href="dataprosespbuser.php">Perbup</a></li>
              <li><a class="dropdown-item" href="dataproseslainuser.php">Lainnya</a></li>
            </ul>
          </li>

          <li class="nav-item">
            <a class="nav-link active" href="logout.php">Logout</a>
          </li>
        </ul>

        <form class="d-flex">
          <h3 class="text"> <?php echo $_SESSION['nama']; ?> </h3>
        </form>
      </div>
    </div>
  </nav>
  <!-- AKHIR NAVBAR -->

  <!-- CONTENT -->
  <div class="container" style="min-height: 500px;">
    <div class="row">
      <div class="col-lg-12 mt-2">
        <div class="jumbotron jumbotron-fluid bg-light">
          <div class="container">
            <h1 class="display-4">Selamat Datang <?php echo $_SESSION['nama']; ?> </h1>
            <p class="lead">Silahkan menggunakan aplikasi ini..</p>
          </div>
        </div>
      </div>
    </div>

    <div class="row mt-2">
      <div class="col">
      </div>


    </div>
  </div>
  <!-- AKHIR CONTENT -->

  <!-- FOOTER -->
  <footer class="mt-2 p-3 text-center text-white text-bold" style="background-color: rgb(0, 88, 0);">
    <p>Sistem Informasi Aplikasi Hukum &copy;2021 By <font color="green">Ika</font></p>
  </footer>
  <!-- AKHIR FOOTER -->

  <!-- Optional JavaScript; choose one of the two! -->

  <!-- Option 1: Bootstrap Bundle with Popper -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0"
    crossorigin="anonymous"></script>

  <!-- Option 2: Separate Popper and Bootstrap JS -->
  <!--
            <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.6.0/dist/umd/popper.min.js" integrity="sha384-KsvD1yqQ1/1+IA7gi3P0tyJcT3vR+NdBTt13hSJ2lnve8agRGXTTyNaBYmCR/Nwi" crossorigin="anonymous"></script>
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.min.js" integrity="sha384-nsg8ua9HAw1y0W1btsyWgBklPnCUAFLuTMS2G72MMONqmOymq585AcH49TLBQObG" crossorigin="anonymous"></script>
            -->
</body>

</html>