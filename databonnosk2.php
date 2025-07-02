<?php
    include "headerharus.php";
	
	$id = $_GET['id'];
	$show = mysqli_query($koneksi, "SELECT * FROM prosessk WHERE kodesk='$id'");
	if(mysqli_num_rows($show) == 0)
	{	
		echo "<script>window.history.back()</script>";
	}
	else
	{
		$data = mysqli_fetch_array($show);	//mengambil data ke database yang nantinya akan ditampilkan di form edit di bawah
    }
    $kodesk = $data['kodesk'];
?>

<form class="form-horizontal" action="editnoskblmturun.php" method="POST">
<div class="container-fluid">
    <div class="row">
        <div class="col mt-2 ml-2" style="min-height: 500px;">
            <div class="card">
                <h5 class="card-header">Silahkan dicari dulu apakah pernah BON Nomor</h5>
                    <div class="card-body">
                                    <div class="form-group">
                                         <div class="form-group">
                                        <label form="">Kode SK</label>
                                        <input type="text" class="form-control" name="kodesk" value="<?php echo $data['kodesk']?>" readonly>
                                    </div>
                                    
                        <div class="row">
                            <div class="col">
                                <a href="dataprosessk.php" class="btn btn-success"><i class="fa fa-reply-all"></i> Keluar</a>
                                <a href="tambahnomorsk&np2.php?id=<?php echo $data['kodesk']?>" class="btn btn-danger"  onclick="return confirm('Sudah ada surat resmi permohonan bon?')"><i class="fa fa-plus"></i> BON baru</a>
                            </div>                                  
                        </div>
                        

                        <div class="row mt-3">
                            <div class="col">
                                <table class="table table-bordered table-striped">
                                    <tr>
                                        <th>Nomor SK</th>
                                        <th>Tgl SK</th>
                                        <th width="300px">Judul SK</th>
                                        <th>OPD/ Dinas</th>
                                        <th>Status</th>
                                        <th>Aksi</th>
                                    </tr>

                                    <?php
                                        $perpage = 50;
                                        if (isset($_GET['page']))
                                        {
                                            $page = $_GET['page'];
                                        }
                                        else
                                        {
                                            $page = 1;
                                        }

                                        if($page > 1)
                                        {
                                            $start = ($page * $perpage) - $perpage;
                                        }
                                        else
                                        {
                                            $start = 0;
                                        }
                                        if (isset($_GET['cari']))
                                        {
                                            $keyword=$_GET['keyword'];
                                            $query=mysqli_query($koneksi,"select * from nomorsk where kodesk='' OR kodesk IS NULL AND (nosk like '%$keyword%' or judulsk like '%$keyword%' or kodeopd like '%$keyword%') ORDER BY nosk DESC LIMIT $start, $perpage");
                                        }
                                        else
                                        {
                                            $query=mysqli_query($koneksi,"select * from nomorsk WHERE kodesk='' OR kodesk IS NULL ORDER BY nosk DESC LIMIT $start, $perpage");
                                        }

                                        if(mysqli_num_rows($query)==0)
                                        {
                                            echo '<tr><td colspan="13" align="center">Tidak Ada Data</td></tr>';
                                        }
                                        else
                                        {
                                        while ($ambil_data=mysqli_fetch_array($query))
                                        {                                       
                                    ?>

                                    <tr>
                                        <td><?php echo $ambil_data['nosk']; ?></td>
                                        <td><?php 
                                            if ($ambil_data['tglsk'] == '0000-00-00')
                                            {
                                                echo '';
                                            }
                                            else
                                            {
                                                echo date ('d-m-Y', strtotime($ambil_data['tglsk']));
                                            }
                                        ?></td>
                                        <td><?php echo $ambil_data['judulsk']; ?></td>
                                        <td><?php echo $ambil_data['kodeopd']; ?></td>
                                        <?php   if ($ambil_data['tglturunsk'] == '0000-00-00')
                                                    {
                                                        $_SESSION['statusnosk'] = '<span class="badge badge-pill badge-warning">Proses</span>';
                                                    }
                                                    else
                                                    {
                                                        $_SESSION['statusnosk'] = '<span class="badge badge-pill badge-success">Selesai</span>';
                                                    }
                                            ?>
                                        <td><?php echo $_SESSION['statusnosk'];?></td>
                                            <?php   if ($data['kodeopd']!==$ambil_data['kodeopd']) { ?>
                                        <td><a href ="" onclick="alert('Tidak cocok, OPD/Dinas tidak sama.')" class="btn btn-warning"><i class="fa fa-th-list"></i> Ini</a>        
                                            <?php } else { echo "nnn";
                                           ?>
                                            <td><a href = "editnoskblmturun.php?id=<?php echo $ambil_data['nosk']?>"onclick="alert('Judule bedo lho')" class="btn-warning" name="btnini"><i class="fa fa-th-list" ></i> Ini</a>

                                        <?php 
                                                
                                            }
                                        ?>
                                    </tr>
                                    <?php
                                        }}
                                    ?>
                                </table>

                            <?php
                                $data = mysqli_query($koneksi, "select * from nomorsk WHERE kodesk='' ORDER BY nosk DESC");
                                $jmlbaris = mysqli_num_rows($data);
                                $halaman = ceil($jmlbaris/$perpage);

                                $previous = $page - 1;
                                $next = $page + 1;
                            ?>
                            <ul class="pagination justify-content-center">
                                <?php // Jika page = 1, maka LinkPrev disable
                                    if($page == 1)
                                    { 
                                ?>        
                                    <!-- link Previous Page disable --> 
                                <li class="page-item disabled"><a class="page-link" <?php if($halaman > 1){ echo "href='?page=$previous'"; } ?>>PREVIOUS</a></li>
                                <?php
                                    }
                                else
                                { 
                                ?>
                                <li class="page-item"><a class="page-link"  <?php if($halaman > 1){ echo "href='?page=$previous'"; } ?>>PREVIOUS</a></li>
                                <?php
                                }
                                ?>
                            <?php
                                for($i=1; $i<=$halaman; $i++)
                                {
                            ?>    
                                <li class="page-item"><a class="page-link" href="?page=<?php echo $i; ?>"> <?php echo $i; ?></a></li>
                                <?php } ?>
                                
                            
                            <!-- link Next Page -->
                                <?php       
                                if($page == $halaman){ 
                                ?>
                                <li class="page-item disabled"><a class="page-link" href="?page= <?php $next ?>">Next</a></li>
                                <?php
                                }
                                else{
                                $linkNext = ($page < $halaman)? $page + 1 : $halaman;
                                ?>
                                <li class="page-item"><a a class="page-link" href="?page=<?php echo $linkNext; ?>">NEXT</a></li>
                                <?php
                                }
                                ?>
                            </ul>
                            
                            <div class="row">
                                <div class="col">
                                    <a href="aksitambahnosk.php?id=<?php echo $data['kodesk']?>" class="btn btn-primary"  onclick="return confirm('Sudah ada surat resmi permohonan bon?')"><i class="fa fa-plus"></i> Tambah BON Nomor</a>
                                </div>                                
                            </div>

                            </div>
                        </div>
                    </div>

            </div>
        </div>
    </div>
</div>
</form>



<?php
    include "footer.html";
?>
