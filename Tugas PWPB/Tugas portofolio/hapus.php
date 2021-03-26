<?php
include 'koneksi.php';

    if (isset($_GET['id'])){
        header('Location: admin.php');
    }
    $id =$_GET['id'];

    $sql = "DELETE FROM gallery where id='$id'";
    $query = mysqli_query($conn,$sql);
    if ($query){
        header('Location: admin.php');
    }else{
        header('location: hapus.php?status=gagal');
    }
?>