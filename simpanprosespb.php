<?php
    include "koneksi.php";

    if(isset($_POST['btnsimpanprosespb']))
    {
        // ambil data dari formulir
        $kodepb = $_POST['kodepb'];
        $tglmasuk = $_POST['tglmasuk'] =="" ? "0000-00-00" : $_POST['tglmasuk'];
        $judulpb = $_POST['judulpb'];
        $comboopd = $_POST['comboopd'];
        $jmlttd = $_POST['jmlttd'];
        $kodeass = $_POST['tkodeass'];
        $ketprosespb = $_POST['ketprosespb'];
        $nopb = $_POST['nopb'];  
        $nowa = $_POST['nowa'];     
        
        if ($kodeass=='')
        {
            echo "<SCRIPT>alert('Silahkan ulangi pilihan OPD nya sampai kode asisten muncul');history.go(-1);</SCRIPT>";
        }
        else if ((!(is_numeric($nowa))) && ($nowa!==''))
        {
            echo "<SCRIPT>alert('Isikan dengan angka tanpa spasi');history.go(-1);</SCRIPT>";
        }  
        else
        {	
            $sql = "INSERT INTO prosespb (kodepb, tglmasukpb, judulpb, kodeopd, kodeass, jmlttdpb, ketprosespb, nowa, nopb) VALUE ('$kodepb','$tglmasuk','$judulpb','$comboopd', '$kodeass', '$jmlttd','$ketprosespb','$nowa', '$nopb')";
            $query = mysqli_query($koneksi, $sql);

            $sql2 = "UPDATE nomorpb SET judulpb='$judulpb', kodepb='$kodepb' WHERE nopb='$nopb'";
            $query2 = mysqli_query($koneksi, $sql2);

            echo "<SCRIPT>alert('Data Berhasil Disimpan');window.location='nppb.php?id=$kodepb'</SCRIPT>";
        }
    }
?>

