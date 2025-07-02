<?php
    include "headeruserhukum.php";
	
	$id = $_GET['id'];
	$show = mysqli_query($koneksi, "SELECT * FROM nomorsk WHERE nosk='$id'");
    $data = mysqli_fetch_array($show);
	if($data['tglturunsk']=='0000-00-00')
	{	
		echo "<SCRIPT>window.location='detailnomorsk5userhukum.php?id=$id'</SCRIPT>";
	}
	else
	{
        echo "<SCRIPT>window.location='detailnomorsk2userhukum.php?id=$id'</SCRIPT>";
    }

?>