<?php 
  include 'proses.php';
?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <title>Hello, world!</title>
    <style>
      .jumbotron{
        height: 425px;
        background-image: url(https://images.pexels.com/photos/325876/pexels-photo-325876.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=500);
        background-size: cover;
        background-position-y: -100px;
        color: white;
      }

      .judullist{
        height: 50px;
      }
    </style>
  </head>
  <body>
    <div class="jumbotron jumbotron-fluid">
      <div class="container">
        <h1 class="display-4">Strep Mart</h1>
        <p class="lead">Menjualkan Jas yang murah, dan berkualitas tentunya sangat lembut saat dipakai</p>
      </div>
    </div>
    <div class="container">
      <div class="row">
        <div class="col-4">
          <div class="judullist bg-dark rounded text-center text-white pt-2">List Item</div>
          <form action="simpan.php" method="POST">
          <div class="listkeranjang" id="listkeranjang">
          
          </div>
          <table width="100%">
            <tbody>
              <tr>
                <td>Discount (5%)</td>
                <td>Rp. <span id="discount"></span></td>
              </tr>
              <tr>
                <td>PPN (10%)</td>
                <td>Rp. <span id="pajak"></span></td>
              </tr>
              <tr class="bg-dark text-white">
                <td>Total Bayar (10%)</td>
                <td>Rp. <input type="text" name="harga" id="total"></td>
              </tr>
            </tbody>
          </table>
          <input type="submit" name="submit" id="bayar" class="btn btn_primary">
          </form>
        </div>
        <div class="col-8" id="listbarang">

        </div>
      </div>
    </div>
    <div class="container">
    <table>
      <tr>
        <th>Barang</th>
        <th>Jumlah Barang</th>
        <th>Harga Barang</th>
      </tr>
      <?php 
        $sql = "SELECT * FROM sewa";
        $query = mysqli_query($connect, $sql);
        while ($pel = mysqli_fetch_array($query)){
          echo "<tr>";
          echo "<td>".$pel['nama_baju']."</td>";
          echo "<td>".$pel['jumlah_baju']."</td>";
          echo "<td>".$pel['harga_total']."</td>";
          echo "</tr>";
        }
      ?>
    </table>
    </div>


    <script>
      var namabarang = ['Jas Hitam', 'Jas Putih']
      var hargabarang = [100000, 200000]
      var gambarbarang = [
        'https://tse2.mm.bing.net/th?id=OIP.xymLJf3bSaO8Cuvtjala0wHaK0&pid=Api&P=0&w=300&h=300', 
        'https://tse1.mm.bing.net/th?id=OIP.ty2eB1MS4bHSwk76GkJhowHaK3&pid=Api&P=0&w=300&h=300'
      ]

      var listbarang = document.getElementById('listbarang')
      var listkeranjang = document.getElementById('listkeranjang')

      var namabarang_keranjang = []
      var hargabarang_keranjang = []

      function show() {
        listbarang.innerHTML = ''
        for (let i = 0; i < namabarang.length; i++) {
          listbarang.innerHTML += '<div class="card float-left mr-3 mb-3" style="width: 10rem;">'+
            '<img src="'+gambarbarang[i]+'" class="card-img-top" alt="...">'+
            '<div class="card-body">'+
              '<h5 class="card-title">'+namabarang[i]+'</h5>'+
              '<p class="card-text">Rp. '+hargabarang[i]+'</p>'+
              '<a href="#" class="btn btn-primary" onclick="add('+i+')">Beli</a>'+
            '</div>'+
            '</div>'
          
        }
      }
      show()

      function add(id) {
        namabarang_keranjang.push(namabarang[id])
        hargabarang_keranjang.push(hargabarang[id])
        showlist()
      }

      var tampildiscount = document.getElementById('discount')
      var tampilpajak = document.getElementById('pajak')
      var tampiltotal = document.getElementById('total')
      function showlist() {
        listkeranjang.innerHTML = ''

        var discount = 0
        var pajak = 0
        var hargatotal = 0
        var total = 0
        for (let i = 0; i < namabarang_keranjang.length; i++) {
          listkeranjang.innerHTML += '<div class="card mt-3 mb-3" style="width: 19.5rem;">'+  
            '<div class="card-body" >'+
              '<h5 class="card-title">'+'<input type="text" name="nama" value="'+ namabarang_keranjang[i] + '">'+'</h5>'+
              '<p class="card-text">Rp. '+'<input type="text" name="harg" value="'+ hargabarang_keranjang[i] + '">'+'</p>'+
              '<p>'+'<input type="text" name="qty" value="Qty : 1">'+'</p>'+
              '<a href="#" class="btn btn-danger float-right" onclick="deleteitem('+i+')">Hapus</a>'+
            '</div>'+
          '</div>'
          
          hargatotal = hargabarang_keranjang[i] + hargatotal
          
          total = hargatotal
          if (total > 1000000) {
            discount = total * 0.05
          }else{
            discount = 0
          }
          pajak = total * 0.1
          total = hargatotal - discount - pajak
          tampildiscount.innerHTML = discount
          tampiltotal.innerHTML = total
          tampilpajak.innerHTML = pajak
        }
      }

      function deleteitem(id) {
        namabarang_keranjang.splice(id,1)
        hargabarang_keranjang.splice(id,1)

        showlist()
      }
    </script>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
  </body>
</html>