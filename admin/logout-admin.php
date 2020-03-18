<?php
    session_start();
    session_destroy(); // untuk mengakhiri sesi
    echo "<script> 
            alert('Anda Berhasil Logout');
            window.location.assign('login-admin.php');
        </script>";
    //header("Location:login-admin.php");
?>