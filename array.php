<?php
//array associtative - 1 siswa
$siswa = [
    "nis"=>"12345",
    "nama"=>"ahmad wijaya",
    "kelas"=>"x rpl",
    "nilai"=>"85"
];
$data = [
   ["nis" =>"12345","nama"=>"ahmad","nilai"=>85],
   ["nis" =>"12346","nama"=>"budi","nilai"=>78],
   ["nis" =>"12347","nama"=>"citra","nilai"=>92],
]
   //array 2 dimensi -banyak siswa (sepeti tabel database)
   echo " nis:" .$data [2] ["nis"] "<br>";
   echo "nama:" .$data [0] ["nama"] "<br>";
   echo "nilai:" .$data [1] ["nilai"]; 
   
?>