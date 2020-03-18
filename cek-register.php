<?php 
include 'koneksi.php';

// Fungsi untuk register
function register($data)
{
    global $koneksi; // untuk membuat var $koneksi bisa digunakan secara global

    // untuk menangkap data inputan dari user yang ada pada form register
    // strtoLower berfungsi untuk membuat inputan menjadi huruf kecil semua
    // stripslashes berfungsi untuk membersihkan jikalau ada user iseng yang ingin memasukkan karakter-karakter
    //  seperti /, \, dll.
    // mysqli_real_escape_string berfungsi untuk mencegah dari serangan SQL Injection
    $email = strtoLower(stripslashes($data["email"]));
    $username = strtoLower(stripslashes($data["username"]));
    $password = mysqli_real_escape_string($koneksi, $data["password"]);
    $password2 = mysqli_real_escape_string($koneksi, $data["password2"]);

    // konfirmasi username
    $query = mysqli_query($koneksi,"select username from user_pelanggan where username='$username'");
    if(mysqli_fetch_assoc($query))
    {
        echo "<script>
                alert('USername yang anda masukkan sudah ada');
            </script>";
        return false;
    }
    // konfirmasi / pengecekan password
    if( $password !== $password2)
    {
        echo "<script>
                alert('Konfirmasi password Salah');
                </script>";

        return false;
    }

    // enkripsi password
    $password = password_hash($password, PASSWORD_DEFAULT);

    // tambahkan user baru ke database
    mysqli_query($koneksi, "INSERT into user_pelanggan  VALUES
    ('','$email', '$username', '$password')");
    return mysqli_affected_rows($koneksi);
}


?>