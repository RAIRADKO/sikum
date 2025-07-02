<?php
    include "headeradmin.php";     
    include "funckodesk.php";

    $kode = @$_GET['kode'];
    $nomor = @$_GET['no'];

	$q_prosessk = mysqli_query($koneksi, "SELECT * FROM prosessk WHERE kodesk='$kode' AND nosk = '$nomor' ");
	
    if(mysqli_num_rows($q_prosessk) == 0)
	{	
		echo "<script>window.history.back()</script>";
	}
	else
	{
		$dt_prosessk = mysqli_fetch_array($q_prosessk);
    }
?>

<div class="container">
    <div class="row">
        <div class="col-lg-12 mt-2" style="min-height: 500px;">
            <div class="card">
                <h5 class="card-header">Ubah Judul SK</h5>
                    <div class="card-body">
                        <div class="row">
                            <div class="col">
                                <form class="form-horizontal" action="aksiubahjudulsk.php" method="POST">
                                    <div class="form-group">
                                        <label form="">Kode SK</label>
                                        <input type="text" class="form-control" name="kode" value="<?= $kode ?>" readonly>
                                    </div>
                                    <br>
                                    <div class="form-group">
                                        <label form="">Judul</label>
                                        <textarea class="form-control" name="judul" required><?= $dt_prosessk['judulsk']?></textarea>
                                    </div>
                                    <br>
                                    <div class="form-group">
                                        <label form="">Nomor SK</label>
                                        <input type="text" class="form-control" name="no" value="<?= $nomor?>" readonly>
                                    </div>
                                    <br>
                                    <button type="submit" class="btn btn-primary" name="btnsimpanprosessk"><i class="fa fa-save"></i> Simpan</button>
                                    <a href="dataprosessk.php" class="btn btn-danger"><i class="fa fa-reply-all"></i> Batal</a>
                                </form>
                            </div>
                        </div>
                    </div>
            </div>
        </div>
    </div>
</div>

<?php
    include "footer.html";
?>

<?php
if($_POST){
    $kode = $_POST['kode'];
    $no = $_POST['no'];
    $judul = $_POST['judul'];

    $q_proses = mysqli_query($koneksi, "UPDATE prosessk set judulsk = '".$judul."' WHERE kodesk='".$kode."' AND nosk = '".$no."' ");
    $q_nomor = mysqli_query($koneksi, "UPDATE nomorsk set judulsk = '".$judul."' WHERE kodesk='".$kode."' AND nosk = '".$no."' ");

    // echo "<SCRIPT>alert('Data Berhasil Disimpan');window.location='aksiubahjudulsk.php?kode=".$kode."&no=".$no."'</SCRIPT>";
    echo "<SCRIPT>alert('Data Berhasil Disimpan');window.location='https://sikum.purworejokab.go.id/dataprosessk.php'</SCRIPT>";

}