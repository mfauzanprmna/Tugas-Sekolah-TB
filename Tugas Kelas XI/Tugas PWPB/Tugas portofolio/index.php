<?php 
    session_start();
    include 'koneksi.php';
    if( isset($_POST['login']) ) {
        $user = $_POST['user'];
        $pass = $_POST['pass'];
        $result = mysqli_query($conn, "SELECT * FROM user WHERE username = '$user'");
        if( mysqli_num_rows($result) === 1 ){
            $row = mysqli_fetch_assoc($result);
            if ( password_verify($pass, $row['password']) ){
                $_SESSION['login'] = true;
                header("Location: admin.php");
                exit;
            }
        }
        $error = true;
    }
?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <link rel="stylesheet" href="style1.css">
    <style>
        .roun {
            border-radius: 20px;
        }
        .tes a {
            text-decoration: none;
        }
    </style>

    <title>Login</title>
    </head>
    <body style="background-image: url(https://thumbs.gfycat.com/NervousSmallAustralianfreshwatercrocodile-size_restricted.gif);">
        <div class="container d-flex justify-content-center" style="color: white;">
            <div class="mt-5 roun shadow-lg d-md-1" style="width: 37rem; background-color: rgb(35, 71, 170);">
                <h1 class="text-center mt-2">Login Admin</h1>
                <form class="ms-5 me-5 mt-auto" method="POST" action="">
                <?php if( (isset($error)) ) : ?>
                    <p class="form-text" style="color: red;">
                        <i>Username / Password Salah!</i> 
                    </p>
                <?php endif; ?>
                    <div class="form-group mt-4 mb-4">
                        <label for="exampleFormControlInput1">Username</label>
                        <input type="text" name="user" class="form-control" id="exampleFormControlInput1" placeholder="Masukan Username">
                    </div>
                    <div class="form-group mt-4 mb-4">
                        <label for="exampleFormControlInput1">Password</label>
                        <input type="password" name="pass" class="form-control" id="exampleFormControlInput1" placeholder="Masukan Password">
                    </div>
                    <button type="submit" name="login" class="form-control btn btn-outline-primary mb-3">Login</button>
                    <a href="user.php"><button type="button" name="masuk" class="form-control btn btn-primary mb-3">Masuk Sebagai User</button></a>
                    <p class="mb-4 tes">Jika belum mempunyai akun, silakan <a href="register.php">Registrasi</a> terlebih dahulu!!</p>
                </form>
            </div>
        </div>
    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js" integrity="sha384-SR1sx49pcuLnqZUnnPwx6FCym0wLsk5JZuNx2bPPENzswTNFaQU1RDvt3wT4gWFG" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.min.js" integrity="sha384-j0CNLUeiqtyaRmlzUHCPZ+Gy5fQu0dQ6eZ/xAww941Ai1SxSY+0EQqNXNE6DZiVc" crossorigin="anonymous"></script>
    -->
    </body>
</html>
