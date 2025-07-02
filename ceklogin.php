<?php 
session_start();
//include "koneksi.php";
// mengaktifkan session php
$username = $_POST['nip'];
$password = $_POST['pass'];
$tahun = $_POST['ttahun'];  

if ($tahun=="2020")
{
    $database="sikumpurworejoka_2020";
    $koneksi = mysqli_connect("172.31.31.70", "sikumpurworejoka_ika", "7K2qn*dyPGai", $database);

    if(!$koneksi) 
    {
        die("Maaf, Koneksi database $database gagal dr ceklogin php: ".mysqli_connect_error());
    }
}
else if ($tahun=="2021")
{
    $database="sikumpurworejoka_2021";
    $koneksi = mysqli_connect("172.31.31.70", "sikumpurworejoka_ika", "7K2qn*dyPGai", $database);

    if(!$koneksi) 
    {
        die("Maaf, Koneksi database $database gagal dr ceklogin php : ".mysqli_connect_error());
    }
}
else if ($tahun=="2022")
{
    $database="sikumpurworejoka_2022";
    $koneksi = mysqli_connect("172.31.31.70", "sikumpurworejoka_ika", "7K2qn*dyPGai", $database);

    if(!$koneksi) 
    {
        die("Maaf, Koneksi database $database gagal dr ceklogin php : ".mysqli_connect_error());
    }
}
else if ($tahun=="2023")
{
    $database="sikumpurworejoka_2023";
    $koneksi = mysqli_connect("172.31.31.70", "sikumpurworejoka_ika", "7K2qn*dyPGai", $database);

    if(!$koneksi) 
    {
        die("Maaf, Koneksi database $database gagal dr ceklogin php : ".mysqli_connect_error());
    }
}
else if ($tahun=="2024")
{
    $database="sikumpurworejoka_2024";
    $koneksi = mysqli_connect("172.31.31.70", "sikumpurworejoka_ika", "7K2qn*dyPGai", $database);

    if(!$koneksi) 
    {
        die("Maaf, Koneksi database $database gagal dr ceklogin php : ".mysqli_connect_error());
    }
}
else if ($tahun=="2025")
{
    $database="sikumpurworejoka_2025";
    $koneksi = mysqli_connect("172.31.31.70", "sikumpurworejoka_ika", "7K2qn*dyPGai", $database);

    if(!$koneksi) 
    {
        die("Maaf, Koneksi database $database gagal dr ceklogin php : ".mysqli_connect_error());
    }
}
else
{
    header("location:login.php?pesan=Maaf, gagal login, database $tahun tidak ditemukan.");
}


$result = mysqli_query($koneksi,"SELECT * FROM user where nipuser='$username' and paswod='$password'");
$cek = mysqli_num_rows($result);
if($cek > 0) 
    {
        $data = mysqli_fetch_assoc($result);
        //menyimpan session user, nama, status dan id login
        $_SESSION['nipuser'] = $data['nipuser'];
        $_SESSION['nama'] = $data['nama'];
        $_SESSION['level'] = $data['level'];
        $_SESSION['opd'] = $data['kodeopd'];
        $_SESSION['status'] = "sudah_login";
        $_SESSION['tahun'] = $tahun;
    
            if ($_SESSION['level']=="superadmin")
            {
                header("location:templateadmin.php");
            }
            else if ($_SESSION['level']=="userhukum")
            {
                header("location:templateuserhukum.php");
            }
            else
            {
                header("location:templateuser.php");
            }
            
        } 
        else 
        {
            header("location:login.php?pesan=Maaf, gagal login, data tidak ditemukan.");
        }
?>

