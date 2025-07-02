<?php
    include "headeradmin.php";
?>

<div class="container-fluid">
    <div class="row">
        <div class="col mt-2 ml-2" style="min-height: 500px;">
            <div class="card">
                <h5 class="card-header">DATA PROSES SK LAINNYA</h5>
                    <div class="card-body">

                        <div class="row">
                            <div class="col">
                            <a href="tambahsklain.php" class="btn btn-primary"><i class="fa fa-plus"></i> Buat Baru</a>
                            </div>                         

                            <div class="col">
                                <form class="d-flex" method="GET">
                                    <input type="text"class="form-control me-2" name="keyword">
                                    <button type="submit" class="btn btn-success ml-2"  name="cari"><i class="fa fa-search"></i> Cari</button>
                                </form>
                            </div>            
                        </div>

                        <div class="table-responsive row mt-3">
                            <div class="col">
                                <table class="table table-bordered table-striped">
                                    <tr>
                                        <th>Kode SK</th>
                                        <th width="13%">Tgl Masuk</th>
                                        <th>Sedian</th>
                                        <th>Judul SK</th>
                                        <th>OPD/ Dinas</th>
                                        <th>Status</th>
                                        <th width="30%">Aksi</th>
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
                                            $query=mysqli_query($koneksi,"select * from proseslain where kodelain like '%$keyword%' or judul like '%$keyword%' or kodeopd like '%$keyword%' ORDER BY kodelain DESC LIMIT $start, $perpage");
                                        }
                                        else
                                        {
                                            $query=mysqli_query($koneksi,"select * from proseslain ORDER BY kodelain DESC LIMIT $start, $perpage");
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
                                        <td><?php echo $ambil_data['kodelain']; ?></td>
                                        <td><?php 
                                            if ($ambil_data['tglmasuk'] == '0000-00-00')
                                            {
                                                echo '';
                                            }
                                            else
                                            {
                                                echo date ('d-m-Y', strtotime($ambil_data['tglmasuk']));
                                            }
                                        ?></td>
                                        <td><?php echo $ambil_data['sedian']; ?></td>
                                        <td><?php echo $ambil_data['judul']; ?></td>
                                        <td><?php echo $ambil_data['kodeopd']; ?></td>
                                            <?php   if ($ambil_data['tglturun'] == '0000-00-00')
                                                    {
                                                        $_SESSION['statusproses'] = '<span class="badge badge-pill badge-warning">Proses</span>';
                                                    }
                                                    else if (!empty($ambil_data['namaambil']))
                                                    {
                                                        $_SESSION['statusproses'] = '<span class="badge badge-pill badge-success">Diambil</span>';
                                                    }
                                                    else
                                                    {
                                                        $_SESSION['statusproses'] = '<span class="badge badge-pill badge-primary">Selesai</span>';
                                                    }
                                            ?>
                                        <td><?php echo $_SESSION['statusproses'];?></td>
                                        <td><a href ="aksidetailproseslain.php?id=<?php echo $ambil_data['kodelain']?>" class="btn btn-warning btn-sm"><i class="fa fa-th-list"></i> Detail</a> 
                                        <a href ="lain.php?id=<?php echo $ambil_data['kodelain']?>" class="btn btn-primary btn-sm"><i class="fa fa-print"></i> NP</a>
                                            <?php if ($ambil_data['tglturun']=='0000-00-00') {?>
                                        <a href ="" class="btn btn-success btn-sm" onclick="alert('Maaf, belum turun/ di ttd')"><i class="fa fa-print"></i> TT</a>
                                            <?php } else {?>
                                        <a href ="cetaktandaterima.php?id=<?php echo $ambil_data['kodelain']?>" class="btn btn-success btn-sm"><i class="fa fa-print"></i> TT</a> 
                                            <?php } ?>
                                            <?php if ($ambil_data['tglturun']=='0000-00-00') {?>
                                        <a href ="" onclick="alert('Maaf, SK belum turun/ di ttd')" class="btn btn-success"><i class="fab fa-whatsapp fa-lg"></i> Wa</a>
                                            <?php } else {?>
                                        <a href ="daftarnowalain.php?id=<?php  echo $ambil_data['kodelain']?>" class="btn btn-success"><i class="fab fa-whatsapp fa-lg"></i> Wa</a>
                                            <?php } ?>
                                    </tr>
                                    <?php
                                        }}
                                    ?>
                                </table>

                            <?php
                                if ((isset($_GET['cari']))=="")
                                {
                                    $data=mysqli_query($koneksi,"select * from proseslain ORDER BY kodelain DESC");
                                }
                                else 
                                {
                                    $data=mysqli_query($koneksi,"select * from proseslain where kodelain like '%$keyword%' or judul like '%$keyword%' or kodeopd like '%$keyword%' ORDER BY kodelain DESC");
                                }
                                $jmlbaris = mysqli_num_rows($data);
                                $halaman = ceil($jmlbaris/$perpage);

                                $previous = $page - 1;
                                $next = $page + 1;
                            ?>
                            <ul class="pagination justify-content-center flex-wrap">
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