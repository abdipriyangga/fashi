<?= session_start() ?>
<?= require_once('../layouts/admin/header.php') ?>
<?= require_once('../layouts/admin/sidebar.php') ?>

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
            <form action="cek-insert-data.php" method="post" enctype="multipart/form-data">
                <div class="form-group">
                    <label for="exampleFormControlInput1">Nama Barang</label>
                    <input type="text" class="form-control" id="exampleFormControlInput1" name="nama-barang" placeholder="Nama Barang">
                </div>
                <div class="form-group">
                    <label for="exampleFormControlInput1">Harga Barang</label>
                    <input type="text" class="form-control" id="exampleFormControlInput1" name="harga-barang" placeholder="Harga Barang">
                </div>
                <div class="form-group">
                    <label for="exampleFormControlSelect1">Kuantitas Barang</label>
                    <select class="form-control" id="exampleFormControlSelect1" name="kuantitas">
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                    <option value="5">5</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="exampleFormControlFile1">Gambar Barang</label>
                    <input type="file" class="form-control-file" id="exampleFormControlFile1" name="gambar">
                </div>
                <button type="submit" class="btn btn-primary" name="tambah-data"><i class="fas fa-plus"></i> Tambah Data</button>
            </form>
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