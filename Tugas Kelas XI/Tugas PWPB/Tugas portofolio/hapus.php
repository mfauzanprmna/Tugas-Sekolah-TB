<?php
    session_start();

    // Session Agar Tidak Bisa Masuk Sebelum Login
    if( !isset($_SESSION['login']) ){
        header("Location: login.php");
        exit;
    }
    include 'koneksi.php';

    // Hapus My Project
    if (isset($_GET['id'])){
        header('Location: admin.php');
    }
    $id =$_GET['id'];

    $sql = "DELETE FROM gallery where id='$id'";
    $query = mysqli_query($conn,$sql);
    if ($query){
        header('Location: admin.php?success#project');
    }else{
        header('location: hapus.php?status=gagal');
    }
?>