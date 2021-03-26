<?php 
    include 'koneksi.php';

    // Simpan Form Contact
    if(isset($_POST['simpan'])){
        $nama = $_POST['nama'];
        $email = $_POST['email'];
        $tlp = $_POST['tlp'];
        $pesan = $_POST['pesan'];
        $sql = "INSERT INTO porto_contact (id, nama, email, telepon, pesan) VALUES (NULL, '$nama', '$email', '$tlp', '$pesan')";
        if(empty($nama) || empty($email) || empty($tlp) || empty($pesan)){
            header("Location: index.php?error");
        } else{
            header("Location: index.php?success");
            $query = mysqli_query($conn, $sql);
        }
    }

    // Simpan Form My Project
    if(isset($_POST['save'])){
        $gambar = $_POST['gambar1'];
        $desc = $_POST['desc'];
        $sql = "INSERT INTO gallery (id, gambar, descr) VALUES (NULL, '$gambar', '$desc')";
        $query = mysqli_query($conn, $sql);
        if($query){
            header("Location: admin.php");
        } else {
            header("Location: admin.php?status=gagal");
        }
    }
?>