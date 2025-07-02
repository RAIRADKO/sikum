<?php    
    $query = mysqli_query($koneksi, "SELECT max(kodepb) as kodeTerbesar FROM prosespb");
    $data = mysqli_fetch_array($query);
    $kodepb = $data['kodeTerbesar'];
 

    $urutan = (int) substr($kodepb, 3, 3);
 
    $urutan++;
 
    $huruf = "PB";
    $kodepb = $huruf . sprintf("%04s", $urutan);
?>

