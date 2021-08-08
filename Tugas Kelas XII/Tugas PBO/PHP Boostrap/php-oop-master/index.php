
<?php //include('mylib/warga.lib.php');
include "template/header.php";

?>
<body>
<?php
$Db = new MyDb();
$data_warga = $Db->show();
//print_r($data_warga);


if(isset($_GET['hapus'])){
    //echo "Data dengan ID :".$_GET['hapus']."  Akan di hapus";
    $idwarga=$_GET['hapus'];
    $queryhapus = $Db->delete($idwarga);
    if($queryhapus==TRUE){
        echo "<script> alert('Data Berhasil Dihapus');
            document.location.href = 'index.php'</script>";
    }else{
        echo "<script> alert('Data Tidak Berhasil Dihapus');
            document.location.href = 'index.php'</script>";
    }
}
?>
<div class="container">
    <div class="col-12">
    <div class="py-3">
    <h2>Data Warga</h2>
        <a href="form-daftar.php" class='btn btn-success'>Tambah Data Warga</a>
    </div>
    <?php 
    if(isset($_POST['daftar'])){
       ?>
        <div class="alert alert-success"><?php echo $pesansimpan; ?></div>
        <?php 
    }

    ?>

<?php 
    if(isset($_GET['hapus'])){
       ?>
        <div class="alert alert-danger"><?php echo $pesanhapus; ?></div>
        <?php 
    }
    
    ?>
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Tabel Data Warga</h6>
        </div>
    <div class="card-body">
    <div class="row"><div class="col-sm-12">
        <table class="table table-bordered dataTable" id="dataTable" width="100%" cellspacing="0" role="grid" aria-describedby="dataTable_info" style="width: 100%;">
            <thead>
                <tr>
                    <td>No</td>
                    <td>No KTP</td>
                    <td>Nama Lengkap</td>
                    <td>Alamat</td>
                    <td>No HP</td>
                    <td>Action</td>
                </tr>
            </thead>
            <tbody>
                <?php
                $i=0;
                foreach($data_warga as $data){ 
                    $i++;
                    ?>
                    <tr>
                        <td><?php echo $i; ?></td>
                        <td><?php echo $data['no_ktp']; ?></td>
                        <td><?php echo $data['nama_lengkap']; ?></td>
                        <td><?php echo $data['alamat_lengkap']; ?></td>
                        <td><?php echo $data['no_hp']; ?></td>
                        <td><a class="btn btn-info btn-circle btn-sm" href="detail-warga.php?id=<?php echo $data['id']; ?>"><i class="fas fa-info-circle"></i></a> <a class="btn btn-danger btn-circle btn-sm" href="index.php?hapus=<?php echo $data['id']; ?>"><i class="fas fa-trash"></i></a></td>
                    </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>
</div>
</div>
</div>
<?php 
    include "template/footer.php";
?>