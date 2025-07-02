<?php
  include "headeradmin.php";

	$id = $_GET['id'];
	$show = mysqli_query($koneksi, "SELECT * FROM nomorsk WHERE nosk='$id'");
	
	if(mysqli_num_rows($show) == 0)
	{	
		echo "<script>window.history.back()</script>";
	}
	else
	{
		$data = mysqli_fetch_assoc($show);	//mengambil data ke database yang nantinya akan ditampilkan di form edit di bawah
    }
?>


<form name="form" method="post" action="cetaknosk.php">
  <p align="center">&nbsp;</p>
  <table width="50%" border="5" align="center" cellpadding="5">
    <tr>
      <td colspan="3" align="center"><h1><strong><u>KARTU NOMOR SK</h1></td>
    </tr>
    <tr>
      <td width="30%">&nbsp;</td>
      <td width="4%">&nbsp;</td>
      <td width="66%">&nbsp;</td>
    </tr>
    <tr>
      <td>KODE SK</td>
      <td>:</td>
      <td><label for="tkode"></label>
         <input name="tkode" type="text" value="100.3.3.2" size="50"></td>
    </tr>
    <tr>
      <td>NOMOR SK</td>
      <td>:</td>
      <td><label for="tnosk"></label>
         <input name="tnosk" type="text" id="tnosk" value="<?php echo $data['nosk']?>" size="50" class="bg-warning" readonly></td>
    </tr>
    <tr>
      <td>TANGGAL SK</td>
      <td>:</td>
      <td><label for="ttglsk"></label>
        <input name="ttglsk" type="text" value="<?php echo date ('d-m-Y', strtotime($data['tglsk']))?>" size="50" class="bg-warning" readonly>
      </label></td>
    </tr>
    <tr>
      <td>JUDUL SK</td>
      <td>:</td>
      <td><label for="tjudul"></label>
      <input name="tjudul" type="text" value="<?php echo $data['judulsk']?>" size="50" class="bg-warning" readonly></td>
    </tr>
    <tr>
      <td>OPD/DINAS</td>
      <td>:</td>
      <td><label for="topd"></label>
      <input type="text" name="topd" class="bg-warning" size="50" value="<?php echo $data['kodeopd']?>" readonly></td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
    
    <tr>
      <td colspan="3"><label for="ttglturun"></label>
        <input name="ttglturun" type="text" class="bg-warning" value="<?php echo date ('d-m-Y', strtotime($data['tglturunsk']))?>" readonly>
      <label for="tkodesk"></label>
        <input name="tkodesk" type="text" class="bg-warning" value="<?php echo $data['kodesk']?>" readonly>
    </tr>
  </table>
  <p>&nbsp;</p>
  <table width="50%" border="0" align="center">
    <tr>                       
      <td width="50%" align="center"><input type="submit" class="btn btn-primary" name="btncetaknpsk" value="Cetak"></td>
      <td width="50%" align="center"><a href="datanomorsk.php" class="btn btn-danger" name="btnbatalnpsk" value="Batal">KELUAR</a></td>
    </tr>
  </table>
  <p align="center">&nbsp;</p>
</form>


<?php
    include "footer.html";
?>

