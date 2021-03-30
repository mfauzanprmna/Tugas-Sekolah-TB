<?php
    session_start();
    if( !isset($_SESSION['login']) ){
        header("Location: login.php");
        exit;
    }
include 'koneksi.php';

    if (isset($_GET['id'])){
        header('Location: admin.php');
    }
    $id =$_GET['id'];

    $sql = "DELETE FROM gallery where id='$id'";
    $query = mysqli_query($conn,$sql);
    if ($query){
        header('Location: admin.php?success');
    }else{
        header('location: hapus.php?status=gagal');
    }
?>