<?php
function kendaraan($merk,$warna,$tahun){
    echo "=== data kendaraan === <br>";
    echo "merk : $merk <br>";
     echo "warna: $warna <br>";
     echo "tahun :$tahun<br>";
     echo "<hr>";

}
//memanggil dengan 3 parameter
kendaraan("vario","merah","2017");
kendaraan("scoppy",  "hijau","2016");


?>