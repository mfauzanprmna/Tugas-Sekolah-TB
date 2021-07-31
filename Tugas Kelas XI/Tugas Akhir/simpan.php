<?php 
    include 'proses.php';
    if (isset($_POST['submit'])) {
        $nama = $_POST['nama'];
        $jumlah = $_POST['qty'];
        $harga = $_POST['harga'];
        $sql = "INSERT INTO sewa (nama_baju, jumlah_baju, harga_total) VALUES ('$nama','$jumlah','$harga')";
        $query = mysqli_query($connect, $sql);

        if ($query) {
            header('Location: index.php');
        } else {
            header('Location: simpan.php?status=gagal');
        }
        
    }
?>