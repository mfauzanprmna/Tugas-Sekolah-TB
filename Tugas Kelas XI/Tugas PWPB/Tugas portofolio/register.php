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

    <style>
        .fles {
            width: 980px;
            height: 680px;
            display: flex;
        }
        .roun {
            border-radius: 20px;
        }
    </style>

    <title>Register</title>
    </head>
    <body style="background-image: url(https://thumbs.gfycat.com/NervousSmallAustralianfreshwatercrocodile-size_restricted.gif);">
        <div class="container d-flex justify-content-center" style="color: white;">
        <div class="card roun mt-5 shadow-lg" style="width: 37rem; background-color: rgb(35, 71, 170);">
                <h1 class="text-center mt-3">Registrasi</h1>
                <form class="ms-5 me-5 mt-auto" method="POST" action="simpan.php">
                    <div class="form-group mt-4 mb-4">
                        <label for="exampleFormControlInput1">Username</label>
                        <input type="text" name="user" class="form-control" id="exampleFormControlInput1" placeholder="Masukan Username">
                        <?php
                        if(isset($_GET["userwrong"])){;
                        ?>
                        <div class="form-text" style="color: red;">
                            <i>Username sudah tersedia!</i> 
                        </div>
                        <?php } ?>
                        <?php
                        if(isset($_GET["emptyuser"])){;
                        ?>
                        <div class="form-text" style="color: red;">
                            <i>Username harus diisi</i> 
                        </div>
                        <?php } ?>
                    </div>
                    <div class="form-group mt-4 mb-4">
                        <label for="exampleFormControlInput1">Password</label>
                        <input type="password" name="pass" class="form-control" id="exampleFormControlInput1" placeholder="Masukan Password">
                        <?php
                            if(isset($_GET["emptypass"])){;
                        ?>
                        <div class="form-text" style="color: red;">
                            <i>Password harus diisi</i> 
                        </div>
                        <?php } ?>
                    </div>
                    <div class="form-group mt-4 mb-4">
                        <label for="exampleFormControlInput1">Konfirmasi Password</label>
                        <input type="password" name="pass2" class="form-control" id="exampleFormControlInput1"  placeholder="Masukan Ulang Password">
                        <?php 
                            if(isset($_GET["passwrong"])){;
                        ?>
                        <div class="form-text" style="color: red;">
                            <i>Password yang dimasukkan salah!</i>
                        </div>
                        <?php } ?>
                    </div>
                    <button type="submit" name="register" class="form-control btn btn-primary mb-5">Register</button>
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
