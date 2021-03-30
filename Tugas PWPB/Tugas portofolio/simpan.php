<?php 
    session_start();
    include 'koneksi.php';

    // Simpan Form Contact
    if(isset($_POST['simpan'])){
        $nama = $_POST['nama'];
        $email = $_POST['email'];
        $tlp = $_POST['tlp'];
        $pesan = $_POST['pesan'];
        $sql = "INSERT INTO porto_contact (id, nama, email, telepon, pesan) VALUES (NULL, '$nama', '$email', '$tlp', '$pesan')";
        if(empty($nama) || empty($email) || empty($tlp) || empty($pesan)){
            header("Location: index.php?error");
        } else{
            header("Location: index.php?success");
            $query = mysqli_query($conn, $sql);
        }
    }

    // Simpan Form My Project
    if(isset($_POST['save'])){
        $gambar = $_POST['gambar1'];
        $desc = $_POST['desc'];
        $sql = "INSERT INTO gallery (id, gambar, descr) VALUES (NULL, '$gambar', '$desc')";
        $query = mysqli_query($conn, $sql);
        if($query){
            header("Location: admin.php");
        } else {
            header("Location: admin.php?status=gagal");
        }
    }

    if(isset($_POST['register'])){
        $user = $_POST['user'];
        $pass = $_POST['pass'];
        $pass = password_hash($pass, PASSWORD_DEFAULT);
        $sql = "INSERT INTO user (id, username, password) VALUES ('', '$user', '$pass')";
        $query = mysqli_query($conn, $sql);
        if($query){
            header("Location: login.php");
        } else {
            header("Location: regis.php?status=gagal");
        }
        return mysqli_affected_rows($conn);
    }

    if( isset($_POST['login']) ) {
        $user = $_POST['user'];
        $pass = $_POST['pass'];

        $result = mysqli_query($conn, "SELECT * FROM user WHERE username = '$user'");

        if( mysqli_num_rows($result) === 1 ){
            $row = mysqli_fetch_assoc($result);
            if ( password_verify($pass, $row['password']) ){
                $_SESSION['login'] = true;
                header("Location: admin.php");
                exit;
            } else {
                header("Location: login.php?status=gagal");
            }
        }
    }
?>