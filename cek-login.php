<?php
    //membuat session
    session_start();
 
    //menghubungkan dengan koneksi
    include 'koneksi.php';

    //menangkap data yang dikirm dari form
    $username = $_POST['username'];
    $password = $_POST['password'];

    //menyeleksi data admin yang sesuai
    $data = mysqli_query($koneksi, "select * from users where username='$username' and password='$password'");
    //menghitung jumlah rows
    $cek = mysqli_num_rows($data);

    if($cek > 0)
    {
        $_SESSION['username'] = $username;
        $_SESSION['status']   = "Login";
        header("Location:index.php");
    }
    else
    {
        header("Location:login.php?pesan=gagalLogin");
    }
?>