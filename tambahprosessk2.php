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
    }
?>

<div class="container">
    <div class="row">
        <div class="col-lg-12 mt-2" style="min-height: 500px;">
            <div class="card">
                <h5 class="card-header">Buat Nota Pengajuan</h5>
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
                                        <select name="comboopd" id="comboopd" class="form-control" onchange="changeValue(this.value)" required>
                                            <option value="">---Silahkan Di Pilih---</option>
                                                    <?php  
                                                        $result = mysqli_query($koneksi, "select * from opd");  
                                                        $jsArray = "var prdName = new Array();\n";
                                                        
                                                        while ($data= mysqli_fetch_array($result))
                                                        {   
                                                            echo '<option name="tkodeopd"  value="' . $data['kodeopd'] . '">' . $data['kodeopd'] . '</option>';  
                                                            $jsArray .= "prdName['" . $data['kodeopd'] . "'] = {tkodeass:'" . addslashes($data['kodeass']) . "'};\n";
                                                        }
                                                    ?>          
                                        </select>
                                    </div>
                                    <br>
                                    <div class="form-group">
                                        <label form="">Jumlah Ttd</label>
                                        <input type="text" class="form-control" name="jmlttd" id="angka" required>
                                    <div>
                                    <br>
                                    <div class="form-group">
                                        <label>Asisten</label>
                                        <input type="text" class="form-control" name="tkodeass" id="tkodeass" readonly>     
                                    </div>
                                    <br>
                                    <div class="form-group">
                                        <label form="">Keterangan</label>
                                        <textarea class="form-control" name="ketprosessk"></textarea>
                                    </div>
                                    <br>
                                    <div class="form-group">
                                        <label form="">Nomor Whatsapp</label>
                                        <input type="text" class="form-control" name="nowa">
                                    </div>
                                    <br>
                                    <div class="form-group">
                                        <label form="">Nomor SK</label>
                                        <input type="text" class="form-control" name="nosk" value="<?php echo $id ?>" readonly>
                                    </div>
                                    <br>
                                    <input type="submit" class="btn btn-primary" name="btnsimpanprosessk" value="Simpan">
                                    <a href="dataprosessk.php" class="btn btn-danger">Batal</a>
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