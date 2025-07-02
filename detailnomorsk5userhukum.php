<?php
    include "headeruserhukum.php";
	
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

            <div class="card"><h5 class="card-header text-center text-white bg-secondary">INFORMASI DATA NOMOR SK</h5>
                <div class="card-body">
                    <div class="row">
                        <div class="col">

                            <div class="card"><h5 class="card-header">Data Nomor SK</h5>
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col">

                                            <div class="form-group">
                                                <label form="">Nomor SK</label>
                                                <input type="text" class="form-control" name="kodesk" value="<?php echo $data['nosk']?>" readonly>
                                            </div>
                                            <br>

                                            <div class="form-group">
                                                <label form="">Tanggal SK</label>
                                                    <?php if ($data['tglsk'] == '0000-00-00') { ?>
                                                <input type="text" class="form-control" name="" value="<?php echo '';?>" readonly>
                                                    <?php } else { ?>
                                                <input type="text" class="form-control" name="" value="<?php echo date ('d-m-Y', strtotime($data['tglsk']));?>" readonly> <?php } ?>
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
                                                <label form="">Tanggal Turun SK</label>
                                                    <?php if ($data['tglturunsk'] == '0000-00-00') { ?>
                                                <input type="text" class="form-control" name="" value="<?php echo '';?>" readonly>
                                                    <?php } else { ?>
                                                <input type="text" class="form-control" name="" value="<?php echo date ('d-m-Y', strtotime($data['tglturunsk']));?>" readonly> <?php } ?>
                                            </div>
                                            <br>

                                            <div class="form-group">
                                                <label form="">Keterangan</label>
                                                <textarea class="form-control" name="ketprosessk" value="" readonly><?php echo $data['ket'] ?></textarea>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>
                            <br>

                            <div class="card"><h5 class="card-header">Data Pengebon SK</h5>
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col">

                                            <div class="form-group">
                                                <label form="">Nama Pengebon</label>
                                                <input type="text" class="form-control" name="tnosk" value="<?php echo $data['namabon']?>" readonly>
                                            </div>
                                            <br>

                                            <div class="form-group">
                                                <label form="">Tanggal Saat Ngebon</label>
                                                    <?php if ($data['tglbon'] == '0000-00-00') { ?>
                                                <input type="text" class="form-control" name="" value="<?php echo '';?>" readonly>
                                                    <?php } else { ?>
                                                <input type="text" class="form-control" name="" value="<?php echo date ('d-m-Y', strtotime($data['tglbon']));?>" readonly> <?php } ?>
                                            </div>
                                            <br>

                                            <div class="form-group">
                                                <label form="">Alasan BON</label>
                                                <textarea class="form-control" name="alasan" value="" readonly><?php echo $data['alasanbonsk'] ?></textarea>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>
                            <br>

                            <div class="card"><h5 class="card-header">Data Pengambilan SK</h5>
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col">

                                            <div class="form-group">
                                                <label form="">Tanggal Ambil SK</label>
                                                <input type="text" class="form-control" name="" value="" readonly>
                                            </div>
                                            <br>

                                            <div class="form-group">
                                                <label form="">Nama Pengambil SK</label>
                                                <input type="text" class="form-control" name="" value="" readonly>
                                            </div>
                                            <br>

                                        </div>
                                    </div>
                                </div>
                            </div>
                            <br>

                            <a href="datanomorskuserhukum.php" class="btn btn-danger"><i class="fa fa-reply-all"></i> Keluar</a>

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