<?php 
    session_start();
    include 'koneksi.php';

    // Simpan Form My Project
    if(isset($_POST['save'])){
        $name = $_POST['name'];
        $gambar = $_POST['gambar1'];
        $desc = $_POST['desc'];
        $sql = "INSERT INTO gallery (id, nama_projek, gambar, descr) VALUES ('', '$name', '$gambar', '$desc')";
        $query = mysqli_query($conn, $sql);
        if($query){
            header("Location: admin.php#project");
        } else {
            header("Location: admin.php?status=gagal");
        }
    }

    // Simpan Form Contact
    if(isset($_POST['simpan'])){
        $nama = $_POST['nama'];
        $email = $_POST['email'];
        $tlp = $_POST['tlp'];
        $pesan = $_POST['pesan'];
        $sql = "INSERT INTO porto_contact (id, nama, email, telepon, pesan) VALUES (NULL, '$nama', '$email', '$tlp', '$pesan')";
        if(empty($nama) || empty($email) || empty($tlp) || empty($pesan)){
            header("Location: user.php?error#contact");
        } else{
            header("Location: user.php?success#contact");
            $query = mysqli_query($conn, $sql);
        }
    }

    // Simpan Register Akun
    if(isset($_POST['register'])){
        $user = strtolower(stripslashes($_POST['user']));
        $pass = mysqli_real_escape_string($conn, $_POST['pass']);
        $pass2 = mysqli_real_escape_string($conn, $_POST['pass2']);
        $result = mysqli_query($conn, "SELECT username FROM user WHERE username = '$user'");
        if ( empty($user) && empty($pass) ){
            header("Location: register.php?emptyuser&emptypass");
            return false;
        }
        if ( empty($user) ){
            header("Location: register.php?emptyuser");
            return false;
        }
        if ( empty($pass) ){
            header("Location: register.php?emptypass");
            return false;
        }
        if( $pass !== $pass2 && mysqli_fetch_assoc($result)){
            header("Location: register.php?passwrong&userwrong");
            return false;
        }
        if( $pass !== $pass2 ){
            header("Location: register.php?wrong");
            return false;
        }
        if( mysqli_fetch_assoc($result)){
            header("Location: register.php?user");
            return false;
        }
        $pass = password_hash($pass, PASSWORD_DEFAULT);
        $query = mysqli_query($conn, "INSERT INTO user (id, username, password) VALUES ('', '$user', '$pass')");
        if( $query ){
            header("Location: index.php");
        } else {
            header("Location: register.php?status=gagal");
        }
        return mysqli_affected_rows($conn);
    }
?>