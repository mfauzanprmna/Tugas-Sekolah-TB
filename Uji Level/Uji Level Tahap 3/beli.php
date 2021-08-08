<?php 
    session_start();

    $id= $_GET['id_barang'];

    if (isset ($_SESSION['keranjang'][$id])) {
        $_SESSION['keranjang'][$id] += 1;
    }else{
        $_SESSION['keranjang'][$id] = 1;
    }
    echo "<script>location='tampil.php'</script>";
?>