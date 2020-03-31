
<!-- Main Footer -->
<footer class="main-footer">
<strong>Copyright &copy; 2014-2019 <a href="http://adminlte.io">AdminLTE.io</a>.</strong>
All rights reserved.
<div class="float-right d-none d-sm-inline-block">
    <b>Version</b> 3.0.2
</div>
</footer>
</div>
<!-- ./wrapper -->

<!-- REQUIRED SCRIPTS -->

<!-- jQuery -->
<script src="../assets/admin/plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap -->
<script src="../assets/admin/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE -->
<script src="../assets/admin/dist/js/adminlte.js"></script>

<!-- OPTIONAL SCRIPTS -->
<script src="../assets/admin/plugins/chart.js/Chart.min.js"></script>
<script src="../assets/admin/dist/js/demo.js"></script>
<script src="../assets/admin/dist/js/pages/dashboard3.js"></script>
<script src="../assets/admin/plugins/datatables/jquery.dataTables.js"></script>
<script src="../assets/admin/plugins/datatables-bs4/js/dataTables.bootstrap4.js"></script>

<script>
  $(function () {
    $("#example1").DataTable();
    $('#example2').DataTable({
      "paging": true,
      "lengthChange": false,
      "searching": false,
      "ordering": true,
      "info": true,
      "autoWidth": false,
    });
  });
</script>
</body>
</html>
