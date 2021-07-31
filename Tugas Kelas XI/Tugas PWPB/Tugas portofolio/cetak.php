<?php

require_once __DIR__ . '/vendor/autoload.php';

session_start();
include 'koneksi.php';

$mpdf = new \Mpdf\Mpdf();
$html = '
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <link rel="stylesheet" href="style1.css">
    <head>
    <body>
    <div class="pt-3 pb-3" id="contact">
    <h1 class="text-center">Pesan</h1>
    <div class="container halaman mt-3 mb-3" style="height: 600px; overflow: auto;">';
        $sql = "SELECT * FROM porto_contact";
        $query = mysqli_query($conn, $sql);
        while ($pel = mysqli_fetch_array($query)){
$html .=    '<div class="card  p-2 mb-3 items" style="width: 50rem;">
        <p><span class="fw-bold" style="margin-right: 200px;">'. $pel['nama'] .' </span><span class="fw-bold number-card" id="hrg">'. date("l, d M Y") .'</span></p>
        <p class="fs-6 m-0">'. $pel['email'] .'</p>
        <hr>
        <p class="fw-light"><span class=" number-card mt-3" style="margin-right: 120px;">'. $pel['pesan'] .'</span></p>
    </div>';
        }
$html .=    '</div>
</div>
        
<!-- Optional JavaScript; choose one of the two! -->

<!-- Option 1: Bootstrap Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>

<!-- Option 2: Separate Popper and Bootstrap JS -->
<!--
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js" integrity="sha384-SR1sx49pcuLnqZUnnPwx6FCym0wLsk5JZuNx2bPPENzswTNFaQU1RDvt3wT4gWFG" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.min.js" integrity="sha384-j0CNLUeiqtyaRmlzUHCPZ+Gy5fQu0dQ6eZ/xAww941Ai1SxSY+0EQqNXNE6DZiVc" crossorigin="anonymous"></script>
-->
</body>
</html>';
$mpdf->WriteHTML($html);
$mpdf->Output();
?>