
<?php
include('template/header.php');
$Db=new myDb();
$idwarga=$_GET['id'];
$data=$Db->get_by_id($idwarga);
//print_r($data);
//echo "blalala";
?>
    <div class="container">
   
    <div class="row">
        <div class="col-md-8">
        <h2>Form Detail Registrasi Warga</h2>
        <hr>
        <table class="table table-striped table-bordered">
            <tr>
                <td>No ID</td>
                <td><?php echo $data['id']; ?></td>
            </tr>
            <tr>
                <td>No KTP</td>
                <td><?php echo $data['no_ktp']; ?></td>
            </tr>
            <tr>
                <td>Nama Lengkap</td>
                <td><?php echo $data['nama_lengkap']; ?></td>
            </tr>
            <tr>
                <td>Alamat Lengkap</td>
                <td><?php echo $data['alamat_lengkap']; ?></td>
            </tr>
            <tr>
                <td>Nomor HP</td>
                <td><?php echo $data['no_hp']; ?></td>
            </tr>
            <tr>
                <td><a href="index.php" class="btn btn-primary">Kembali</a></td>
                <td></td>
            </tr>
        </table>

        </div>
    </div>
    </div>
<?php 
    include "template/footer.php";
?>