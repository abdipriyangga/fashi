<?php
include '../koneksi.php'; //menghubungkan dengan database

// aksi ketika tombol login ditekan
if(isset($_POST['login']))
{
    // membuat variabel untuk menampung inputan dari user pada form
    $username = $_POST['username'];
    $password = $_POST['password'];

    // untuk membuat query / perintah yang akan dilakukan oleh database
    $query = mysqli_query($koneksi, "SELECT * FROM users WHERE username = '$username' AND password = '$password' ");
    // untuk mengecek ada berapa baris datanya di dalam tabel
    $cek = mysqli_num_rows($query);
    
    // untuk konfirmasi bila ada user baru yang mau masuk
    if($cek > 0 )
    {    
        session_start(); // untuk membuka sesi
        //untuk menangkap data dari hasil perintah query dan kemudian ditampilkan dalam bentuk array assosiative
        $row = mysqli_fetch_assoc($query); 

        // untuk mengambil username yang telah melakukan login
        $_SESSION['username'] = $row['username'];

        // untuk menampilkan alert atau pemberitahuan ketika user berhasil login
        echo "<script>alert('Selamat Anda berhasil Login');
                    window.location.assign('homepage.php');
            </script> ";
    }
    else
    {
         // untuk menampilkan alert atau pemberitahuan ketika user gagal login
        echo "<script>alert('Anda GAGAL LOGIN!!');
                window.location.assign('login-admin.php');
            </script> ";
    }
}
?>