<?php
    include "headeradmin.php";
    
    $id = $_GET['id'];
    $show = mysqli_query($koneksi, "SELECT * FROM nomorpb WHERE nopb='$id'");
    if(mysqli_num_rows($show) == 0)
    {   
        echo "<script>window.history.back()</script>";
    }
    else
    {
        $data = mysqli_fetch_array($show);  //mengambil data ke database yang nantinya akan ditampilkan di form edit di bawah
        $kode=$data['kodeopd'];
    }
?>

<div class="container">
    <div class="row">
        <div class="col-lg-12 mt-2" style="min-height: 500px;">
            <div class="card">
                <h5 class="card-header">DATA PENOMORAN PB</h5>
                    <div class="card-body">
                        <div class="row">
                            <div class="col">
                                <form class="form-horizontal" action="aksieditserinopb.php" method="POST">
                                    <div class="form-group">
                                        <label form="">Nomor PB</label>
                                        <input type="text" class="form-control" name="nopb" value="<?php echo $data['nopb']?>" readonly>
                                    </div>
                                    <br>
                                    <div class="form-group">
                                        <label form="">Tanggal PB</label>
                                        <input type="date" class="form-control" name="tglpb" value="<?php echo $data['tglpb'];?>" required> 
                                    </div>
                                    <br>
                                    <div class="form-group">
                                        <label form="">Judul</label>
                                        <textarea type="text" class="form-control" name="judulpb" readonly><?php echo $data['judulpb']?></textarea>
                                    </div>
                                    <br>
                                    <div class="form-group">
                                        <label>OPD/ Dinas</label>
                                        <input type="text" class="form-control" name="comboopd" value="<?php echo $data['kodeopd'];?>" readonly>
                                    </div>
                                    <br>
                                    <div class="form-group">
                                        <label form="">Kategori</label>
                                        <select name="comboseri" id="comboseri" class="form-control" onchange="changeValue(this.value)" required>
                                            <option value="">---Silahkan Di Pilih---</option>
                                                    <?php  
                                                        $result = mysqli_query($koneksi, "SELECT*FROM seri");  
                                                        $jsArray = "var prdName = new Array();\n";
                                                        
                                                        while ($data2= mysqli_fetch_array($result))
                                                        {   
                                                            echo '<option name="tseri"  value="' . $data2['kategori'] . '">' . $data2['kategori'] . '</option>';  
                                                            $jsArray .= "prdName['" . $data2['kategori'] . "'] = {tseri:'" . addslashes($data2['seri']) . "'};\n";
                                                        }
                                                    ?>                
                                        </select>
                                    </div>
                                    <br>
                                    <div class="form-group">
                                        <label form="">Seri</label>
                                        <input type="text" class="form-control" name="tseri" id="tseri" readonly>
                                    </div>
                                    <br>
                                    <div class="form-group">
                                        <label>Tanggal Pengundangan</label>
                                        <input type="date" class="form-control" name="ttglundang" required>     
                                    </div>
                                    <br>
                                    <div class="form-group">
                                        <label form="">Keterangan lain</label>
                                        <textarea class="form-control" name="ket"><?php echo $data['ket'];?></textarea>
                                    </div>
                                    <br>
                                    <div class="form-group">
                                        <label form="">Kode Proses PB</label>
                                        <input type="text" class="form-control" name="pengebon" value="<?php echo $data['kodepb'];?>" readonly>
                                    </div>
                                    <br>
                                    <div class="form-group">
                                        <label form="">Tanggal Turun PB</label>
                                        <input type="date" class="form-control" name="tglpb" value="<?php echo $data['tglturunpb'];?>" readonly> 
                                    </div>
                                    <br>
                                    <button type="submit" class="btn btn-success" name="btnsimpan" onclick="return confirm('Yakin disimpan?')"><i class="fa fa-save"></i> Simpan</button>
                                    <a href="datanomorpb.php" class="btn btn-warning"><i class="fa fa-reply-all"></i> Batal</a>
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
    <?php 
        echo $jsArray;
    ?>

    function changeValue(x)
    {
        document.getElementById('tseri').value = prdName[x].tseri;
    };

</script>

