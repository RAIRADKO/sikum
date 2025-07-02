<?php 
include "koneksi.php";

$_SESSION['tahun'] = $tahun;

//cek apakah sesuai status sudah login? kalau belum akan kembali ke form login
if($_SESSION['status']!="sudah_login"){
//melakukan pengalihan
header("location:login.php");
} 

if ($_SESSION['level']!=="superadmin")
{
	header("location:templateuser.php");
}

// SK ....
$show = mysqli_query($koneksi, "SELECT * FROM nomorsk");
$jmlsk = mysqli_num_rows($show);

$show2 = mysqli_query($koneksi, "SELECT * FROM nomorsk WHERE tglturunsk !='0000-00-00'");
$jmlskturun = mysqli_num_rows($show2);

$show3 = mysqli_query($koneksi, "SELECT * FROM nomorsk WHERE namabon !='' AND tglturunsk ='0000-00-00'");
$jmlskbon = mysqli_num_rows($show3);

$show5 = mysqli_query($koneksi, "SELECT * FROM nomorsk WHERE namapengambilsk =''");
$jmlskblmdiambil = mysqli_num_rows($show5);

// PERBUP ....
$show6 = mysqli_query($koneksi, "SELECT * FROM nomorpb");
$jmlpb = mysqli_num_rows($show6);

$show7 = mysqli_query($koneksi, "SELECT * FROM nomorpb WHERE tglturunpb !='0000-00-00'");
$jmlpbturun = mysqli_num_rows($show7);

$show8 = mysqli_query($koneksi, "SELECT * FROM nomorpb WHERE namabon !='' AND tglturunpb ='0000-00-00'");
$jmlpbbon = mysqli_num_rows($show8);

$show10 = mysqli_query($koneksi, "SELECT * FROM nomorpb WHERE namapengambilpb =''");
$jmlpbblmdiambil = mysqli_num_rows($show10);

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
            <a class="nav-link active" aria-current="page" href="templateadmin.php">Home</a>
          </li>

          <li class="nav-item dropdown">
            <a class="nav-link active dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown"
              aria-expanded="false">
              Data Master
            </a>
            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
              <li><a class="dropdown-item" href="dataass.php">Asisten</a></li>
              <li><a class="dropdown-item" href="dataopd.php">Dinas/OPD</a></li>
            </ul>
          </li>

          <li class="nav-item dropdown">
            <a class="nav-link active dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown"
              aria-expanded="false">
              SK
            </a>
            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
              <li><a class="dropdown-item" href="dataprosessk.php">Proses SK</a></li>
              <li><a class="dropdown-item" href="datanomorsk.php">Penomoran SK</a></li>
            </ul>
          </li>

          <li class="nav-item dropdown">
            <a class="nav-link active dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown"
              aria-expanded="false">
              PERBUP
            </a>
            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
              <li><a class="dropdown-item" href="dataprosespb.php">Proses PERBUP</a></li>
              <li><a class="dropdown-item" href="datanomorpb.php">Penomoran PERBUP</a></li>
            </ul>
          </li>

          <li class="nav-item dropdown">
            <a class="nav-link active dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown"
              aria-expanded="false">
              LAINNYA
            </a>
            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
              <li><a class="dropdown-item" href="dataproseslain.php">SK Lainnya</a></li>
            </ul>
          </li>

          <li class="nav-item">
            <a class="nav-link active" href="laporan.php">LAPORAN</a>
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
        <div class="card" style="height: 20rem;">
          <div class="card-body">
            <h5 class="card-title">SK</h5>
            <p class="card-text" style="height: 1rem;">Jumlah Nomor SK : <?php echo $jmlsk;?></p>
            <p class="card-text" style="height: 1rem;">Jumlah SK yang sudah di ttd : <?php echo $jmlskturun;?></p>
            <p class="card-text" style="height: 1rem;">Jumlah SK yang BON belum beres : <?php echo $jmlskbon;?></p>
            <p class="card-text" style="height: 2rem;">Jumlah SK yang belum Diambil : <?php echo $jmlskblmdiambil;?></p> 
            <a href="datanomorsk.php" class="btn btn-primary">Penomoran SK</a>
          </div>
        </div>
      </div>
      <div class="col">
        <div class="card" style="height: 20rem;">
          <div class="card-body">
            <h5 class="card-title">Penomoran PERBUP</h5>
            <p class="card-text" style="height: 1rem;">Jumlah Nomor Perbup : <?php echo $jmlpb;?></p>
            <p class="card-text" style="height: 1rem;">Jumlah Perbup yang sudah di ttd : <?php echo $jmlpbturun;?></p>
            <p class="card-text" style="height: 1rem;">Jumlah Perbup yang BON belum beres : <?php echo $jmlpbbon;?></p>
            <p class="card-text" style="height: 2rem;">Jumlah Perbup yang belum Diambil : <?php echo $jmlpbblmdiambil;?></p>                
            <a href="datanomorpb.php" class="btn btn-primary">Penomoran PERBUP</a>          
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- AKHIR CONTENT -->

  <!-- FOOTER -->
  <footer class="mt-2 p-3 text-center text-white text-bold" style="background-color: rgb(0, 88, 0);">
    <p>Sistem Informasi Aplikasi Hukum &copy;2021 By Ika Yuliyanti</p>
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