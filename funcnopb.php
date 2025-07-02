<?php    
    // mengambil data barang dengan kode paling besar
    $query = mysqli_query($koneksi, "SELECT max(nopb) as kodeTerbesar FROM nomorpb");
    $data = mysqli_fetch_array($query);
    $nopb = $data['kodeTerbesar'];

    $noUrut= $nopb + 1;
    $nopb =$noUrut;

?>

