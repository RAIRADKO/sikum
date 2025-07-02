<?php
    include "headeradmin.php";

	$id = $_GET['id'];
	$show = mysqli_query($koneksi, "SELECT * FROM opd WHERE kodeopd='$id'");
	
	if(mysqli_num_rows($show) == 0)
	{	
		echo "<script>window.history.back()</script>";
	}
	else
	{
		$data = mysqli_fetch_assoc($show);	//mengambil data ke database yang nantinya akan ditampilkan di form edit di bawah
	}
?>


<div class="container">
    <div class="row">
        <div class="col-lg-12 mt-2" style="min-height: 500px;">
            <div class="card">
                <h5 class="card-header">HAPUS DATA OPD/ DINAS</h5>
                    <div class="card-body">
                        <div class="row">
                            <div class="col">
                                <form action="aksihapusopd.php" method="POST">
                                    
                                    <div class="form-group">
                                        <label form="">Kode OPD</label>
                                        <input type="text" readonly class="form-control" name="kodeopd" value="<?php echo $data['kodeopd'] ?>">
                                    </div>
                                    <br>
                                    <div class="form-group">
                                        <label form="">Nama OPD/ Dinas</label>
                                        <input type="text" readonly class="form-control" name="namaopd" value="<?php echo $data['namaopd'] ?>">
                                    </div>
                                    <br>
                                    <div class="form-group">
                                        <label>Asisten</label>
                                        <select name="comboass" class="form-control" readonly>
                                            <option value=""><?php echo $data['kodeass'] ?></option>
                                        </select>
                                    </div>
                                    <br>
                                    <input type="submit" onclick="return confirm('Anda yakin ingin menghapus?')" class="btn btn-primary" name="btnhapusopd" value="Hapus">
                                    <a href ="dataopd.php" class="btn btn-primary">Batal</a></td>
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