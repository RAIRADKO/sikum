<?php
    session_start();

$host = "172.31.31.70"; // Nama hostnya
$username = "sikumpurworejoka_ika"; // Username
$password = "8*W21CBZNxkn%t9Fni4&"; // Password (Isi jika menggunakan password)
$tahun=$_SESSION['tahun'];
$year = date("Y");
$database="sikumpurworejoka_$year";
$koneksi = mysqli_connect($host, $username, $password, $database);


	if(!$koneksi) 
	{
		die("Maaf, Koneksi database $database gagal dr koneksi php : ".mysqli_connect_error());
	}


    if(isset($_POST['simpan']))
	{
		// ambil data dari formulir
		$nama = $_POST['nama'];
		$nip = $_POST['nip'];
        $pass = $_POST['pass'];
        $pass2 = $_POST['pass2'];
        $nowa = $_POST['nowa'];
        $opd = $_POST['comboopd'];
        $level = "user";

        // Isian form nama hanya boleh huruf dan spasi
        if (!preg_match("/^[a-zA-Z ]*$/",$nama)) 
        {
            echo "<SCRIPT>alert('Isikan kolom nama dengan huruf saja.');history.go(-1);</SCRIPT>";
        }
        else if (!(is_numeric($nip)))
        {
            echo "<SCRIPT>alert('Isikan kolom NIP dengan angka saja tanpa spasi');history.go(-1);</SCRIPT>";
        }   
        else if (strlen($nip) < 18)
        {
            echo "<SCRIPT>alert('Isikan NIP dengan benar, ada 18 digit.');history.go(-1);</SCRIPT>";
        }
        else if(strlen($pass) < 8)
        {
            echo "<SCRIPT>alert('Password minimal 8 digit.');history.go(-1);</SCRIPT>";
        }
        else if ($pass !== $pass2) 
        {
            echo "<SCRIPT>alert('Konfirmasi password harus sama dengan password !');history.go(-1);</SCRIPT>";
        }
        else
        {
            $tampilkan = mysqli_query($koneksi,"SELECT * FROM user where nipuser='$nip'");
		    $cek = mysqli_num_rows($tampilkan);
            
            if($cek > 0)
            {
                echo "<SCRIPT>alert('Maaf, user sudah pernah terdaftar');history.go(-1);</SCRIPT>";
            }
            else
            {
                $sql = "INSERT INTO user (nipuser, paswod, nama, nowa, kodeopd, level) VALUE ('$nip', '$pass', '$nama', '$nowa', '$opd', '$level')";
			    $query = mysqli_query($koneksi, $sql);

                echo "<SCRIPT>alert('Anda Berhasil Terdaftar, Silahkan login..');window.location='login.php'</SCRIPT>";
            }
			
        }
    }
?>