<!-- Homepage adalah tampilan awal pada halaman admin -->
<?php 
session_start(); //memulai sesi

// konfirmasi jika user belom login, maka user tidak bisa masuk ke halaman admin
if($_SESSION['username'] == '')
{
    header("Location: login-admin.php");
}
require_once("../layouts/admin/header.php");
require_once("../layouts/admin/sidebar.php");
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
            <div class="card-header border-0">
            <div class="d-flex justify-content-between">
                <h3 class="card-title">Online Store Visitors</h3>
                <a href="javascript:void(0);">View Report</a>
            </div>
            </div>
            <div class="card-body">
            <div class="d-flex">
                <p class="d-flex flex-column">
                <span class="text-bold text-lg">820</span>
                <span>Visitors Over Time</span>
                </p>
                <p class="ml-auto d-flex flex-column text-right">
                <span class="text-success">
                    <i class="fas fa-arrow-up"></i> 12.5%
                </span>
                <span class="text-muted">Since last week</span>
                </p>
            </div>
            <!-- /.d-flex -->

            <div class="position-relative mb-4">
                <canvas id="visitors-chart" height="200"></canvas>
            </div>

            <div class="d-flex flex-row justify-content-end">
                <span class="mr-2">
                <i class="fas fa-square text-primary"></i> This Week
                </span>

                <span>
                <i class="fas fa-square text-gray"></i> Last Week
                </span>
            </div>
            </div>
        </div>
        <!-- /.card -->
        
        <div class="card">
            <div class="card-header border-0">
            <h3 class="card-title">Products</h3>
            <div class="card-tools">
                <a href="#" class="btn btn-tool btn-sm">
                <i class="fas fa-download"></i>
                </a>
                <a href="#" class="btn btn-tool btn-sm">
                <i class="fas fa-bars"></i>
                </a>
            </div>
            </div>
            <div class="card-body table-responsive p-0">
            <table class="table table-striped table-valign-middle">
                <thead>
                <tr>
                <th>Product</th>
                <th>Price</th>
                <th>Sales</th>
                <th>More</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                <td>
                    <img src="../assets/admin/dist/img/default-150x150.png" alt="Product 1" class="img-circle img-size-32 mr-2">
                    Some Product
                </td>
                <td>$13 USD</td>
                <td>
                    <small class="text-success mr-1">
                    <i class="fas fa-arrow-up"></i>
                    12%
                    </small>
                    12,000 Sold
                </td>
                <td>
                    <a href="#" class="text-muted">
                    <i class="fas fa-search"></i>
                    </a>
                </td>
                </tr>
                <tr>
                <td>
                    <img src="../assets/admin/dist/img/default-150x150.png" alt="Product 1" class="img-circle img-size-32 mr-2">
                    Another Product
                </td>
                <td>$29 USD</td>
                <td>
                    <small class="text-warning mr-1">
                    <i class="fas fa-arrow-down"></i>
                    0.5%
                    </small>
                    123,234 Sold
                </td>
                <td>
                    <a href="#" class="text-muted">
                    <i class="fas fa-search"></i>
                    </a>
                </td>
                </tr>
                <tr>
                <td>
                    <img src="../assets/admin/dist/img/default-150x150.png" alt="Product 1" class="img-circle img-size-32 mr-2">
                    Amazing Product
                </td>
                <td>$1,230 USD</td>
                <td>
                    <small class="text-danger mr-1">
                    <i class="fas fa-arrow-down"></i>
                    3%
                    </small>
                    198 Sold
                </td>
                <td>
                    <a href="#" class="text-muted">
                    <i class="fas fa-search"></i>
                    </a>
                </td>
                </tr>
                <tr>
                <td>
                    <img src="../assets/admin/dist/img/default-150x150.png" alt="Product 1" class="img-circle img-size-32 mr-2">
                    Perfect Item
                    <span class="badge bg-danger">NEW</span>
                </td>
                <td>$199 USD</td>
                <td>
                    <small class="text-success mr-1">
                    <i class="fas fa-arrow-up"></i>
                    63%
                    </small>
                    87 Sold
                </td>
                <td>
                    <a href="#" class="text-muted">
                    <i class="fas fa-search"></i>
                    </a>
                </td>
                </tr>
                </tbody>
            </table>
            </div>
        </div>
        <!-- /.card -->
        <div class="card">
            <div class="card-header">
              <h3 class="card-title">DataTable with default features</h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>Rendering engine</th>
                  <th>Browser</th>
                  <th>Platform(s)</th>
                  <th>Engine version</th>
                  <th>CSS grade</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                  <td>Trident</td>
                  <td>Internet
                    Explorer 4.0
                  </td>
                  <td>Win 95+</td>
                  <td> 4</td>
                  <td>X</td>
                </tr>
                <tr>
                  <td>Trident</td>
                  <td>Internet
                    Explorer 5.0
                  </td>
                  <td>Win 95+</td>
                  <td>5</td>
                  <td>C</td>
                </tr>
                <tr>
                  <td>Trident</td>
                  <td>Internet
                    Explorer 5.5
                  </td>
                  <td>Win 95+</td>
                  <td>5.5</td>
                  <td>A</td>
                </tr>
                <tr>
                  <td>Trident</td>
                  <td>Internet
                    Explorer 6
                  </td>
                  <td>Win 98+</td>
                  <td>6</td>
                  <td>A</td>
                </tr>
                <tr>
                  <td>Trident</td>
                  <td>Internet Explorer 7</td>
                  <td>Win XP SP2+</td>
                  <td>7</td>
                  <td>A</td>
                </tr>
                <tr>
                  <td>Trident</td>
                  <td>AOL browser (AOL desktop)</td>
                  <td>Win XP</td>
                  <td>6</td>
                  <td>A</td>
                </tr>
                <tr>
                  <td>Gecko</td>
                  <td>Firefox 1.0</td>
                  <td>Win 98+ / OSX.2+</td>
                  <td>1.7</td>
                  <td>A</td>
                </tr>
                <tr>
                  <td>Gecko</td>
                  <td>Firefox 1.5</td>
                  <td>Win 98+ / OSX.2+</td>
                  <td>1.8</td>
                  <td>A</td>
                </tr>
                <tr>
                  <td>Gecko</td>
                  <td>Firefox 2.0</td>
                  <td>Win 98+ / OSX.2+</td>
                  <td>1.8</td>
                  <td>A</td>
                </tr>
                <tr>
                  <td>Gecko</td>
                  <td>Firefox 3.0</td>
                  <td>Win 2k+ / OSX.3+</td>
                  <td>1.9</td>
                  <td>A</td>
                </tr>
                <tr>
                  <td>Gecko</td>
                  <td>Camino 1.0</td>
                  <td>OSX.2+</td>
                  <td>1.8</td>
                  <td>A</td>
                </tr>
                <tr>
                  <td>Gecko</td>
                  <td>Camino 1.5</td>
                  <td>OSX.3+</td>
                  <td>1.8</td>
                  <td>A</td>
                </tr>
                <tr>
                  <td>Gecko</td>
                  <td>Netscape 7.2</td>
                  <td>Win 95+ / Mac OS 8.6-9.2</td>
                  <td>1.7</td>
                  <td>A</td>
                </tr>
                <tr>
                  <td>Gecko</td>
                  <td>Netscape Browser 8</td>
                  <td>Win 98SE+</td>
                  <td>1.7</td>
                  <td>A</td>
                </tr>
                <tr>
                  <td>Gecko</td>
                  <td>Netscape Navigator 9</td>
                  <td>Win 98+ / OSX.2+</td>
                  <td>1.8</td>
                  <td>A</td>
                </tr>
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

<!-- Control Sidebar -->
<aside class="control-sidebar control-sidebar-dark">
<!-- Control sidebar content goes here -->
</aside>
<!-- /.control-sidebar -->
<?= require_once("../layouts/admin/footer.php"); ?>