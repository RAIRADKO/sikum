<?php
  include "headeradmin.php";

	$id = $_GET['id'];
	$show = mysqli_query($koneksi, "SELECT * FROM prosessk WHERE kodesk='$id'");

	if(mysqli_num_rows($show) == 0)
	{	
		echo "<script>window.history.back()</script>";
	}
	else
	{
		$data = mysqli_fetch_assoc($show);	//mengambil data ke database yang nantinya akan ditampilkan di form edit di bawah
        $kode=$data['kodeopd'];
    }

    $a = mysqli_query($koneksi, "select namaass from prosessk inner join asisten on prosessk.kodeass = asisten.kodeass where kodeopd='$kode'");
    $row= mysqli_fetch_assoc($a)
?>

<div class="container">
    <div class="row">
        <div class="col mt-2" style="min-height: 500px;">
            <div class="card"><h5 class="card-header">NOTA DINAS</h5>
                <div class="card-body">

                    <form name="form1" method="post" action="cetaknpsk.php">
                        <div class="table-responsive row>
                            <div class="col">
                                <table class="table table-bordered">

                                    <tr>
                                        <td width="20%">Ditujukan Kepada</td>
                                        <td width="3%">:</td>
                                        <td colspan="2"><input name="tkpd" type="text" id="tkpd" class="form-control" value="Bupati Purworejo"></td>
                                    </tr>
                                    <tr>
                                        <td>Melalui</td>
                                        <td>:</td>
                                        <td colspan="2"><input name="tmll" type="text" id="tmll" class="form-control" value="Wakil Bupati Purworejo"></td>
                                    </tr>
                                    <tr>
                                        <td>Lewat</td>
                                        <td>:</td>
                                        <td width="7%"><input name="tnomor" type="text" id="tnomor" class="form-control" value="1."></td>
                                        <td><input name="tlwt" type="text" id="tlwt" class="form-control" value="Sekretaris Daerah Kab. Purworejo."></td>
                                    </tr>
                                    <tr>
                                        <td></td>
                                        <td></td>
                                        <td><input name="tnomor2" type="text" id="tnomor2" class="form-control" value="2."></td>
                                        <td><input name="tlwt2" type="text" id="tlwt2" class="form-control" value="<?php echo $row['namaass'] ?> Setda Kab.Purworejo."></td>
                                    </tr>
                                    <tr>
                                        <td>Dari</td>
                                        <td>:</td>
                                        <td colspan="2"><input name="tdari" type="text" id="tdari" class="form-control" value="Bagian Hukum Setda Kab.Purworejo"></td>
                                    </tr>
                                    <tr>
                                        <td>Perihal</td>
                                        <td>:</td>
                                        <td colspan="2"><input name="tjudul2" type="text" id="tjudul2" class="form-control" value="Keputusan Bupati Purworejo tentang"><input name="tjudul" type="text" id="tjudul" class="form-control" value="<?php echo $data['judulsk'] ?>" readonly></td>
                                    </tr>
                                    <tr>
                                        <td>Mohon untuk</td>
                                        <td>:</td>
                                        <td colspan="2"><input name="tmohon" type="text" id="tmohon" class="form-control" value="Tapak Asman"></td>
                                    </tr>
                                    <tr>
                                        <td>Tanda Tangan</td>
                                        <td>:</td>
                                        <td colspan="2"><input name="tttd" type="text" id="tttd" class="form-control" value="<?php echo $data['jmlttdsk'] ?> kali" readonly></td>
                                    </tr>
                                    <tr>
                                        <td>Lain-lain</td>
                                        <td>:</td>
                                        <td width="2%"><input name="t" type="text" id="t" class="form-control" value="-"></td>
                                        <td><input name="tlain" type="text" id="tlain" class="form-control" value="Materi dari <?php echo $data['kodeopd'] ?> Kab. Purworejo."></td>
                                    </tr>
                                    <tr>
                                        <td></td>
                                        <td></td>
                                        <td width="2%"><input name="t2" type="text" id="t2" class="form-control" value="-"></td>
                                        <td><input name="tlain2" type="text" id="tlain2" class="form-control" value="Tata Naskah telah mendapatkan koreksi dan revisi dari Bagian Hukum Setda Kab.Purworejo."></td>
                                    </tr>
                                    <tr>
                                        <td></td>
                                        <td></td>
                                        <td width="2%"><input name="t3" type="text" id="t3" class="form-control" value=""></td>
                                        <td><input name="tlain3" type="text" id="tlain3" class="form-control" value=""></td>
                                    </tr>
                                    <tr>
                                        <td></td>
                                        <td></td>
                                        <td colspan="2"><input name="ttgl" type="text" id="ttgl" class="form-control" value="Purworejo, <?php echo date('d F Y'); ?>"></td>
                                    </tr>
                                    <tr><td></td><td></td><td></td></tr>
                                    <tr>
                                        <td></td>
                                        <td></td>
                                        <td colspan="2"><input name="tkabag" type="text" id="tkabag" class="form-control" value="Kepala Bagian Hukum"></td>
                                    </tr>
                                    <tr>
                                        <td></td>
                                        <td></td>
                                        <td colspan="2"><input name="tkabag2" type="text" id="tkabag2" class="form-control" value="Setda Kabupaten Purworejo"></td>
                                    </tr>
                                    <tr><td></td><td></td><td colspan="2"></td></tr>
                                    <tr><td></td><td></td><td colspan="2"></td></tr>
                                    <tr><td></td><td></td><td colspan="2"></td></tr>
                                    <tr>
                                        <td></td>
                                        <td></td>
                                        <td colspan="2"><input name="tkabag3" type="text" id="tkabag3" class="form-control" value="Puguh Trihatmoko, SH, MH"></td>
                                    </tr>
                                    <tr>
                                        <td></td>
                                        <td></td>
                                        <td colspan="2"><input name="tkabag4" type="text" id="tkabag4" class="form-control" value="Pembina Tk I"></td>
                                    </tr>
                                    <tr>
                                        <td></td>
                                        <td></td>
                                        <td colspan="2"><input name="tnip" type="text" id="tnip" class="form-control" value="NIP. 19750829 199903 1 005"></td>
                                    </tr>
                                    <tr>
                                        <td><input name="tkode" type="text" id="tkode"  size="5%" value="<?php echo $data['kodesk'] ?>" readonly>
                                        <input name="tno" type="text" id="tno" size="5%" value="<?php echo $data['nosk'] ?>" readonly></td>
                                        <td></td>
                                        <td colspan="2"></td>
                                    </tr>
                                    <tr>
                                        <td></td>
                                        <td></td>
                                        <td colspan="2">
                                            <button type="submit" class="btn btn-primary" name="btncetak"><i class="fa fa-print"></i> Cetak</button>
                                            <a href="dataprosessk.php" class="btn btn-danger"><i class="fa fa-reply"></i> Kembali</a>
                                        </td>
                                    </tr>
                                    
                                </table>
                            </div>
                        </div>
                    </form>

                </div>
            </div>
        </div>
    </div>
</div>
                        


<?php
    include "footer.html";
?>
