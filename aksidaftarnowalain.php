<?php
    include "koneksi.php";

    $kode = $_POST['kode'];
    $judul = $_POST['judul'];
    $comboopd = $_POST['comboopd'];
    $nowa = $_POST['nowa'];

    if(isset($_POST['btnsimpan']))
    {   
        if (!(is_numeric($nowa)))
        {
            echo "<SCRIPT>alert('Isikan dengan angka tanpa spasi');history.go(-1);</SCRIPT>";
        }  
        else
        {
            $sql = "UPDATE proseslain SET judul='$judul', kodeopd='$comboopd', nowa='$nowa' WHERE kodelain='$kode'";
            $query = mysqli_query($koneksi, $sql);

            echo "<SCRIPT>alert('Data Berhasil Disimpan');window.location='wanolain.php?id=$kode'</SCRIPT>";
        }
    }
?>


