<?php 
    include 'koneksi.php';

    // Edit Profile
    if(isset($_POST['edit'])){
        $id = $_POST['id'];
        $gambar = $_POST['gambar1'];
        $nama = $_POST['nama'];
        $jurusan = $_POST['jurusan'];
        $about1 = $_POST['about1'];
        $about2 = $_POST['about2'];
        $sql = "UPDATE porto_isi SET gambar='$gambar', nama='$nama', jurusan='$jurusan', about1='$about1', about2='$about2' WHERE id_isi='$id'";
        $query = mysqli_query($conn, $sql);
        if($query){
            header("Location: admin.php");
        } else {
            header("Location: admin.php?status=gagal");
        }
    }

    // Edit My Project
    if(isset($_POST['save'])){
        $id = $_POST['id1'];
        $gambar = $_POST['gambar1'];
        $nama = $_POST['desc'];
        $sql = "UPDATE gallery SET gambar='$gambar', descr='$nama' WHERE id='$id'";
        $query = mysqli_query($conn, $sql);
        if($query){
            header("Location: admin.php");
        } else {
            header("Location: admin.php?status=gagal");
        }
    }
?>