<?php
    include "koneksi.php";
	
	$id = $_GET['id'];
	$show = mysqli_query($koneksi, "SELECT * FROM nomorsk WHERE nosk='$id'");
	if(mysqli_num_rows($show) == 0)
	{	
		echo "<script>window.history.back()</script>";
	}
	else
	{
		$data = mysqli_fetch_array($show);	//mengambil data ke database yang nantinya akan ditampilkan di form edit di bawah
        if ($data['kodesk']=="")
        {
            echo "<SCRIPT>window.location='detailnomorsk.php?id=$id'</SCRIPT>";
        }
        else if ((!empty($data['kodesk'])) && ($data['tglturunsk']=='0000-00-00'))
        {
            echo "<SCRIPT>window.location='detailnomorsk3.php?id=$id'</SCRIPT>";
        }
        else if ((!empty($data['kodesk'])) && (!empty($data['tglturunsk'])))
        {
            echo "<SCRIPT>window.location='detailnomorsk4.php?id=$id'</SCRIPT>";
        }
        else
        {
            echo "<SCRIPT>alert('Data tidak ketemu');</SCRIPT>";
        }
    }
?>