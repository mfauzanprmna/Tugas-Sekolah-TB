<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
include('mylib/warga.lib.php');
$warga1= new Warga();
$warga1->personAwal();
echo "<hr>";
$warga1->setPerson();
$warga1->person();
echo "<hr>";
$warga1->person3('Kholid','depok');
?>
    
</body>
</html>