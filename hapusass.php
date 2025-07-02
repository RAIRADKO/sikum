<?php
    include "headeradmin.php";

	$id = $_GET['id'];
	
	$show = mysqli_query($koneksi, "SELECT * FROM asisten WHERE kodeass='$id'");
	
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
                <h5 class="card-header">HAPUS DATA ASISTEN</h5>
                    <div class="card-body">
                        <div class="row">
                            <div class="col">
                                <form action="aksihapusass.php" method="POST">
                                    
                                    <div class="form-group">
                                        <label form="">Singkatan Asisten</label>
                                        <input type="text" readonly class="form-control" name="kodeass" value="<?php echo $data['kodeass'] ?>">
                                    </div>
                                    <br>
                                    <div class="form-group">
                                        <label form="">Kepanjangan Asisten</label>
                                        <input type="text" readonly class="form-control" name="namaass" value="<?php echo $data['namaass'] ?>">
                                    </div>
                                    <br>

                                    <button type="submit" class="btn btn-danger" name="btnhapusass" onclick="return confirm('Anda yakin ingin menghapus?')"><i class="fa fa-trash"></i> Hapus</button>
                                    <a href="dataass.php" class="btn btn-primary"><i class="fa fa-reply"></i> Batal</a>

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