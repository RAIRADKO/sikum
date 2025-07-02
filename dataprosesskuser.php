<?php
    include "headeruser.php";
    $opd=$_SESSION['opd'];
    $posisi = stripos($opd,"(");
    if ($posisi !== FALSE)
    {
        $opd = substr($opd,0,$posisi);
    }
    else
    {
        $opd=$_SESSION['opd'];
    }
?>

<div class="container-fluid">
    <div class="row">
        <div class="col mt-2 ml-2" style="min-height: 500px;">
            <div class="card">
                <h5 class="card-header">DATA PROSES SK</h5>
                    <div class="card-body">

                        <div class="row">
                            <div class="col">
                                <form class="d-flex" method="GET">
                                    <input type="text"class="form-control me-2" name="keyword">
                                    <button type="submit" class="btn btn-success btn-sm"  name="cari">Cari</button>
                                </form>
                            </div>   
                        </div>

                        <div class="table-responsive row mt-3">
                            <div class="col">
                                <table class="table table-bordered table-striped">
                                    <tr>
                                        <th>Kode SK</th>
                                        <th width="15%">Tgl Masuk</th>
                                        <th>Judul SK</th>
                                        <th>OPD/ Dinas</th>
                                        <th>Status</th>
                                        <th>No SK</th>
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
                                            $query=mysqli_query($koneksi,"select * from prosessk where kodeopd LIKE '$opd%' AND(kodesk like '%$keyword%' or judulsk like '%$keyword%' or kodeopd like '%$keyword%') ORDER BY kodesk DESC LIMIT $start, $perpage"); 
                                        }
                                        else
                                        {
                                            $query=mysqli_query($koneksi,"select * from prosessk where  kodeopd LIKE '$opd%'  ORDER BY kodesk DESC LIMIT $start, $perpage"); 
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
                                        <td><?php echo $ambil_data['kodesk']; ?></td>
                                        <td><?php 
                                            if ($ambil_data['tglmasuksk'] == '0000-00-00')
                                            {
                                                echo '';
                                            }
                                            else
                                            {
                                                echo date ('d-m-Y', strtotime($ambil_data['tglmasuksk']));
                                            }
                                        ?></td>
                                        <td><?php echo $ambil_data['judulsk']; ?></td>
                                        <td><?php echo $ambil_data['kodeopd']; ?></td>
                                            <?php   $kodesk=$ambil_data['kodesk'];
                                                    $query2=mysqli_query($koneksi,"select * from nomorsk where kodesk='$kodesk'");
                                                    $data=mysqli_fetch_array($query2);
                                                    if ($ambil_data['tglturunsk'] == '0000-00-00')
                                                    {
                                                        $_SESSION['statusprosessk'] = '<span class="badge badge-pill badge-warning">Proses</span>';
                                                    }
                                                    else if (!empty($data['namapengambilsk']))
                                                    {
                                                        $_SESSION['statusprosessk'] = '<span class="badge badge-pill badge-success">Diambil</span>';
                                                    }
                                                    else
                                                    {
                                                        $_SESSION['statusprosessk'] = '<span class="badge badge-pill badge-danger">Selesai</span>';
                                                    }
                                            ?>
                                        <td><?php echo $_SESSION['statusprosessk'];?></td>
                                        <td><?php echo $ambil_data['nosk']; ?></td>
                                        <td><a href ="aksidetailprosesskuser.php?id=<?php echo $ambil_data['kodesk'];?>" class="btn btn-warning"><i class="fa fa-th-list"></i> Detail</a>
                                    </tr>
                                    <?php
                                        }}
                                    ?>
                                </table>

                            <?php
                                if ((isset($_GET['cari']))=="")
                                {
                                    $data=mysqli_query($koneksi,"select * from prosessk where kodeopd LIKE '$opd%' ORDER BY kodesk DESC");
                                }
                                else 
                                {
                                    $data=mysqli_query($koneksi,"select * from prosessk where kodeopd LIKE '$opd%' AND(kodesk like '%$keyword%' or judulsk like '%$keyword%' or kodeopd like '%$keyword%') ORDER BY kodesk DESC");
                                }
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