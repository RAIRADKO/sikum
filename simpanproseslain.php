<?php
    include "koneksi.php";

    if(isset($_POST['btnsimpan']))
    {
        // ambil data dari formulir
        $kode = $_POST['kode'];
        $tglmasuk = $_POST['tglmasuk'];
        $sedian = $_POST['combosedian'];
        $judul = $_POST['judul'];
        $comboopd = $_POST['comboopd'];
        $jmlttd = $_POST['jmlttd'];
        $kodeass = $_POST['tkodeass'];
        $ketproses = $_POST['ketproses'];   
        $nowa = $_POST['nowa'];
        
        if ($kodeass=='')
        {
            echo "<SCRIPT>alert('Silahkan ulangi pilihan OPD nya');history.go(-1);</SCRIPT>";
        }
        else if ((!(is_numeric($nowa))) && ($nowa!==''))
        {
            echo "<SCRIPT>alert('Isikan dengan angka tanpa spasi');history.go(-1);</SCRIPT>";
        }  
        else
        {	
            $sql = "INSERT INTO proseslain (kodelain, tglmasuk, sedian, judul, kodeopd, kodeass, tglturun, jmlttd, ket, nowa) VALUE ('$kode','$tglmasuk', '$sedian', '$judul','$comboopd', '$kodeass', '0000-00-00' ,'$jmlttd','$ketproses', '$nowa')";
            $query = mysqli_query($koneksi, $sql);

            echo "<SCRIPT>alert('Data Berhasil Disimpan');window.location='lain.php?id=$kode'</SCRIPT>";
        }
    }
?>

