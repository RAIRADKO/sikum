<?php
    include "headerharus.php";

    $id = $_GET['id'];
    $show = mysqli_query($koneksi, "SELECT * FROM nomorpb WHERE nopb='$id'");
    if(mysqli_num_rows($show) == 0)
    {   
        echo "<script>window.history.back()</script>";
    }
    else
    {
        $data = mysqli_fetch_assoc($show);  //mengambil data ke database yang nantinya akan ditampilkan di form edit di bawah
        $kode=$data['kodeopd'];
        $seri=$data['seri'];
    }
?>

<div class="container">
    <div class="row">
        <div class="col-lg-12 mt-2" style="min-height: 500px;">

        <div class="card text-center text-white bg-secondary">
            <h4 class="card-header">Jika Yakin ini bon nomornya, klik simpan.</h4><br>
            <h4 class="card-header">Jika TIDAK, klik batal.</h4>
        </div>
        <br>

            <form class="form-horizontal" action="aksibatalintegrasi2.php" method="POST">
                <div class="card">
                    <h5 class="card-header">DATA NOMOR PB</h5>
                        <div class="card-body">
                            <div class="row">
                                <div class="col">
                                        <div class="form-group">
                                            <label form="">Nomor PB</label>
                                            <input type="text" class="form-control" name="tnopb" value="<?php echo $data['nopb']?>" readonly>
                                        </div>
                                        <br>
                                        <div class="form-group">
                                            <label form="">Tanggal PB</label>       
                                            <input type="date" class="form-control" name="ttglpb" value="<?php echo $data['tglpb']?>" readonly>
                                        </div>
                                        <br>
                                        <div class="form-group">
                                            <label form="">Judul PB</label>
                                            <textarea type="text" class="form-control" name="tjudulpb" readonly><?php echo $data['judulpb']?></textarea>
                                        </div>
                                        <br>
                                        <div class="form-group">
                                            <label>OPD/ Dinas</label>
                                            <select name="comboopd" id="comboopd" class="form-control" onchange="changeValue(this.value)" readonly>
                                                        <?php  
                                                            $a = mysqli_query($koneksi, "select * from opd");  
                                                            
                                                            while ($row= mysqli_fetch_array($a))
                                                            {   
                                                                $kodeopd=$row['kodeopd'];
                                                                if ($kode==$kodeopd)
                                                                {
                                                                    $cek="selected";
                                                                    
                                                                }
                                                                else
                                                                {
                                                                    $cek="";
                                                                }
                                                                echo "<option value='$kodeopd' $cek>$kodeopd</option>";
                                                            }
                                                        ?>          
                                            </select>
                                        </div>
                                        <br>
                                        <div class="form-group">
                                            <label form="">Kategori</label>
                                            <?php $show2 = mysqli_query($koneksi, "SELECT * FROM nomorpb INNER JOIN seri ON nomorpb.seri=seri.seri WHERE nomorpb.seri='$seri'");
                                            $data2 = mysqli_fetch_assoc($show2); ?>
                                            <input type="text" class="form-control" name="tkategori" value="<?php echo $data2['kategori']?>" readonly>
                                        </div>
                                        <br>
                                        <div class="form-group">
                                            <label form="">Seri</label>
                                            <input type="text" class="form-control" name="tseri" value="<?php echo $data['seri']?>" readonly>
                                        </div>
                                        <br>
                                        <div class="form-group">
                                            <label form="">Tanggal Turun PB</label>
                                            <input type="date" class="form-control" name="ttglturunpb" value="<?php echo $data['tglturunpb']?>" readonly>
                                        </div>
                                        <br>
                                        <div class="form-group">
                                        <label form="">Keterangan</label>
                                        <textarea class="form-control" name="tket" value="" readonly><?php echo $data['ket']?></textarea>
                                    </div>
                                </div>
                            </div>
                        </div>
                </div>

                <br>
                <div class="card">
                    <h5 class="card-header">DATA PENGEBON NOMOR PB</h5>
                        <div class="card-body">
                            <div class="row">
                                <div class="col">
                                <div class="form-group">
                                        <label form="">Nama Pengebon</label>
                                        <input type="text" class="form-control" name="tpengebon" value="<?php echo $data['namabon'] ?>" readonly>
                                    </div>
                                    <br>
                                    <div class="form-group">
                                        <label form="">Tanggal Bon PB</label>
                                        <input type="date" class="form-control" name="ttglbon" value="<?php echo $data['tglbon'] ?>" readonly>
                                    </div>
                                    <br>
                                    <div class="form-group">
                                        <label form="">Alasan Bon PB</label>
                                        <textarea class="form-control" name="talasan" value="" readonly><?php echo $data['alasanbonpb'] ?></textarea>
                                        <input type="text" class="form-control" name="tkodepb" value="<?php echo $data['kodepb'] ?>" hidden>
                                    </div>
                                </div>
                            </div>
                        </div>
                </div>

                <div class="card text-center">
                    <div class="card-body">
                        <a href ="dataprosespb.php" onclick="return confirm('Yakin ya BON Nomor PB nya ini?')" class="btn btn-success"><i class="fa fa-save"></i> Simpan</a>
                        <button type="submit" class="btn btn-primary" name="btnbatalintegrasi" onclick="return confirm('Yakin dibatalkan untuk integrasi BON Nomor PB nya?')"><i class="fa fa-reply-all"></i> Batal</button>
                    </div>
                </div>
                </form>
        </div>
    </div>
</div>



<?php
    include "footer.html";
?>


