<?php 
include "../koneksi.php";

$id = $_GET["id_barang"];

$query = mysqli_query($koneksi, "DELETE from items Where id_barang = '$id'");

    header("Location: tampil-barang.php");

?>