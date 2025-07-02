<?php
    include "koneksi.php";

    if(isset($_POST['btnsimpan']))
    {
        // ambil data dari formulir
        $nopb = $_POST['nopb'];
        $tglpb = $_POST['tglpb'] =="" ? "0000-00-00" : $_POST['tglpb'];
        $judulpb = $_POST['judulpb'];
        $comboopd = $_POST['comboopd'];
        $tseri = $_POST['tseri'];
        $tglundang = $_POST['tglundang'] =="" ? "0000-00-00" : $_POST['tglundang'];
        $pengebon = $_POST['pengebon'];
        $tglbon = $_POST['tglbon'] =="" ? "0000-00-00" : $_POST['tglbon'];
        $alasan = $_POST['alasan'];
        $kodepb = $_POST['kodepb'];

            //////// no urut nomor seri    
            $query = mysqli_query($koneksi, "SELECT max(noseri) as kodeTerbesar FROM nomorpb WHERE seri='$tseri'");
            $data = mysqli_fetch_array($query);
            $noseri = $data['kodeTerbesar'];
    
            $noUrut= $noseri + 1;
    
            $noseri =$noUrut;
            
         
            $sql = "INSERT INTO nomorpb (nopb, tglpb, judulpb, kodeopd, seri, noseri, tglpengundangan, tglturunpb, namabon, tglbon, alasanbonpb, kodepb) VALUE ('$nopb', '$tglpb', '$judulpb', '$comboopd', '$tseri', '$noseri', '$tglundang','0000-00-00', '$pengebon', '$tglbon','$alasan', '$kodepb')";
            
            $query = mysqli_query($koneksi, $sql);

            $sql2 = "UPDATE prosespb SET nopb='$nopb' WHERE kodepb='$kodepb'";
            $query2 = mysqli_query($koneksi, $sql2);
            
            echo "<SCRIPT>alert('Berhasil BON nomor');window.location='dataprosespb.php'</SCRIPT>";
        
    }
