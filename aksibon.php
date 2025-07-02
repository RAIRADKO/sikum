<?php
    include "headeradmin.php";     
    include "funckodesk.php";

    $id = $_GET['id'];
	$show = mysqli_query($koneksi, "SELECT * FROM nomorsk WHERE nosk='$id'");
	if(mysqli_num_rows($show) == 0)
	{	
		echo "<script>window.history.back()</script>";
	}
	else
	{
		$data = mysqli_fetch_array($show);	//mengambil data ke database yang nantinya akan ditampilkan di form edit di bawah
        $kode=$data['kodeopd'];

        $show2 = mysqli_query($koneksi, "SELECT * FROM nomorsk INNER JOIN opd ON nomorsk.kodeopd=opd.kodeopd WHERE nosk='$id'");       
        $data2 = mysqli_fetch_array($show2); 
    }
?>

<div class="container">
    <div class="row">
        <div class="col-lg-12 mt-2" style="min-height: 500px;">
            <div class="card">
                <h5 class="card-header">Nota Pengajuan + BON Nomor SK</h5>
                    <div class="card-body">
                        <div class="row">
                            <div class="col">
                                <form class="form-horizontal" action="simpanprosessk.php" method="POST">
                                    <div class="form-group">
                                        <label form="">Kode SK</label>
                                        <input type="text" class="form-control" name="kodesk" value="<?php echo $kodesk ?>" readonly>
                                    </div>
                                    <br>
                                    <div class="form-group">
                                        <label form="">Tanggal Masuk</label>
                                        <input type="date" class="form-control" name="tglmasuk" value = "" required>
                                    </div>
                                    <br>
                                    <div class="form-group">
                                        <label form="">Judul</label>
                                        <textarea class="form-control" name="judulsk" required><?php echo $data['judulsk']?></textarea>
                                    </div>
                                    <br>
                                    <div class="form-group">
                                        <label>OPD/ Dinas</label>
                                        <input type="text" class="form-control" name="comboopd" value="<?php echo $data['kodeopd']?>" readonly>
                                    </div>
                                    <br>
                                    <div class="form-group">
                                        <label form="">Jumlah Ttd</label>
                                        <input type="text" class="form-control" name="jmlttd" id="angka" required>
                                    <div>
                                    <br>
                                    <div class="form-group">
                                        <label>Asisten</label>
                                        <input type="text" class="form-control" name="tkodeass" id="tkodeass" value="<?php echo $data2['kodeass']?>" readonly>     
                                    </div>
                                    <br>
                                    <div class="form-group">
                                        <label form="">Keterangan</label>
                                        <textarea class="form-control" name="ketprosessk"></textarea>
                                    </div>
                                    <br>
                                    <div class="form-group">
                                        <label form="">Nomor Whatsapp</label>
                                        <input type="text" class="form-control" name="nowa" value="">
                                    </div>
                                    <br>
                                    <div class="form-group">
                                        <label form="">Nomor SK</label>
                                        <input type="text" class="form-control" name="nosk" value="<?php echo $id?>" readonly>
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

<script type="text/javascript"> 
<?php echo $jsArray; ?>
function changeValue(x){
    document.getElementById('tkodeass').value = prdName[x].tkodeass;
};
</script>