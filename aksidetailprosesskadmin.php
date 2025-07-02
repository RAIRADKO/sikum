<?php
    include "koneksi.php";
	
	$id = $_GET['id'];
	$show = mysqli_query($koneksi, "SELECT * FROM prosessk WHERE kodesk='$id'");
	if(mysqli_num_rows($show) == 0)
	{	
		echo "<script>window.history.back()</script>";
	}
	else
	{
		$data = mysqli_fetch_array($show);	//mengambil data ke database yang nantinya akan ditampilkan di form edit di bawah
        if (empty($data['nosk']))
        {
            echo "<SCRIPT>window.location='detailprosessk.php?id=$id'</SCRIPT>";
        }
        else if ((!empty($data['nosk'])) && ($data['tglturunsk']=='0000-00-00'))
        {
            echo "<SCRIPT>window.location='detailprosessk3.php?id=$id'</SCRIPT>";
        }
        else if ((!empty($data['nosk'])) && (!empty($data['tglturunsk'])))
        {
            echo "<SCRIPT>window.location='detailprosessk4.php?id=$id'</SCRIPT>";
        }
        else
        {
            echo "<SCRIPT>alert('Data tidak ketemu');</SCRIPT>";
        }
    }
?>