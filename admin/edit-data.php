<?php 
include "../koneksi.php";
session_start();
require_once('../layouts/admin/header.php');
require_once('../layouts/admin/sidebar.php');
$id = $_GET["id_barang"];

$items = mysqli_query($koneksi,"SELECT * FROM items Where id_barang = '$id'");

?>

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
<!-- Content Header (Page header) -->
<div class="content-header">
    <div class="container-fluid">
    <div class="row mb-2">
        <div class="col-sm-6">
        <h1 class="m-0 text-dark"><?php echo "SELAMAT DATANG". " ".$_SESSION['username']; ?></h1>
        </div><!-- /.col -->
        <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active">Insert Data Barang</li>
        </ol>
        </div><!-- /.col -->
    </div><!-- /.row -->
    </div><!-- /.container-fluid -->
</div>
<!-- /.content-header -->

<!-- Main content -->
<div class="content">
    <div class="container-fluid">
    <div class="row">
        <div class="col-lg-12">
        <div class="card">
            <div class="card-header">
            <h3 class="card-title">Insert Data Barang</h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
<?php 
    while($data= mysqli_fetch_array($items))
    {
?>
            <form action="cek-edit-data.php" method="post" enctype="multipart/form-data">
            <input type="hidden" class="form-control" id="exampleFormControlInput1" name="id-barang"  value="<?= $data['id_barang'] ?>">
                <div class="form-group">
                    <label for="exampleFormControlInput1">Nama Barang</label>
                    <input type="text" class="form-control" id="exampleFormControlInput1" name="nama-barang" placeholder="Nama Barang" value="<?= $data['nama_barang'] ?>">
                </div>
                <div class="form-group">
                    <label for="exampleFormControlInput1">Harga Barang</label>
                    <input type="text" class="form-control" id="exampleFormControlInput1" name="harga-barang" placeholder="Harga Barang" value="<?= $data['harga_barang'] ?>">
                </div>
                <div class="form-group">
                    <label for="exampleFormControlSelect1">Kuantitas Barang</label>
                    <input type="text" class="form-control" id="exampleFormControlInput1" name="kuantitas" placeholder="Harga Barang" value="<?= $data['kuantitas'] ?>">
                </div>
                <div class="form-group">
                    <label for="exampleFormControlFile1">Gambar Barang</label><br>
                    <img src="../assets/img/items/<?= $data["gambar"] ?>" alt="Gambar" width="80">
                    <input type="file" class="form-control-file" id="exampleFormControlFile1" name="gambar">
                </div>
                <button type="submit" class="btn btn-primary" name="ubah-data"><i class="fas fa-plus"></i> Ubah Data</button>
            </form>
    <?php } ?>
            </div>
            <!-- /.card-body -->
          </div>
        
        </div>
        <!-- /.col-md-6 -->
        
        </div>
        <!-- /.col-md-6 -->
    </div>
    <!-- /.row -->
    </div>
    <!-- /.container-fluid -->
</div>
<!-- /.content -->
</div>
<!-- /.content-wrapper -->

<!-- Control Sidebar -->
<aside class="control-sidebar control-sidebar-dark">
<!-- Control sidebar content goes here -->
</aside>
<!-- /.control-sidebar -->
<?= require_once('../layouts/admin/footer.php') ?>