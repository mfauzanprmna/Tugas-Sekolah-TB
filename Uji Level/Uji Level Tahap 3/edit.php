<?php 
    include 'koneksi.php';

    if (isset($_POST['edit'])) {
        $id = $_POST['id'];
        $nama = $_POST['nama_edit'];
        $harga = $_POST['harga_edit'];
        $gambar = $_POST['gambar_edit'];
        $sql = "UPDATE produk SET nama_barang = '$nama', harga_barang = '$harga', gambar_barang = '$gambar' WHERE id_barang = '$id'";
        $query = mysqli_query($conn, $sql);
        if ($query) {
            header('Location: tampil.php');
        } else {
            header('Location: edit.php');
        }
    }
?>