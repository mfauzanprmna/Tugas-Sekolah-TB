<?php 
    include 'koneksi.php';
    if (isset($_POST['simpan'])) {
        $nama = $_POST['nama'];
        $harga = $_POST['harga'];
        $gambar = $_POST['gambar'];
        $sql = "INSERT INTO produk (id_barang, nama_barang, harga_barang, gambar_barang) VALUES (NULL,'$nama','$harga','$gambar')";
        $query = mysqli_query($conn, $sql);
        if ($query) {
            header('Location: tampil.php');
        }else{
            header('Location: simpan.php?status=gagal');
        }
    }

    if (isset($_POST['transaksi'])) {
        $namap = $_POST['nama_pembeli'];
        $namab = $_POST['nama_barang'];
        $jumlah = $_POST['qty'];
        $harga = $_POST['total'];
        $bayar = $_POST['uang_bayar'];
        $kembalian = $bayar - $harga;
        $sql = "INSERT INTO transaksi (id_transaksi, nama_pembeli, nama_barang, jumlah_barang, harga, pembayaran, kembalian) VALUES (NULL,'$namap', '$namab', '$jumlah', '$harga', '$bayar', '$kembalian')";
        $query = mysqli_query($conn, $sql);
        if ($query) {
            header('Location: transaksi.php');
        }else{
            header('Location: simpan.php?status=gagal');
        }
    }
?>