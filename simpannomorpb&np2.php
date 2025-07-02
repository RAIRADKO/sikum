<?php
    include "koneksi.php";

    if(isset($_POST['btnsimpan']))
    {
        // ambil data dari formulir
        $nopb = $_POST['nopb'];
        $tglpb = $_POST['tglpb'] =="" ? "0000-00-00" : $_POST['tglpb'];
        $judulpb = $_POST['judulpb'];
        $comboopd = $_POST['comboopd'];
        $kodeass = $_POST['tkodeass'];
        $tseri = $_POST['tseri'];
        $tundang = $_POST['ttglundang'];
        $jmlttd = $_POST['jmlttd'];
        $pengebon = $_POST['pengebon'];
        $tglbon = $_POST['tglbon'] =="" ? "0000-00-00" : $_POST['tglbon'];
        $alasan = $_POST['alasan'];
        $kodepb = $_POST['kodepb'];
        $nowa = $_POST['nowa'];

        if ($kodeass=='')
        {
            echo "<SCRIPT>alert('Silahkan ulangi pilihan OPD nya sampai kode asisten muncul');history.go(-1);</SCRIPT>";
        }
        else if ($tseri=='')
        {
            echo "<SCRIPT>alert('Silahkan ulangi pilihan Kategori nya sampai seri nya muncul');history.go(-1);</SCRIPT>";
        }
        else if (!(is_numeric($nowa)))
        {
            echo "<SCRIPT>alert('Isikan No WA dengan angka tanpa spasi');history.go(-1);</SCRIPT>";
        }
        else
        {
            //////// no urut nomor seri    
            $query = mysqli_query($koneksi, "SELECT max(noseri) as kodeTerbesar FROM nomorpb WHERE seri='$tseri'");
            $data = mysqli_fetch_array($query);
            $noseri = $data['kodeTerbesar'];
    
            $noUrut= $noseri + 1;
    
            $noseri =$noUrut;

            $sql = "INSERT INTO nomorpb (nopb, tglpb, judulpb, kodeopd, seri, noseri, tglpengundangan, namabon, tglbon, alasanbonpb, kodepb) VALUE ('$nopb','$tglpb','$judulpb','$comboopd', '$tseri', '$noseri', '$tundang', '$pengebon', '$tglbon','$alasan', '$kodepb')";
            $query = mysqli_query($koneksi, $sql);

            $sql2 = "INSERT INTO prosespb(kodepb, tglmasukpb, judulpb, kodeopd,  kodeass, jmlttdpb, nopb, nowa) VALUE ('$kodepb','$tglbon','$judulpb','$comboopd', '$kodeass', '$jmlttd', '$nopb', '$nowa')";
            $query2 = mysqli_query($koneksi, $sql2);
            
            echo "<SCRIPT>alert('PB telah berhasil di BON nomor kan');window.location='nppb.php?id=$kodepb'</SCRIPT>";
        }
    }
?>

