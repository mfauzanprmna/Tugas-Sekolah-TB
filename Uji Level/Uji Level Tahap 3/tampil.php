<?php
    session_start();
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
                        <a class="nav-link active" href="#AboutMe">List Item</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="transaksi.php">Transaksi</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="log.php">Pesanan</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="container-fluid">
        <d class="row">
            <div class="col-4">
                <div class="container pt-2 pb-2 mt-3 mb-3" style="background-color: rgb(5, 133, 253);">
                    <h5 class="text-center mb-3 text-light">Keranjang
                    </h5>
                    <div class="list mt-2 mb-2" style="height: 500px; overflow: auto; background-color: white;">
                    <div class="card-body">
                        
                        <?php 
                        $total = 0; 
                        $discount = 0; 
                        $totalharga = 0; 
                        $pajak = 0; 
                        $tax = ''; 
                        $harga = 0; 
                        $disc = '';
                        $dis =0;
                        $total =0;
                        $semua =0;
                    
                    ?>
                    <?php foreach ($_SESSION['keranjang'] as $id => $jumlah) : ?>
                        <?php
                        $sqli = mysqli_query($conn, "SELECT * FROM produk WHERE id_barang='$id'");
                        $pecah = $sqli->fetch_array();
                        $supharga = $pecah['harga_barang'] * $jumlah;
                        $nama_barang = [''];
                        array_push($nama_barang, $pecah['nama_barang']);
                        ?>
                    <div class="card text-card p-2 mb-3 items">
                        <p><?php echo $pecah['nama_barang'] ?><span class="float-end fw-bold number-card" id="hrg">Rp. <?php echo number_format($supharga) ?></span></p>
                        <p class="fw-light">Unit Price: <span class="fw-bold number-card mt-3">Rp. <?php echo number_format($pecah['harga_barang']) ?></span>
                            Quantity: <span class="float-end fw-bold"><?php echo $jumlah ?></span></p>
                        <button type="button" class="btn ms-auto"><a href="hapus_list.php?id_barang=<?php echo $id ?>"><img src="https://icons-for-free.com/iconfiles/png/512/delete+remove+trash+trash+bin+trash+can+icon-1320073117929397588.png" alt="" width="20px" height="20px"></a></button>
                    </div>

                    <?php 
                    $total += $supharga -$discount ;
                    $discount += $supharga ;
                    $pajak += $supharga ;
                    $semua += $supharga;
                    $totalharga = $semua - $discount +$pajak ; 
                    ?>

                        

                    <?php endforeach ?>

                    <?php 
                        if ($totalharga >= 150000 ) {
                            $taxx = '20%';
                            $disc = '60%';
                            $tax = 20 * $totalharga / 100;
                            // 60%
                            $dis  += 60 * $totalharga / 100 ;
                            $diskon = $totalharga - $dis;
                            $total = $diskon + $tax;
                            //   ini misal harga di bawah 100 rb discont 20% 
                        }else if( $totalharga >= 100000 ){
                            $taxx = '10%';
                            $disc = '30%';
                            $tax = 10 * $totalharga / 100;
                            $dis  += 30 * $totalharga / 100 ;
                            $diskon = $totalharga - $dis;
                            $total = $diskon + $tax;

                        } else {
                            $taxx = '10%';
                            $tax = 10 * $totalharga / 100;
                            $dis = 0;
                            $diskon = $totalharga - $dis;
                            $total = $diskon + $tax;
                        }
                            // $pajak += $supharga * 0.1;
                            // $totalharga += $supharga -$discount +$pajak ; 
                            // $harga = $totalharga ;
                    ?>
            
                </div>
            </div>
            <table width="100%" class="ms-2">
                <tbody>
                    <tr>
                        <td>
                            <?php 
                                foreach($nama_barang as $nb){
                                    echo $nb;
                                }
                            ?>
                        </td>
                    </tr>
                    <tr>
                        <td>Seluruh Harga</td>
                        <td>Rp. <?php echo number_format($totalharga)?><span id="discount"></span></td>
                    </tr>
                    <tr>
                        <td>Discont (<?= $disc ?>) </td>
                        <td>Rp. <?php echo number_format($dis)?><span id="discount"></span></td>
                    </tr>
                    <tr>        
                        <td>PPN (<?= $taxx ?>)</td>
                        <td>Rp. <?php echo number_format($tax)?><span id="pajak"></span></td>
                    </tr>
                    <tr class="background text-white">
                        <td>Total Bayar</td>
                        <td>Rp. <?php echo number_format($total)?><span id="totalbayar"></span></td>
                    </tr>
                </tbody>
            </table>
                    <button type="button" class="btn btn-light mt-3 btn-block" data-bs-toggle="modal" data-bs-target="#modal">Bayar</button>
                </div>
            </div>
            <!-- Modal -->
    <div class="modal fade" id="modal" tabindex="-1">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header text-light" style="background-color: #1B95AF;">
                    <h5 class="modal-title">Masukkan data</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <form action="simpan.php" method="POST">
                    <div class="modal-body" style="overflow-y: scroll; height: 600px;">
                    
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label fw-bold">Nama Pembeli</label>
                            <input required type="text" class="form-control" id="nama_pembeli" name="nama_pembeli" aria-describedby="emailHelp">
                        </div>

                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label fw-bold">Nama Produk</label>
                            <input type="text" class="form-control" id="nama_barang" name="nama_barang" aria-describedby="emailHelp" value="<?php echo $nama_barang ?>">
                        </div>

                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label fw-bold">Qty</label>
                            <input type="number" class="form-control" id="qty" name="qty" aria-describedby="emailHelp" value="<?php echo $jumlah ?>">
                        </div>

                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label fw-bold">Harga</label>
                            <input type="number" class="form-control" id="total" name="total" aria-describedby="emailHelp" value="<?php echo $total?>">
                        </div>

                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label fw-bold">Bayar</label>
                            <input type="number" class="form-control" id="uang_bayar" name="uang_bayar" aria-describedby="emailHelp" value="">
                        </div>

                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary" name="transaksi">Bayar</button>
                    </div>

                </form>

            </div>
        </div>
    </div>
            <div class="col-8">
                <div class="container pt-2 pb-2 mt-3 mb-3" style="background-color: rgb(222, 239, 255);">
                    <h5>Item List</h5>
                </div>
                <div class="container pt-2 pb-2 mt-3 mb-3 halaman border">
                    <?php 
                        $sql = "SELECT * FROM produk";
                        $query = mysqli_query($conn, $sql);
                        while ($pel = mysqli_fetch_array($query)){;
                    ?>
                    <a href="beli.php?id_barang=<?php echo $pel['id_barang']; ?>">
                        <div class="card mb-3 mt-3 ms-2 me-2 items" style="width: 8rem;">
                            <img src="<?php echo $pel['gambar_barang'] ?>" class="card-img-top" alt="..." width="100px" height="100px">
                            <div class="card-body">
                                <b><p class="card-title"><?php echo $pel['nama_barang'] ?></p></b>
                                <p class="card-text">Rp. <?php echo $pel['harga_barang'] ?></p>
                            </div>
                            <div class="tombol">
                            <a class="btn float-start" href="formedit.php?id_barang=<?php echo $pel['id_barang']; ?>"><img src="https://www.pngkey.com/png/full/202-2022557_edit-comments-edit-icon-png.png" alt="" width="30px" height="30px"></a>
                            <a class="btn float-end" href="hapus.php?id_barang=<?php echo $pel['id_barang']; ?>"><img src="https://icons-for-free.com/iconfiles/png/512/delete+remove+trash+trash+bin+trash+can+icon-1320073117929397588.png" alt="" width="30px" height="30px"></a>
                            </div>
                        </div>
                    </a>
                    <?php } ?>
                    <a href="forminput.html">
                        <div class="card border btn mb-3 mt-3 ms-2 me-2" style="width: 8rem; height: 13.9rem;">
                            <img class="m-auto" src="https://cdn2.iconfinder.com/data/icons/ios-7-icons/50/plus-512.png" alt="" width="80px" height="80px">
                        </div>
                    </a>
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