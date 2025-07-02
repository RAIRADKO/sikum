<?php
    include "headeradmin.php";

    //proses mengambil data ke database untuk ditampilkan di form edit berdasarkan siswa_id yg didapatkan dari GET id -> edit.php?id=siswa_id
	
	//membuat variabel $id yg nilainya adalah dari URL GET id -> edit.php?id=siswa_id
	$id = $_GET['id'];
	
	//melakukan query ke database dg SELECT table siswa dengan kondisi WHERE siswa_id = '$id'
	$show = mysqli_query($koneksi, "SELECT * FROM asisten WHERE kodeass='$id'");
	
	//cek apakah data dari hasil query ada atau tidak
	if(mysqli_num_rows($show) == 0)
	{	
		//jika tidak ada data yg sesuai maka akan langsung di arahkan ke halaman depan atau beranda -> index.php
		echo "<script>window.history.back()</script>";
	}
	else
	{
		//jika data ditemukan, maka membuat variabel $data
		$data = mysqli_fetch_assoc($show);	//mengambil data ke database yang nantinya akan ditampilkan di form edit di bawah
	}
?>


<div class="container">
    <div class="row">
        <div class="col-lg-12 mt-2" style="min-height: 500px;">
            <div class="card">
                <h5 class="card-header">EDIT DATA ASISTEN</h5>
                    <div class="card-body">
                        <div class="row">
                            <div class="col">
                                <form action="aksieditass.php" method="POST">
                                    
                                    <div class="form-group">
                                        <label form="">Singkatan Asisten</label>
                                        <input type="text" readonly class="form-control" name="kodeass" value="<?php echo $data['kodeass'] ?>">
                                    </div>
                                    <br>
                                    <div class="form-group">
                                        <label form="">Kepanjangan Asisten</label>
                                        <input type="text" class="form-control" name="namaass" value="<?php echo $data['namaass'] ?>" required>
                                    </div>
                                    <br>

                                    <button type="submit" class="btn btn-danger" name="btneditass"><i class="fa fa-save"></i> Edit</button>
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