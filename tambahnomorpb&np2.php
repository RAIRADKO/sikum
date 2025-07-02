<?php
    include "headeradmin.php";     
    include "funcnopb.php";

    $id = $_GET['id'];
    $show = mysqli_query($koneksi, "SELECT * FROM prosespb WHERE kodepb='$id'");
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
            <div class="card">
                <h5 class="card-header">TAMBAH DATA BON NOMOR PB</h5>
                    <div class="card-body">
                        <div class="row">
                            <div class="col">
                                <form class="form-horizontal" action="simpannomorpb&np.php" method="POST">
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
                                        <textarea class="form-control" name="judulpb" readonly><?php echo $data['judulpb']?></textarea>
                                    </div>
                                    <br>
                                    <div class="form-group">
                                        <label>OPD/ Dinas</label>
                                        <input type="text" class="form-control" name="comboopd" value="<?php echo $data['kodeopd']?>" readonly>
                                    </div>
                                    <br>
                                    <div class="form-group">
                                        <label form="">Kategori</label>
                                        <select name="comboseri" id="comboseri" class="form-control" onchange="changeValue2(this.value)" required>
                                            <option value="">---Silahkan Di Pilih---</option>
                                                    <?php  
                                                        $result = mysqli_query($koneksi, "SELECT*FROM seri");  
                                                        $jsArray2 = "var prdName2 = new Array();\n";
                                                        
                                                        while ($data= mysqli_fetch_array($result))
                                                        {   
                                                            echo '<option name="tseri"  value="' . $data['kategori'] . '">' . $data['kategori'] . '</option>';  
                                                            $jsArray2 .= "prdName2['" . $data['kategori'] . "'] = {tseri:'" . addslashes($data['seri']) . "'};\n";
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
                                        <input type="date" class="form-control" name="tglundang" required>     
                                    </div>
                                    <br>
                                    <input type="text" class="form-control" name="tkodeass" id="tkodeass" hidden>
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
                                        <input type="text" class="form-control" name="kodepb" value="<?php echo $id?>" hidden>  
                                    </div>
                                    <br>
                                    <button type="submit" class="btn btn-success" name="btnsimpan" onclick="return confirm('Yakin BON Nomor??')"><i class="fa fa-save"></i> Simpan</button>
                                    <a href="dataprosespb.php" class="btn btn-warning"><i class="fa fa-reply-all"></i> Batal</a>
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
<script>
<?php echo $jsArray2;?>
function changeValue2(x){
    document.getElementById('tseri').value = prdName2[x].tseri;
};
</script>
