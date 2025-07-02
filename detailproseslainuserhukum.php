<?php
    include "headeruserhukum.php";
    
    $id = $_GET['id'];
        $show = mysqli_query($koneksi, "SELECT * FROM proseslain WHERE kodelain='$id'");
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

            <div class="card"><h5 class="card-header text-center text-white bg-secondary">INFORMASI DATA PROSES LAINNYA</h5>
                <div class="card-body">
                    <div class="row">
                        <div class="col">

                            <div class="card"><h5 class="card-header">Data Proses Lainnya</h5>
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col">

                                            <div class="form-group">
                                                <label form="">Kode </label>
                                                <input type="text" class="form-control" name="kode" value="<?php echo $data['kodelain']?>" readonly>
                                            </div>
                                            <br>

                                            <div class="form-group">
                                                <label form="">Tanggal Masuk</label>
                                                    <?php if ($data['tglmasuk'] == '0000-00-00') { ?>
                                                <input type="text" class="form-control" name="" value="<?php echo '';?>" readonly>
                                                    <?php } else { ?>
                                                <input type="text" class="form-control" name="" value="<?php echo date ('d-m-Y', strtotime($data['tglmasuk']));?>" readonly> <?php } ?>
                                            </div>
                                            <br>

                                            <div class="form-group">
                                                <label form="">Sediaan</label>
                                                <input type="text" class="form-control" name="sedian" value="<?php echo $data['sedian']?>" readonly>
                                            </div>
                                            <br>

                                            <div class="form-group">
                                                <label form="">Judul</label>
                                                <textarea type="text" class="form-control" name="judul" readonly> <?php echo $data['judul']?></textarea>
                                            </div>
                                            <br>

                                            <div class="form-group">
                                                <label form="">OPD/ Dinas</label>
                                                <input type="text" class="form-control" name="opd" value="<?php echo $data['kodeopd']?>" readonly>
                                            </div>
                                            <br>

                                            <div class="form-group">
                                                <label form="">Jumlah Ttd</label>
                                                <input type="text" class="form-control" name="jmlttd" value="<?php echo $data['jmlttd']?>" readonly>
                                            </div>
                                            <br>

                                            <div class="form-group">
                                                <label form="">Tanggal Naik Kabag</label>
                                                    <?php if ($data['tglnaikkabag'] == '0000-00-00') { ?>
                                                <input type="text" class="form-control" name="" value="<?php echo '';?>" readonly>
                                                    <?php } else { ?>
                                                <input type="text" class="form-control" name="" value="<?php echo date ('d-m-Y', strtotime($data['tglnaikkabag']));?>" readonly> <?php } ?>
                                            </div>
                                            <br>

                                            <div class="form-group">
                                                <label form="">Tanggal Naik Asisten</label>
                                                    <?php if ($data['tglnaikass'] == '0000-00-00') { ?>
                                                <input type="text" class="form-control" name="" value="<?php echo '';?>" readonly>
                                                    <?php } else { ?>
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
                                                    <?php if ($data['tglturun'] == '0000-00-00') { ?>
                                                <input type="text" class="form-control" name="" value="<?php echo '';?>" readonly>
                                                    <?php } else { ?>
                                                <input type="text" class="form-control" name="" value="<?php echo date ('d-m-Y', strtotime($data['tglturun']));?>" readonly> <?php } ?>
                                            </div>
                                            <br>

                                            <div class="form-group">
                                                <label form="">Keterangan Proses </label>
                                                <textarea class="form-control" name="ketproses" value="" readonly><?php echo $data['ket'] ?></textarea>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>
                            <br>

                            <div class="card"><h5 class="card-header">Data Pengambilan </h5>
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col">

                                            <div class="form-group">
                                                <label form="">Tanggal Ambil </label>
                                                    <?php if ($data['tglambil'] == '0000-00-00') { ?>
                                                <input type="text" class="form-control" name="" value="<?php echo '';?>" readonly>
                                                    <?php } else { ?>
                                                <input type="text" class="form-control" name="" value="<?php echo date ('d-m-Y', strtotime($data['tglambil']));?>" readonly> <?php } ?>
                                            </div>
                                            <br>

                                            <div class="form-group">
                                                <label form="">Nama Pengambil </label>
                                                <input type="text" class="form-control" name="" value="<?php echo $data['namaambil']?>" readonly>
                                            </div>
                                            <br>

                                        </div>
                                    </div>
                                </div>
                            </div>
                            <br>

                            <a href="dataproseslainuserhukum.php" class="btn btn-danger"><i class="fa fa-reply-all"></i> Keluar</a>

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

