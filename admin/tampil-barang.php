<?php 
session_start(); //memulai sesi
require_once("../layouts/admin/header.php");
require_once("../layouts/admin/sidebar.php");

include "../koneksi.php";

$query = mysqli_query($koneksi, "SELECT * FROM items");

?>
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
<!-- Content Header (Page header) -->
<div class="content-header">
    <div class="container-fluid">
    <div class="row mb-2">
        <div class="col-sm-6">
        <h1 class="m-0 text-dark"><?php echo "SELAMAT DATANG". " ". $_SESSION['username']; ?></h1>
        </div><!-- /.col -->
        <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active">Dashboard v3</li>
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
              <h3 class="card-title">DataTable with default features</h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                    <tr>
                    <th>ID</th>
                    <th>Nama Barang</th>
                    <th>Harga Barang</th>
                    <th>Kuantitas</th>
                    <th>Gambar</th>
                    <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach($query as $row): ?>
                    <tr>
                    <td><?= $row["id_barang"] ?></td>
                    <td><?= $row["nama_barang"] ?></td>
                    <td><?= $row["harga_barang"] ?></td>
                    <td><?= $row["kuantitas"] ?></td>
                    <td><img src="../assets/img/items/<?= $row["gambar"] ?>" alt="Gambar" width="80"></td>
                    <td> 
                        <a href="edit-data.php?id_barang=<?= $row["id_barang"] ?>" class="btn btn-danger">Edit</a>
                        <a href="hapus-data.php?id_barang=<?= $row["id_barang"] ?>" onclick="return confirm('Yakin mau di hapus?');" class="btn btn-success">Hapus</a>
                    </td>
                    </tr>
                    <?php endforeach; ?>    
                </tbody>
              </table>
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
<?= require_once("../layouts/admin/footer.php"); ?>