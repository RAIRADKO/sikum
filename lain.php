<?php
    include "koneksi.php";

    $id = $_GET['id'];
    $show = mysqli_query($koneksi, "SELECT * FROM proseslain WHERE kodelain='$id'");

    if(mysqli_num_rows($show) == 0)
    {   
        echo "<script>window.history.back()</script>";
    }
    else
    {
        $data = mysqli_fetch_assoc($show);  //mengambil data ke database yang nantinya akan ditampilkan di form edit di bawah
        $kode=$data['kodeopd'];
    }

    if ($data['sedian']=="BUPATI")
    {
        echo "<SCRIPT>window.location='npbupati.php?id=$id'</SCRIPT>";
    }
    else if ($data['sedian']=="WABUP")
    {
        echo "<SCRIPT>window.location='npwabup.php?id=$id'</SCRIPT>";
    }
    else if ($data['sedian']=="SEKDA")
    {
        echo "<SCRIPT>window.location='npsekda.php?id=$id'</SCRIPT>";
    }
    else
    {
        echo "<SCRIPT>window.location='npass.php?id=$id'</SCRIPT>";
    }
?>
