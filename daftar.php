<?php
$koneksi = mysqli_connect("172.31.31.70", "sikumpurworejoka_ika", "7K2qn*dyPGai", "sikumpurworejoka_2025");
?>

<!-- Menampung jika ada pesan -->
<?php 
  if(isset($_GET['pesan'])) 
  {  
?>
	<label style="color:red;"><?php echo $_GET['pesan']; ?></label><?php } ?>

<!doctype html>
<html lang="en">

<head>
<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<style>
body {
  margin: 0;
  padding: 0;
  height: 100vh;
}
#login .container #login-row #login-column #login-box {
  margin-top: 5px;
  max-width: 600px;
  height: 650px;
  border: 1px solid #9C9C9C;
  background-color: #EAEAEA;
}
#login .container #login-row #login-column #login-box #login-form {
  padding: 20px;
}
#login .container #login-row #login-column #login-box #login-form #register-link {
  margin-top: -85px;
}
</style>

</head>

<body>
  <!-- NAVBAR -->
  <nav class="navbar navbar-expand-lg navbar-light" style="background-color: #c2e935;">
    <div class="container-fluid">
      <a class="navbar-brand" href="#">SIKUM</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="index.html">Home</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
  <!-- AKHIR NAVBAR -->
       
  <!-- CONTENT -->
    <!-- form login -->
    <div id="login">
        <h2 class="text-center pt-6">Sistem Informasi Hukum</h2>
        <div class="container">
            <div id="login-row" class="row justify-content-center align-items-center">
                <div id="login-column" class="col-md-6">
                    <div id="login-box" class="col-md-12">
                        <form id="login-form" class="col mt-2" action="simpandaftar.php" method="post">
                            <h3 class="text-center text-info">Daftar</h3>
                            <div class="form-group">
                                <label for="text" class="text-info">Nama:</label><br>
                                <input type="text" name="nama" id="nama" class="form-control" required>
                            </div>
                            <div class="form-group">
                                <label for="nip" class="text-info">NIP:</label><br>
                                <input type="text" min="18" name="nip" id="nip" class="form-control" placeholder="---Isikan Angka NIP---" required>
                            </div>
                            <div class="form-group">
                                <label for="password" class="text-info">Password:</label><br>
                                <input type="password" name="pass" id="pass" class="form-control" required>
                            </div>
                            <div class="form-group">
                                <label for="password" class="text-info">Ulangi Password:</label><br>
                                <input type="password" name="pass2" id="pass2" class="form-control" required>
                            </div>
                            <div class="form-group">
                                <label for="text" class="text-info">No Whatsapp:</label><br>
                                <input type="text" name="nowa" id="nowa" class="form-control" required>
                            </div>
                            <div class="form-group">
                                        <label for="opd" class="text-info">OPD/ Dinas:</label><br>
                                        <select name="comboopd" id="comboopd" class="form-control" onchange="changeValue(this.value)" required>
                                            <option class="text-info" value="">---Silahkan Di Pilih---</option>
                                                    <?php  
                                                        $result = mysqli_query($koneksi, "select * from opd");  
                                                        
                                                        while ($data= mysqli_fetch_array($result))
                                                        {   
                                                            echo '<option name="tkodeopd"  value="' . $data['kodeopd'] . '">' . $data['kodeopd'] . '</option>';  
                                                        }
                                                    ?>          
                                        </select>
                            </div>
                            <div class="form-group">
                                <input type="submit" name="simpan" class="btn btn-info btn-md" value="Simpan">
                                <a href="index.html" class="btn btn-info btn-md">Batal</a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end form login -->
  <!-- AKHIR CONTENT -->
</body>

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
</html>