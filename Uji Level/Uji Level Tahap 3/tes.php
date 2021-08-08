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

    <!-- style css -->
    <link rel="stylesheet" href="style.css">

    <!-- font roboto -->
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Mono:wght@700&display=swap" rel="stylesheet">

    <!-- font awesome -->
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"
        integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />

    <title>UJI LEVEL MARKET</title>
</head>

<body>
    <!-- nav -->

    <nav class="navbar navbar-dark">
        <div class="container-fluid">
            <a class="navbar-brand ms-3" href="#">Starbhak Mart</a>
            <div class="nav-right">
                <a class="navbar-brand ms-3 " href="index.php">HOME</a>
                <a class="navbar-brand ms-3 " href="input.php">ADMIN</a>
                <a class="navbar-brand ms-3 " href="input.php">KERANJANG</a>
            </div>
        </div>
    </nav>

    <!-- tutup nav -->

    <!-- isi -->
    <div class="row">
        <div class="col-md-3">
            <div class="judul text-center mt-2 ms-2">
                <p class="pt-2 text-white "><marquee>Take Away | Shop Colection | Sale 50%</marquee></p>
            </div>
            <div class="judul-2 mt-2 ms-2 text-center">
                <p class="pt-2 text-white"><i class="fas fa-user "></i> Mang.Jay</p>
            </div>
            <div class="card ms-2 mt-2">
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
                        $sql = mysqli_query($connect, "SELECT * FROM produk WHERE id='$id'");
                        $pecah = $sql->fetch_assoc();
                        $supharga = $pecah['harga_barang'] * $jumlah;
                        ?>
                    <div class="text-card bg-light p-2 mb-3">
                        <p><?php echo $pecah['nama_barang'] ?><span class="float-end fw-bold number-card" id="hrg">Rp. <?php echo number_format($supharga) ?></span></p>

                        <p class="fw-light">Unit Price: <span class="fw-bold number-card mt-3">Rp. <?php echo number_format($pecah['harga_barang']) ?></span>
                            Quantity: <span class="float-end fw-bold"><?php echo $jumlah ?></span></p>
                        <button type="button" class="btn fs-4"><a href="hapus_list.php?id_barang=<?php echo $id ?>"><i class="fas fa-trash"></i></a></button>
                    </div>

                    <?php 
                    $total += $supharga -$discount ;
                   $discount += $supharga ;
                   $pajak += $supharga ;
                   $semua += $supharga;
                   $totalharga = $semua - $discount +$pajak ; 
                   ?>
             
                   

                   <?php endforeach ?>
                  
                //   yang paling atas yang paling tinggi
                //   okok
                // kalo salah bilang riq gua close ya TMV OKE NUR TQTQ
                //   ini misal harga di atas 150 rb discont  60% 
                //    if ($totalharga >= 150000 ) {
                //     $disc = '60%';
                //     $tax = 20000;
                //          // 60%
                //     $dis  += 60 * $totalharga / 100 ;
                //     $total = $dis + $tax;
                    
                //     //   ini misal harga di atas 100 rb discont 50% 
                // } elseif ($totalharga >= 100000 ) {
                //         $disc = '50%';
                //         $tax = 20000;
                //         $dis  += 50 * $totalharga / 100 ;
                //         $total = $disc + $tax;
    
                // //   ini misal harga di bawah 100 rb discont 20% 
                // }else{
                //     $disc = '20%';
                //     $tax = 10000;
                //     $dis  += 20 * $totalharga / 100 ;
                //     $total = $disc + $tax;


                //     // $pajak += $supharga * 0.1;
                //     // $totalharga += $supharga -$discount +$pajak ; 
                //     // $harga = $totalharga ;
                        
                // }
            
                </div>
            </div>
            <table width="100%" class="ms-2">
                <tbody>
                <tr>
                        <td>Seluruh Harga</td>
                        <td>Rp. <?php echo number_format($totalharga)?><span id="discount"></span></td>
                    </tr>
                    <tr>
                        <td>Discont (<?= $disc ?>) </td>
                        <td>Rp. <?php echo number_format($dis)?><span id="discount"></span></td>
                    </tr>
                    <tr>        
                        <td>PPN</td>
                        <td>Rp. <?php echo ($tax)?><span id="pajak"></span></td>
                    </tr>
                    <tr class="background text-white">
                        <td>Total Bayar</td>
                        <td>Rp. <?php echo number_format($total)?><span id="totalbayar"></span></td>
                    </tr>
                </tbody>
            </table>
            <div id="button">
                <a  href="checkout.php"  class="btn  ms-2 mt-3 button-simpan text-white">Payment</a>
            </div>

        </div>
        <div class="col-md-9">
            <div class="judullist bg-light  font  mt-2 pt-2"><span class="ps-2">Item List</span> <span
                class="float-end  pe-3"> <i class="fas fa-search "></i> <i class="fas fa-ellipsis-v"></i></span>
            </div>
            <div class="list-items mt-2 ">
                <?php
                    $id = mysqli_query($connect,'SELECT * FROM produk ORDER BY produk.id_barang');
                    while ($prdk = mysqli_fetch_array($id)){
                        $idp = $prdk['id_barang'];
                ?>
                <div class="list-card mt-3 ms-3 float-start" >
                    <img src="<?php echo $prdk['gambar_barang'] ?>" alt="" class="mt-2 ">
                    <p class="text-1 text-center fw-bold"><?php echo $prdk['nama_barang'] ?></p>
                    <p class="text-2 text-center ">Rp. <?php echo number_format($prdk['harga_barang']) ?></p>
                    <a href="beli.php?id=<?php echo $prdk['id']; ?>"><button class="btn  text-white mb-0 ">Beli</button></a>
                </div>
                <?php
                    }
                ?>
                <!-- <div class="list-card mt-3 ms-3 float-start">
                    <img src="foto/photo 1.webp" alt="" class="mt-2 ms-3 mb-1">
                    <p class="text-1 text-center fw-bold">SPECH METASALA</p>
                    <p class="text-2 text-center ">Rp. 359.000</p>
                </div> -->
            </div>
        </div>
    </div>









    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous">
    </script>


</body>

</html>