<?php
    include "koneksi.php";
    
    $id = $_GET['id'];
    $show = mysqli_query($koneksi, "SELECT * FROM prosespb WHERE kodepb='$id'");
    if(mysqli_num_rows($show) == 0)
    {   
        echo "<script>window.history.back()</script>";
    }
    else
    {
        $data = mysqli_fetch_array($show);  //mengambil data ke database yang nantinya akan ditampilkan di form edit di bawah
        if ($data['nopb']=="")
        {
            echo "<SCRIPT>window.location='detailprosespb.php?id=$id'</SCRIPT>";
        }
        else if ((!empty($data['nopb'])) && ($data['tglturunpb']=='0000-00-00'))
        {
            echo "<SCRIPT>window.location='detailprosespb3.php?id=$id'</SCRIPT>";
        }
        else if ((!empty($data['nopb'])) && (!empty($data['tglturunpb'])))
        {
            echo "<SCRIPT>window.location='detailprosespb4.php?id=$id'</SCRIPT>";
        }
        else
        {
            echo "<SCRIPT>alert('Data tidak ketemu');</SCRIPT>";
        }
    }
?>

