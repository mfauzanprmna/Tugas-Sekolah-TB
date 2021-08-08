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
                        <a class="nav-link" href="tampil.php">List Item</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="transaksi.php">Transaksi</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="#Contact">Pesanan</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
        <div class="row text-center">
            <div class="col">
                <div class="container pt-2 pb-2 mt-3 mb-3 halaman border" style="width: 30rem;">
                <?php 
                    $sql = "SELECT * FROM log_pesanan";
                    $query = mysqli_query($conn, $sql);
                    while ($pel = mysqli_fetch_array($query)){;
                    ?>
                        <div class="card p-2 mb-3 items" style="width: 20rem;">
                                <p><span style="margin-right: 200px;"><?php echo $pel['nama_barang'] ?></span><span class="float-end fw-bold number-card" id="hrg">Rp. <?php echo number_format($pel['harga_barang']) ?></span></p>
                                <p class="fw-light"><span class="fw-bold number-card mt-3" style="margin-right: 120px;">Qty: <?php echo $pel['jumlah_barang'] ?></span>
                                    <span class="float-end"><?php echo date("l, d M Y") ?></span></p>
                        </div>
                <?php } ?>
            </div>
            </div>
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