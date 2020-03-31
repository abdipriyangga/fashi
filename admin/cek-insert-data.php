<?php 
include '../koneksi.php';

$nama_barang = $_POST["nama-barang"];
$harga_barang = $_POST["harga-barang"];
$kuantitas = $_POST["kuantitas"];
$gambar_nama = $_FILES["gambar"]["name"]; //Variabel untuk menampung nama gambar
$ekstensi_diperbolehkan = ['png','jpeg', 'jpg']; //variabel untuk menampung ekstensi gambar yang di perbolehkan upload
// Explode adalah fungsi yang digunakan untuk memecah atau memisah suatu string menjadi array yang mana explode
// memiliki dua parameter yaitu delimiter dan string dibawah ini memakai delimiter '.' yang berarti jika didalam
// suatu string ada . maka string itu akan dipisah dibawah ini yang mau diambil adalah ekstensi dari suatu file
$pisah_ekstensi = explode('.', $gambar_nama);
$ekstensi = strtolower(end($pisah_ekstensi));
$gambar_ukuran = $_FILES["gambar"]["size"]; //variabel untuk menampung ukuran dari gambar
$tmp = $_FILES["gambar"]['tmp_name']; // variabel sementara untuk menampung gambar
// Uniqid adalah sebuah fungsi yang berguna untuk mengenerate bilangan random, jadi gambar ketika diupload ke
// database maka akan langsung digenerete atau di kasih nama random, hal ini dilakukan agar terhindar dari
// gambar yang memiliki nama sama
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
        $query = mysqli_query($koneksi, "INSERT INTO items (id_barang, nama_barang, harga_barang, kuantitas, gambar)
                    Values('','$nama_barang', '$harga_barang', '$kuantitas', '$nama_gambar_baru')");
        if($query)
        {
            echo "<script>
                    alert('Barang Berhasil ditambahkan :)');
                    window.location.assign('insert-data.php');
                </script>";
                return false;
        }
        else
        {
            echo "<script>
                    alert('Barang GAGAL ditambahkan :)');
                    window.location.assign('insert-data.php');
                </script>";
                return false;
        }
        return false;
    }
    else
    {
        echo "<script>
                    alert('Ukuran Gambar Terlalu Besar :)');
                    window.location.assign('insert-data.php');
                </script>";
                return false;
    }
}
else
{
    echo "<script>
            alert('Ekstensi File tidak diperbolehkan :)');
            window.location.assign('insert-data.php');
        </script>";
        return false;
}

?>