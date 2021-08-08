<?php 
    include 'koneksi.php';
?>
<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
        <link rel="stylesheet" href="style2.css">

    <title>Hello, world!</title>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-dark" style="background-color: rgb(0, 93, 180);">
        <div class="container">
            <a class="navbar-brand" href="#">Starbhak Mart</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link " href="tampil.php">List Item</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="#Gallery">Transaksi</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="log.php">Pesanan</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="container">
    <table class="table mt-4" border="1">    
        <tr class="bg-dark text-white">
            <th>No</th>
            <th>Nama Pembeli</th>
            <th>Nama Barang</th>
            <th>Jumlah</th>
            <th>Harga</th>
            <th>Pembayaran</th>
            <th>Kembalian</th>
        </tr>
        <?php
        $sql = "SELECT * FROM transaksi";
        $query = mysqli_query($conn,$sql);
        $nomor = 0;
        while ($pel = mysqli_fetch_array($query)){
            echo "<tr>";
            echo "<td>".$pel['id_transaksi']."</td>";
            echo "<td>".$pel['nama_pembeli']."</td>";
            echo "<td>".$pel['nama_barang']."</td>";
            echo "<td>".$pel['jumlah_barang']."</td>";
            echo "<td>".$pel['harga']."</td>";
            echo "<td>".$pel['pembayaran']."</td>";
            echo "<td>".$pel['kembalian']."</td>";
            echo "</tr>";
        }
        ?>
        </table>
        </div>
    
    <!-- Optional JavaScript; choose one of the two! -->
    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous">
    </script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.6.0/dist/umd/popper.min.js" integrity="sha384-KsvD1yqQ1/1+IA7gi3P0tyJcT3vR+NdBTt13hSJ2lnve8agRGXTTyNaBYmCR/Nwi" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.min.js" integrity="sha384-nsg8ua9HAw1y0W1btsyWgBklPnCUAFLuTMS2G72MMONqmOymq585AcH49TLBQObG" crossorigin="anonymous"></script>
    -->
</body>

</html>