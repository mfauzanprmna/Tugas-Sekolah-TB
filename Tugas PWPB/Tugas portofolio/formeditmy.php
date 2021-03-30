<?php
    session_start();
    if( !isset($_SESSION['login']) ){
        header("Location: login.php");
        exit;
    }
include 'koneksi.php';
?>
<!doctype html>
<html lang="en">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- Bootstrap CSS -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
        <link rel="stylesheet" href="style1.css">

        <title>Edit My Project</title>
    </head>
    <body>

        <!-- Form Edit My Project -->
        <div class="container contact mt-5 mb-3 pt-2 items" style="background-color: rgb(1, 177, 177);">
        <a href="admin.php"><button type="submit ms-auto" class="btn btn-primary mb-5">Back</button></a>   
            <h4 class="text-center">Edit Project</h4>
            <?php 
                $id = $_GET['id'];
                $sql = "SELECT * FROM gallery WHERE id='$id'";
                $query = mysqli_query($conn, $sql);
                $pel = mysqli_fetch_assoc($query);
                
                if (mysqli_num_rows($query) < 1 ){
                    die($id);
                }
            ?>
            <form class="ms-5 me-5" method="POST" action="edit.php">
                <div class="form-group mt-4 mb-4">
                    <input type="hidden" name="id1" class="form-control" id="exampleFormControlInput1" value="<?php echo $pel['id'] ?>">
                </div>
                <div class="form-group mt-4 mb-4">
                    <label for="exampleFormControlInput1">Gambar</label>
                    <input type="text" name="gambar1" class="form-control" id="exampleFormControlInput1" value="<?php echo $pel['gambar'] ?>">
                </div>
                <div class="form-group mt-4 mb-4">
                    <label for="exampleFormControlInput1">Description</label>
                    <input type="text" name="desc" class="form-control" id="exampleFormControlInput1" value="<?php echo $pel['descr'] ?>">
                </div>
                <button type="submit" name="save" class="btn btn-primary mb-5">Submit</button>
            </form>
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
</html>