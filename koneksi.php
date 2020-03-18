<?php 

$koneksi = mysqli_connect('localhost', 'root', '', 'db_fashi');

if(mysqli_connect_errno())
{
    echo "Koneksi database GAGAL : ";
}
?>