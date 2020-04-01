<?php 
include "../koneksi.php";

    $id = $_POST["id-barang"];
    $nama_barang = $_POST['nama-barang'];
    $harga_barang = $_POST['harga-barang'];
    $kuantitas = $_POST['kuantitas'];
    $gambar_nama = $_FILES["gambar"]["name"]; 
    $ekstensi_diperbolehkan = ['png','jpeg', 'jpg']; 
    $pisah_ekstensi = explode('.', $gambar_nama);
    $ekstensi = strtolower(end($pisah_ekstensi));
    $gambar_ukuran = $_FILES["gambar"]["size"]; 
    $tmp = $_FILES["gambar"]['tmp_name'];
    $nama_gambar_baru = uniqid();
    $nama_gambar_baru .= '.';
    $nama_gambar_baru .= $ekstensi;

    // if dibawah ini untuk mengecek ekstensi file yang diperbolehkan untuk diupload
    if(in_array($ekstensi, $ekstensi_diperbolehkan) === true)
    {
        // if dibawah ini untuk mengecek ukuran file agar tidak melebihi batas maksimum yaitu 1044000 atau +- 1Mb
        if($gambar_ukuran < 1044000)
        {
            // move_upload_file digunakan untuk membuat duplikasi file gambar 
            move_uploaded_file($tmp, '../assets/img/items/'. $nama_gambar_baru);
            $query =  mysqli_query($koneksi, "UPDATE items set nama_barang = '$nama_barang', 
                        harga_barang = '$harga_barang', kuantitas = '$kuantitas', gambar = '$nama_gambar_baru' ");
            if($query)
            {
                echo "<script>
                        alert('Barang Berhasil diubah :)');
                        window.location.assign('tampil-barang.php');
                    </script>";
                    return false;
            }
            else
            {
                echo "<script>
                        alert('Barang GAGAL diubah :)');
                        window.location.assign('tampil-barang.php');
                    </script>";
                    return false;
            }
            return false;
        }
        else
        {
            echo "<script>
                        alert('Ukuran Gambar Terlalu Besar :)');
                        window.location.assign('tampil-barang.php');
                    </script>";
                    return false;
        }
    }
    else
    {
        echo "<script>
                alert('Ekstensi File tidak diperbolehkan :)');
                window.location.assign('tampil-barang.php');
            </script>";
            return false;
    }
?>