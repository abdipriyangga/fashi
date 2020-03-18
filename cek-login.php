<?php
    //membuat session
    session_start();
 
    //menghubungkan dengan koneksi
    include 'koneksi.php';

    //menangkap data yang dikirm dari form
    $username = $_POST['username'];
    $password = $_POST['password'];

    //menyeleksi data admin yang sesuai
    $data = mysqli_query($koneksi, "SELECT * from user_pelanggan where username='$username'");
    //menghitung jumlah rows
    $cek = mysqli_num_rows($data);
    if($cek === 1)
    {
        // cek password
        $row = mysqli_fetch_assoc($data);
        if( password_verify($password, $row["password"]))
        {
            header("location:index.php");
            exit;
        } 
        
    }
    else
    {
        header("Location:login.php?pesan=gagalLogin");
    }
?>