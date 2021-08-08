<?php
include 'koneksi.php';

if (isset($_GET['id'])){
    header('Location: tampil.php');
}
$id =$_GET['id_barang'];

$sql = "DELETE FROM produk where id_barang='$id'";
$query = mysqli_query($conn,$sql);
if ($query){
        header('Location: tampil.php');
    }else{
        header('location: hapus.php?status=gagal');
    }
?>