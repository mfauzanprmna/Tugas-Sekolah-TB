<!doctype html>
<html lang="en">
    <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">

    <title>Hello, world!</title>
    </head>
    <body>
        <div class="container mt-3 mb-3">
            <b><p>1. Segitiga Sama Sisi</p></b>
            <?php 
                $tinggi = 10;
                $alas = 6;
                $hasil5 = $alas * 3;
                $hasil = $tinggi * $alas / 2;
                echo "<p>Tinggi = $tinggi <br></p>";
                echo "<p>Alas = $alas <br></p>";
                echo "<p>Maka Hasil Keliling Segitiga = $alas * 3 = $hasil5</p>"; 
                echo "<p>Maka Hasil Luas Segitiga = $tinggi * $alas / 2 = $hasil</p>"; 
            ?>
            <b><p>2. Persegi</p></b>
            <?php 
                $sisi = 20;
                $hasil6 = $sisi * 4;
                $hasil1 = $sisi * $sisi;
                echo "<p>Sisi = $sisi <br></p>";
                echo "<p>Maka Hasil Keliling Persegi = $sisi * 4 = $hasil6</p>"; 
                echo "<p>Maka Hasil Luas Persegi = $sisi * $sisi = $hasil1</p>"; 
            ?>
            <b><p>3. Persegi Panjang</p></b>
            <?php 
                $lebar = 10;
                $panjang = 30;
                $hasil7 = $panjang * 2 + $lebar * 2;
                $hasil2 = $lebar * $panjang;
                echo "<p>Panjang = $panjang <br></p>";
                echo "<p>Lebar = $lebar <br></p>";
                echo "<p>Maka Hasil Keliling Persegi Panjang = 2($panjang + $lebar) = $hasil7</p>";
                echo "<p>Maka Hasil Luas Persegi Panjang = $panjang * $lebar = $hasil2</p>"; 
            ?>
            <b><p>4. Segitiga Siku Siku</p></b>
            <?php 
                $tinggi1 = 7;
                $alas1 = 24;
                $miring = (($alas1 * $alas1) + ($tinggi1 * $tinggi1));
                $miring2 = sqrt($miring);
                $hasil8 = $alas1 + $tinggi1 + $miring2 * 2;
                $hasil3 = $alas1 * $tinggi1 / 2;
                echo "<p>Alas = $alas1 <br></p>";
                echo "<p>Tinggi = $tinggi1 <br></p>";
                echo "<p>Sisi Miring = $alas1 ^ 2 + $tinggi1 ^ 2 = $miring = $miring2 <br></p>";
                echo "<p>Maka Hasil Keliling Jajar Genjang = $alas1 + $tinggi1 + $miring2 * 2 = $hasil8</p>";
                echo "<p>Maka Hasil Luas Jajar Genjang = $alas1 * $tinggi1 / 2 = $hasil3</p>"; 
            ?>
            <b><p>5. Lingkaran</p></b>
            <?php 
                $r = 7;
                $pi = 22 / 7;
                $hasil9 = 2 * $r * $pi;
                $hasil4 = $pi * $r * $r;
                echo "<p>Jari jari = $r <br></p>";
                echo "<p>pi = 22 / 7 <br></p>";
                echo "<p>Maka Hasil Keliling Lingkaran = 2 * 22 / 7 * $r = $hasil9</p>";
                echo "<p>Maka Hasil Luas Lingkaran = 22 / 7 * $r * $r = $hasil4</p>"; 
            ?>
        </div>


    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.6.0/dist/umd/popper.min.js" integrity="sha384-KsvD1yqQ1/1+IA7gi3P0tyJcT3vR+NdBTt13hSJ2lnve8agRGXTTyNaBYmCR/Nwi" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.min.js" integrity="sha384-nsg8ua9HAw1y0W1btsyWgBklPnCUAFLuTMS2G72MMONqmOymq585AcH49TLBQObG" crossorigin="anonymous"></script>
    -->
    </body>
</html>