<?php
$nilai = 85;

echo "<h3> Sistem Penilaian </h3>";
echo "<hr>";
echo "Nama: Ahmad Santoso <br>";
echo "Nilai: " . $nilai . "<br><br>";

echo "<b> Hasil:</b><br>";

if($nilai >= 90) {
    $grade="A";
    $predikat="SANGAT BAIK";
    $warna= "blue";
}elseif($nilai >= 80) {
    $grade="B";
    $predikat="baik";
    $warna= "green";
}elseif($nilai >= 70) {
    $grade="C";
    $predikat="cukup";
    $warna= "orange";
}elseif($nilai >= 60) {
    $grade="D";
    $predikat="kurang";
    $warna= "red";
}else{
    $grade="e";
    $predikat=" sangat kurang";
    $warna= "darkred";
}

echo  "<div style='background:#f0f0f0; padding:10px; border-radius:5px;'>";
echo  "<span style ='font-size:24px;color:" . $warna ."; font-weight:bold;'>";
echo "grade: " .$grade;
echo "</span><br>";
echo "predikat: " .$predikat;
echo  "</div>";
?>