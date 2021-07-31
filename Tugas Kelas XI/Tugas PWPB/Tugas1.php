<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php 
    echo "<h3>No. 1</h3>";
    echo "<p>LOOPING PERTAMA</p>";
    echo "<script>console.log('LOOPING PERTAMA')</script>";
    $i = 0;
    while( $i <= 20 ){
        echo "$i - I love coding <br>";
        echo "<script>console.log('$i - I love coding')</script>";
        $i+=2;
    }

    echo "<p>LOOPING KEDUA</p>";
    echo "<script>console.log('LOOPING KEDUA')</script>";
    $a = 20;
    while( $a >= 0 ){
        echo "$a - I will become a mobile developer <br>";
        echo "<script>console.log('$a - I will become a mobile developer')</script>";
        $a-=2;
    }
        // PHP
        // echo "<h3>No. 2<h3/>";
        // for($np=1;$np<=20;$np++){
        //     if($np % 2 == 0){
        //         echo "$np - Taruna Bhakti<br>";
        //     }
        //     else if ($np % 3 == 0){
        //         echo "$np - I Love Coding<br>";
        //     }
        //     else{
        //         echo "$np - RPL<br>";
        //     }
        // }
    ?>
    <!-- JAVASCRIPT -->
    <h3>No. 2</h3>
    <div id="perulangan">
        
    </div>
    <script>
        var perulangan = document.getElementById('perulangan')

        function loop() {
            for (let i = 1; i <= 20; i++) {
                if (i % 2 == 0) {
                    perulangan.innerHTML += i + " - Taruna Bhakti <br>";
                } else if (i % 3 == 0) {
                    perulangan.innerHTML += i + " - I Love Coding <br>";
                } else if (i % 2 == 1) {
                    perulangan.innerHTML += i + " - RPL <br>";
                }
            }
        }
        loop()
    </script>
    <?php 

        echo "<h3>No. 3</h3>";
        
        $products = [
            ['name' => 'shiny star', 'price' => 20, 'stock' => 10],
            ['name' => 'green shell', 'price' => 10, 'stock' => 20],
            ['name' => 'red shell', 'price' => 15, 'stock' => 15],
            ['name' => 'gold coin', 'price' => 5, 'stock' => 12],
            ['name' => 'lightning bolt', 'price' => 40, 'stock' => 8],
            ['name' => 'banana skin', 'price' => 2, 'stock' => 5]
        ];

        foreach( $products as $prod ){
            echo $prod['name']." - ";
            echo $prod['price']." - ";
            echo $prod['stock']."<br>";
        }
    ?>
</body>
</html>