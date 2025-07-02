<?php
    include "headeradmin.php";     
    include "funcnopb.php";
?>

<div class="container">
    <div class="row">
        <div class="col-lg-12 mt-2" style="min-height: 500px;">
            <div class="card">
                <h5 class="card-header">BON NOMOR PB BARU<br>(Pastikan sudah ada surat resmi permohonan BON nomornya)</h5>
                    <div class="card-body">
                        <div class="row">
                            <div class="col">
                                <form class="form-horizontal" action="simpannomorpb.php" method="POST">
                                    <div class="form-group">
                                        <label form="">Nomor PB</label>
                                        <input type="text" class="form-control" name="nopb" value="<?php echo $nopb?>" readonly>
                                    </div>
                                    <br>
                                    <div class="form-group">
                                        <label form="">Tanggal PB</label>
                                        <input type="date" class="form-control" name="tglpb" value = "" required>
                                    </div>
                                    <br>
                                    <div class="form-group">
                                        <label form="">Judul PB</label>
                                        <textarea class="form-control" name="judulpb" required></textarea>
                                    </div>
                                    <br>
                                    <div class="form-group">
                                        <label>OPD/ Dinas</label>
                                        <select name="comboopd" id="comboopd" class="form-control" onchange="changeValue(this.value)" required>
                                            <option value="">---Silahkan Di Pilih---</option>
                                                    <?php  
                                                        $result = mysqli_query($koneksi, "select * from opd");  
                                                        
                                                        while ($data= mysqli_fetch_array($result))
                                                        {   
                                                            echo '<option name="tkodeopd"  value="' . $data['kodeopd'] . '">' . $data['kodeopd'] . '</option>';  
                                                        }
                                                    ?>          
                                        </select>
                                    </div>
                                    <br>
                                    <div class="form-group">
                                        <label form="">Kategori</label>
                                        <select name="comboseri" id="comboseri" class="form-control" onchange="changeValue(this.value)" required>
                                            <option value="">---Silahkan Di Pilih---</option>
                                                    <?php  
                                                        $result = mysqli_query($koneksi, "SELECT*FROM seri");  
                                                        $jsArray = "var prdName = new Array();\n";
                                                        
                                                        while ($data= mysqli_fetch_array($result))
                                                        {   
                                                            echo '<option name="tseri"  value="' . $data['kategori'] . '">' . $data['kategori'] . '</option>';  
                                                            $jsArray .= "prdName['" . $data['kategori'] . "'] = {tseri:'" . addslashes($data['seri']) . "'};\n";
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
                                        <label form="">Nama Penge-BON</label>
                                        <input type="text" class="form-control" name="pengebon" required>
                                    </div>
                                    <br>
                                    <div class="form-group">
                                        <label>Tanggal Penge-BON</label>
                                        <input type="date" class="form-control" name="tglbon" required>     
                                    </div>
                                    <br>
                                    <div class="form-group">
                                        <label form="">Alasan BON</label>
                                        <textarea class="form-control" name="alasan" required></textarea>
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
