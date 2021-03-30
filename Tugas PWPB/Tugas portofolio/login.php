<?php 
    include 'koneksi.php';
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

    <title>Admin</title>
    </head>
    <body>
        <div class="container">
            <div class="container mt-auto">
                <h1 class="text-center">Portofolio</h1>
                <form class="ms-5 me-5 mt-auto" method="POST" action="simpan.php">
                    <div class="form-group mt-4 mb-4">
                        <label for="exampleFormControlInput1">User</label>
                        <input type="text" name="user" class="form-control" id="exampleFormControlInput1">
                    </div>
                    <div class="form-group mt-4 mb-4">
                        <label for="exampleFormControlInput1">Password</label>
                        <input type="password" name="pass" class="form-control" id="exampleFormControlInput1">
                    </div>
                    <button type="submit" name="login" class="btn btn-primary mb-5">Login</button>
                    <p>Jika belum mempunyai akun, silakan <a href="register.php">Registrasi</a> terlebih dahulu!!</p>
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
