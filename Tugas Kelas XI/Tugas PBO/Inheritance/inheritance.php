<?php 
    class bio {
        public $nama = "Muhammad Fauzan Permana";
        protected $kelas = "XI RPL 3";
        protected $sekolah = "SMK Taruna Bhakti";
    }

    class data extends bio {
        public function name()
        {
            return $this->nama;
        }
    }

    class isi extends bio {
        public function class()
        {
            return $this->kelas;
        }
    }

    class biodata extends bio {
        public function school()
        {
            return $this->sekolah;
        }
    }

    $objek_baru = new data();
    $objek_baru2 = new isi();
    $objek_baru3 = new biodata();

    echo $objek_baru->name();
    echo "<br>";
    echo $objek_baru2->class();
    echo "<br>";
    echo $objek_baru3->school();
?>