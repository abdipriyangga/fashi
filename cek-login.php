<?php
    //membuat session
    session_start();
 
    //menghubungkan dengan koneksi
    include 'koneksi.php';

    //menangkap data yang dikirm dari form
    $username = $_POST['username'];
    $password = $_POST['password'];

    //menyeleksi data admin yang sesuai
    $data = mysqli_query($koneksi, "select username from user_pelanggan where username = '$username'");
    //menghitung jumlah rows
    $result = mysqli_num_rows($data);

    if($result > 0)
    {
        // cek password
        $row = mysqli_fetch_assoc($result, MYSQLI_ASSOC);
        if( password_verify($password, $row["password"]))
        {
            header("Location:index.php");
            exit;
        } 
        
    }
    else
    {
        header("Location:login.php?pesan=gagalLogin");
    }
?>