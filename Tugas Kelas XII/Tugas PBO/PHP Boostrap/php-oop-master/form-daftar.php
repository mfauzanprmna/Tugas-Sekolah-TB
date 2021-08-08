  <?php 
  include "template/header.php";

  $Db = new MyDb();
if(isset($_POST['daftar'])){
    //echo "Tombol Daftar Telah Di klik";
    $noktp=$_POST['no_ktp'];
    $nama = $_POST['nama_lengkap'];
    $alamat = $_POST['alamat_lengkap'];
    $nohp = $_POST['no_hp'];
    $querysimpan = $Db->add_data($noktp,$nama,$alamat,$nohp);
    //print_r($_POST);
    if($querysimpan==TRUE){
        echo "<script>alert('Data Berhasil Disimpan');
        document.location.href = 'index.php'</script>";
    }else{
        echo "<script> alert('Data Tidak Berhasil Disimpan');
        document.location.href = 'index.php'</scalert>";
    }
}
  ?>
    <div class="container">
   
    <div class="row">
        <div class="col-md-8">
        <h2>Form Registrasi Warga</h2>
        <hr>
        <form action="" method="post">
        <table class="table">
            <tr>
                <th colspan="2">Biodata Pribadi</th>
                
            </tr>
            <tr>
                <td>Nomor KTP</td>
                <td> <input class="form-control bg-light border-1 small" type="text" name="no_ktp" id="no_ktp" placeholder="No KTP"></td>
            </tr>
            <tr>
                <td>Nama Lengkap</td>
                <td><input class="form-control bg-light border-1 small" type="text" name="nama_lengkap" id="nama_lengkap" placeholder="Nama Lengkap"></td>
            </tr>
            <tr>
                <td>Alamat Lengkap</td>
                <td> <input class="form-control bg-light border-1 small" type="text" name="alamat_lengkap" id="alamat_lengkap" placeholder="Alamat"></td>
            </tr>
            <tr>
                <td>Nomor HP</td>
                <td><input class="form-control bg-light border-1 small" type="text" name="no_hp" id="no_hp" placeholder="No HandPhone"></td>
            </tr>
            <tr>
                <td colspan="2">
                <a href="index.php"><button class="btn btn-primary" name="kembali" type="button">Kembali </button></a> 
                    <button class="btn btn-success" name="daftar" type="submit">Daftar </button>
                </td>
                
            </tr>
        </table>
      
       
        </form>

        </div>
    </div>
    </div>
<?php 
    include "template/footer.php";
?>