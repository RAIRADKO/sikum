<?php
    include "headeruserhukum.php";
	
	$id = $_GET['id'];
	$show = mysqli_query($koneksi, "SELECT * FROM nomorpb WHERE nopb='$id'");
    $data = mysqli_fetch_array($show);
	if($data['tglturunpb']=='0000-00-00')
	{	
		echo "<SCRIPT>window.location='detailnomorpb5userhukum.php?id=$id'</SCRIPT>";
	}
	else
	{
        echo "<SCRIPT>window.location='detailnomorpb2userhukum.php?id=$id'</SCRIPT>";
    }

?>