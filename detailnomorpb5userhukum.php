<?php
    include "headeruserhukum.php";
    
    $id = $_GET['id'];
        $show = mysqli_query($koneksi, "SELECT * FROM nomorpb WHERE nopb='$id'");
        if(mysqli_num_rows($show) == 0)
        {   
        echo "<script>window.history.back()</script>";
        }
        else
        {
            $data = mysqli_fetch_array($show);  //mengambil data ke database yang nantinya akan ditampilkan di form edit di bawah
        }

?>

<div class="container">
    <div class="row">
        <div class="col-lg-12 mt-2" style="min-height: 500px;">

            <div class="card"><h5 class="card-header text-center text-white bg-secondary">INFORMASI DATA NOMOR PB</h5>
                <div class="card-body">
                    <div class="row">
                        <div class="col">

                            <div class="card"><h5 class="card-header">Data Nomor PB</h5>
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col">

                                            <div class="form-group">
                                                <label form="">Nomor PB</label>
                                                <input type="text" class="form-control" name="kodepb" value="<?php echo $data['nopb']?>" readonly>
                                            </div>
                                            <br>

                                            <div class="form-group">
                                                <label form="">Tanggal PB</label>
                                                    <?php if ($data['tglpb'] == '0000-00-00') { ?>
                                                <input type="text" class="form-control" name="" value="<?php echo '';?>" readonly>
                                                    <?php } else { ?>
                                                <input type="text" class="form-control" name="" value="<?php echo date ('d-m-Y', strtotime($data['tglpb']));?>" readonly> <?php } ?>
                                            </div>
                                            <br>

                                            <div class="form-group">
                                                <label form="">Judul</label>
                                                <textarea type="text" class="form-control" name="judulpb" readonly> <?php echo $data['judulpb']?></textarea>
                                            </div>
                                            <br>

                                            <div class="form-group">
                                                <label form="">OPD/ Dinas</label>
                                                <input type="text" class="form-control" name="opd" value="<?php echo $data['kodeopd']?>" readonly>
                                            </div>
                                            <br>

                                            <div class="form-group">
                                                <label form="">Tanggal Pengundangan PB</label>
                                                    <?php if ($data['tglpengundangan'] == '0000-00-00') { ?>
                                                <input type="text" class="form-control" name="" value="<?php echo '';?>" readonly>
                                                    <?php } else { ?>
                                                <input type="text" class="form-control" name="" value="<?php echo date ('d-m-Y', strtotime($data['tglpengundangan']));?>" readonly> <?php } ?>
                                            </div>
                                            <br>

                                            <div class="form-group">
                                                <label form="">Seri</label>
                                                <input type="text" class="form-control" name="opd" value="<?php echo $data['seri']?>" readonly>
                                            </div>
                                            <br>

                                            <div class="form-group">
                                                <label form="">Nomor Seri</label>
                                                <input type="text" class="form-control" name="opd" value="<?php echo $data['noseri']?>" readonly>
                                            </div>
                                            <br>

                                            <div class="form-group">
                                                <label form="">Tanggal Turun PB</label>
                                                    <?php if ($data['tglturunpb'] == '0000-00-00') { ?>
                                                <input type="text" class="form-control" name="" value="<?php echo '';?>" readonly>
                                                    <?php } else { ?>
                                                <input type="text" class="form-control" name="" value="<?php echo date ('d-m-Y', strtotime($data['tglturunpb']));?>" readonly> <?php } ?>
                                            </div>
                                            <br>

                                            <div class="form-group">
                                                <label form="">Keterangan</label>
                                                <textarea class="form-control" name="ketprosespb" value="" readonly><?php echo $data['ket'] ?></textarea>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>
                            <br>

                            <div class="card"><h5 class="card-header">Data Pengebon PB</h5>
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col">

                                            <div class="form-group">
                                                <label form="">Nama Pengebon</label>
                                                <input type="text" class="form-control" name="tnopb" value="<?php echo $data['namabon']?>" readonly>
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
                                                <textarea class="form-control" name="alasan" value="" readonly><?php echo $data['alasanbonpb'] ?></textarea>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>
                            <br>

                            <div class="card"><h5 class="card-header">Data Pengambilan PB</h5>
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col">

                                            <div class="form-group">
                                                <label form="">Tanggal Ambil PB</label>
                                                <input type="text" class="form-control" name="" value="" readonly>
                                            </div>
                                            <br>

                                            <div class="form-group">
                                                <label form="">Nama Pengambil PB</label>
                                                <input type="text" class="form-control" name="" value="" readonly>
                                            </div>
                                            <br>

                                        </div>
                                    </div>
                                </div>
                            </div>
                            <br>

                            <a href="datanomorpbuserhukum.php" class="btn btn-danger"><i class="fa fa-reply-all"></i> Keluar</a>

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

