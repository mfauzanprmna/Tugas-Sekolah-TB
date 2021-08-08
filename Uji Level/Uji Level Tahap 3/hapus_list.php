<?php

session_start();
include 'koneksi.php';
$id = $_GET["id_barang"];
    unset($_SESSION['keranjang'][$id]);

    // echo "<script>alert('List Produk Telah Dihapus')</script>";
    echo "<script>location='tampil.php'</script>";
?>