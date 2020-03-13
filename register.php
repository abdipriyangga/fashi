 <?php require_once('layouts/header.php') ?>
 <!-- Register Section Begin -->
 <?php 
    require_once('functions.php');
    if(isset($_POST["register"]))
    {
        if(register($_POST) > 0 )
        {
            echo "<script>
                alert('Data berhasil ditambahkan');
              </script>";
        }
        else
        {
            echo mysqli_error($koneksi);
        }
    }
    
 ?>
 <div class="register-login-section spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 offset-lg-3">
                    <div class="register-form">
                        <h2>Register</h2>
                        <form action="#" method="post">
                            <div class="group-input">
                                <label for="email">Email *</label>
                                <input type="email" id="username" name="email">
                            </div>
                            <div class="group-input">
                                <label for="username">Username *</label>
                                <input type="text" id="username" name="username">
                            </div>
                            <div class="group-input">
                                <label for="pass">Password *</label>
                                <input type="password" id="pass" name="password">
                            </div>
                            <div class="group-input">
                                <label for="pass">Confirm Password *</label>
                                <input type="password" id="pass2" name="password2">
                            </div>
                            <button type="submit" class="site-btn register-btn" name="register">REGISTER</button>
                        </form>
                        <div class="switch-login">
                            <a href="./login.html" class="or-login">Or Login</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Register Form Section End -->
    <?php require_once('layouts/footer.php') ?>