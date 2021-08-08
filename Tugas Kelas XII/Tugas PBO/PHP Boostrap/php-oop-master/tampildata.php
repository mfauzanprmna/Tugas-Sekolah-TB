<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Warga </title>
</head>
<?php 
//host
$host = "localhost";
$user = "root";
$pass = "";
$db = "db_warga";
$konek= mysqli_connect($host, $user, $pass,$db);

if (!$konek) {
    echo "<h1>Koneksi PHP</h1>";
    echo "Error: Unable to connect to MySQL." . PHP_EOL;
    echo "Debugging errno: " . mysqli_connect_errno() . PHP_EOL;
    echo "Debugging error: " . mysqli_connect_error() . PHP_EOL;
    exit;
}

echo "Success: A proper connection to MySQL was made! The my_db database is great." . PHP_EOL;
echo "Host information: " . mysqli_get_host_info($konek) . PHP_EOL;


//query baca data
$baca = mysqli_query($konek, "SELECT * FROM `data_warga` ");
//print_r($baca);

//print_r($data);
$data = mysqli_fetch_array($baca)

?>
<body>
    <table border=1>
        <tr>
            <td>No</td>
            <td>No KTP</td>
            <td>Nama Lengkap</td>
            <td>Alamat</td>
            <td>No HP</td>
            <td>Action</td>
        </tr>
    <?php do{  ?>
        <tr>
            <td><?php echo $data['id']; ?></td>
            <td><?php echo $data['no_ktp']; ?></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
        </tr>
    <?php }while($data = mysqli_fetch_array($baca)); ?>
    </table>
</body>
</html>