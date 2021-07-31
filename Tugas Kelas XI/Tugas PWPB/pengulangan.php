<?php 
    // Pengulangan
    // for
    // while
    // foreach ( dikhususkan untuk array)
    // for ($i = 0; $i < 5; $i++) {
    //     echo "Hello World! <br>";
    // }
    // $i = 0;
    // while ( $i < 5 ) {
    //     echo "Hello Wolrd! <br>";
    //     $i++;
    // }
    $angka = [1, 2, 3, 4, 5];
    
        for($i = 0; $i < count($angka); $i++) {
        ?>
    <div><?php echo $angka[$i] ?></div>
    <?php } ?>