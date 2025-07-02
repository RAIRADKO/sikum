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
		$data = mysqli_fetch_array($show);	//mengambil data ke database yang nantinya akan ditampilkan di form edit di bawah
    }
?>


<div class="container">
    <div class="row">
        <div class="col-lg-12 mt-2" style="min-height: 500px;">
            <div class="card">
                <h5 class="card-header">DATA PROSES SK</h5>
                    <div class="card-body">
                        <div class="row">
                            <div class="col">
                                <form class="form-horizontal" action="aksieditprosessk.php" method="POST">
                                    <div class="form-group">
                                        <label form="">Kode SK</label>
                                        <input type="text" class="form-control" name="kodesk" value="<?php echo $data['kodesk']?>" readonly>
                                    </div>
                                    <br>
                                    <div class="form-group">
                                        <label form="">Tanggal Masuk</label>
                                        <?php
                                        if ($data['tglmasuksk'] == '0000-00-00')
                                            {
                                        ?>
                                        <input type="text" class="form-control" name="" value="<?php echo '';?>" readonly>
                                        <?php 
                                            }
                                        else 
                                            {
                                        ?>
                                        <input type="text" class="form-control" name="" value="<?php echo date ('d-m-Y', strtotime($data['tglmasuksk']));?>" readonly> <?php } ?>
                                    </div>
                                    <br>
                                    <div class="form-group">
                                        <label form="">Judul</label>
                                        <textarea type="text" class="form-control" name="judulsk" readonly> <?php echo $data['judulsk']?></textarea>
                                    </div>
                                    <br>
                                    <div class="form-group">
                                        <label form="">OPD/ Dinas</label>
                                        <input type="text" class="form-control" name="opd" value="<?php echo $data['kodeopd']?>" readonly>
                                    </div>
                                    <br>
                                    <div class="form-group">
                                        <label form="">Jumlah Ttd</label>
                                        <input type="text" class="form-control" name="jmlttd" value="<?php echo $data['jmlttdsk']?>" readonly>
                                    <div>
                                    <br>
                                    <div class="form-group">
                                        <label form="">Tanggal Naik Kabag</label>
                                        <?php
                                        if ($data['tglnaikkabag'] == '0000-00-00')
                                            {
                                        ?>
                                        <input type="text" class="form-control" name="" value="<?php echo '';?>" readonly>
                                        <?php 
                                            }
                                        else 
                                            {
                                        ?>
                                        <input type="text" class="form-control" name="" value="<?php echo date ('d-m-Y', strtotime($data['tglnaikkabag']));?>" readonly> <?php } ?>
                                    </div>
                                    <br>
                                    <div class="form-group">
                                        <label form="">Tanggal Naik Asisten</label>
                                        <?php
                                        if ($data['tglnaikass'] == '0000-00-00')
                                            {
                                        ?>
                                        <input type="text" class="form-control" name="" value="<?php echo '';?>" readonly>
                                        <?php 
                                            }
                                        else 
                                            {
                                        ?>
                                        <input type="text" class="form-control" name="" value="<?php echo date ('d-m-Y', strtotime($data['tglnaikass']));?>" readonly> <?php } ?>
                                    </div>
                                    <br>
                                    <div class="form-group">
                                        <label>Asisten</label>
                                        <input type="text" class="form-control" name="tkodeass" id="tkodeass" value="<?php echo $data['kodeass']?>"readonly>
                                    </div>
                                    <br>
                                    <div class="form-group">
                                        <label form="">Tanggal Turun</label>
                                        <?php
                                        if ($data['tglturunsk'] == '0000-00-00')
                                            {
                                        ?>
                                        <input type="text" class="form-control" name="" value="<?php echo '';?>" readonly>
                                        <?php 
                                            }
                                        else 
                                            {
                                        ?>
                                        <input type="text" class="form-control" name="" value="<?php echo date ('d-m-Y', strtotime($data['tglturunsk']));?>" readonly> <?php } ?>
                                    </div>
                                    <br>
                                    <div class="form-group">
                                        <label form="">Keterangan Proses SK</label>
                                        <textarea class="form-control" name="ketprosessk" value="" readonly><?php echo $data['ketprosessk'] ?></textarea>
                                    </div>
                                    <br>
                                    <div class="form-group">
                                        <label form="">Nomor SK</label>
                                        <input type="text" class="form-control" name="tnosk" value="<?php echo $data['nosk']?>" readonly>
                                    </div>
                                    <br>
                                    <a href="dataprosessk.php" class="btn btn-danger">Keluar</a>
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