<?php 
    session_start();
    include 'koneksi.php';

    // Session Agar Tidak Bisa Masuk Sebelum Login
    if( !isset($_SESSION['login']) ){
        header("Location: login.php");
        exit;
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
        .tambah:hover {
            background: rgb(0, 0, 0, 0.8);
        }

        .project img {
            max-width: 100%;
        }
    </style>

    <title>Admin</title>
    </head>
    <body>

        <!-- Navbar -->
        <nav class="navbar navbar-expand-lg navbar-light" style="background-color: rgb(3, 235, 235);">
            <div class="container">
                <a class="navbar-brand" href="#">Fauzan</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav ms-auto">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="#home">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#about">About Me</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#project">My Project</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#contact">Pesan</a>
                        </li>
                        <li class="nav-item ms-3">
                            <a class="nav-link ms-3" href="logout.php">Logout</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>

        <!-- Jumbotron -->
        <div class="jumbotron text-center" id="home" style="background-color: rgb(43, 248, 248);">
            <div class="container">
                <?php 
                    $sql = "SELECT * FROM porto_isi";
                    $query = mysqli_query($conn, $sql);
                    while ($pel = mysqli_fetch_array($query)){;
                ?>
                <input type="hidden" name="" id="" value="<?php echo $pel['id_isi'] ?>">
                <img src="<?php echo $pel['gambar'] ?>" alt="" width="300px" height="300px" class="rounded-circle img-thumbnail">
                <h1 class="display-4 color"><?php echo $pel['nama'] ?></h1>
                <p class="lead color"><?php echo $pel['jurusan'] ?></p>
                <p class="mt-4">
                    <a href="formedit.php?id_isi=<?php echo $pel['id_isi'] ?>">
                        <button type="button" class="btn btn-outline-primary">Edit Profile</button>
                    </a>
                </p>
                <?php } ?>
            </div>
        </div>

        <!-- About Me -->
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#2bf8f8" fill-opacity="1" d="M0,224L48,229.3C96,235,192,245,288,224C384,203,480,149,576,154.7C672,160,768,224,864,250.7C960,277,1056,267,1152,261.3C1248,256,1344,256,1392,256L1440,256L1440,0L1392,0C1344,0,1248,0,1152,0C1056,0,960,0,864,0C768,0,672,0,576,0C480,0,384,0,288,0C192,0,96,0,48,0L0,0Z"></path></svg>
        <div class="container mt-3 mb-3" id="about">
            <h1 class="text-center">About Me</h1>
            <?php 
                $sql = "SELECT * FROM porto_isi";
                $query = mysqli_query($conn, $sql);
                while ($pel = mysqli_fetch_array($query)){;
            ?>
            <div class="row">
                <div class="col">
                    <div class="container">
                        <p class="text-center mt-2 mb-2 fs-5"><?php echo $pel['about1'] ?></p>
                        <p class="text-center mt-2 mb-2 fs-5"><?php echo $pel['about2'] ?></p>
                    </div>
                </div>
            </div>
        </div>
        <?php } ?>

        <!-- My Project -->
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#2bf8f8" fill-opacity="1" d="M0,224L48,229.3C96,235,192,245,288,224C384,203,480,149,576,154.7C672,160,768,224,864,250.7C960,277,1056,267,1152,261.3C1248,256,1344,256,1392,256L1440,256L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z"></path></svg>        
        <div class="pt-3 pb-3" id="project" style="background-color: rgb(43, 248, 248);">
        <?php 
            if(isset($_GET["success"])){;
            ?>
            <div class="alert alert-success" role="alert" id="alert">
                    Data Berhasil Di Hapus
                    <button type="button" class="close btn float-end" data-bs-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
            </div>
        <?php } ?>
            <h1 class="text-center mb-4 mt-4">My Project</h1>
            <div class="container m-auto tes">
                <button class="btn form-control" data-bs-toggle="modal" data-bs-target="#modal">
                    <h1 class="text-center">+</h1>
                </button>
                <hr class="m-auto">
            </div>
            <div class="container halaman">
                <?php 
                    $sqla = "SELECT * FROM gallery";
                    $querya = mysqli_query($conn, $sqla);
                    while ($pela = mysqli_fetch_array($querya)){;
                ?>
                <div class="card project mt-2 ms-3 me-3 mb-3" style="width: 14rem; height: 14rem;">
                    <img src="<?php echo $pela['gambar'] ?>" class="card-img-top" alt="...">
                    <div class="tombol" style="width: 14rem; height: 14rem; background: rgb(0, 0, 0, 0.4);">
                        <h3 class="text-center mt-3 text-warning"><?php echo $pela['nama_projek'] ?></h3>
                        <p class="text-center text-light"><?php echo $pela['descr'] ?></p>
                        <div class="card-footer">
                            <span>
                                <button class="btn float-start">
                                    <a href="formeditmy.php?id=<?php echo $pela['id'] ?>"><img src="https://www.pngkey.com/png/full/202-2022557_edit-comments-edit-icon-png.png" alt="" width="30px" height="30px"></a>
                                </button>
                                <button class="btn float-end">
                                    <a href="hapus.php?id=<?php echo $pela['id'] ?>"><img src="https://icons-for-free.com/iconfiles/png/512/delete+remove+trash+trash+bin+trash+can+icon-1320073117929397588.png" alt="" width="30px" height="30px"></a>
                                </button>
                            </span>
                        </div>
                    </div>
                </div>
                <?php } ?>
            </div>
        </div>

        <!-- Modal -->
        <div class="modal fade" id="modal" tabindex="-1">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header text-light" style="background-color: #1B95AF;">
                        <h5 class="modal-title">Masukkan data</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <form action="simpan.php" method="POST">
                        <div class="modal-body" style="overflow-y: scroll; height: 600px;">                  
                            <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label fw-bold">Nama Project</label>
                                <input required type="text" class="form-control" id="name" name="name">
                            </div>
                            <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label fw-bold">Link Gambar</label>
                                <input required type="text" class="form-control" id="gambar" name="gambar1">
                            </div>
                            <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label fw-bold">Description</label>
                                <input type="text" class="form-control" id="desc" name="desc">
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-primary" name="save">Save</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>

        <!-- Pesan -->
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#2bf8f8" fill-opacity="1" d="M0,96L48,133.3C96,171,192,245,288,245.3C384,245,480,171,576,138.7C672,107,768,117,864,144C960,171,1056,213,1152,240C1248,267,1344,277,1392,282.7L1440,288L1440,0L1392,0C1344,0,1248,0,1152,0C1056,0,960,0,864,0C768,0,672,0,576,0C480,0,384,0,288,0C192,0,96,0,48,0L0,0Z"></path></svg>                
        <div class=" container pt-3 pb-3" id="contact">
            <a href="cetak.php" target="_blank"><button class="btn btn-outline-primary ms-5">Cetak</button></a>
            <h1 class="text-center">Pesan</h1>
            <div class="container halaman mt-3 mb-3" style="height: 600px; overflow: auto;">
            <?php 
                $sql = "SELECT * FROM porto_contact";
                $query = mysqli_query($conn, $sql);
                while ($pel = mysqli_fetch_array($query)){;
            ?>
            <div class="card  p-2 mb-3 items" style="width: 50rem;">
                <p><span class="fw-bold" style="margin-right: 200px;"><?php echo $pel['nama'] ?></span><span class="float-end fw-bold number-card" id="hrg"><?php echo date("l, d M Y") ?></span></p>
                <p class="fs-6 m-0"><?php echo $pel['email'] ?></p>
                <hr>
                <p class="fw-light"><span class=" number-card mt-3" style="margin-right: 120px;"><?php echo $pel['pesan'] ?></span></p>
            </div>
            <?php } ?>
            </div>
        </div>

        <!-- Footer -->
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#2bf8f8" fill-opacity="1" d="M0,96L48,133.3C96,171,192,245,288,245.3C384,245,480,171,576,138.7C672,107,768,117,864,144C960,171,1056,213,1152,240C1248,267,1344,277,1392,282.7L1440,288L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z"></path></svg>
        <footer class="text-center pt-3 pb-1" style="background-color: rgb(3, 235, 235);">
            <h6>Muhammad Fauzan Permana</h6>
        </footer>
        
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
