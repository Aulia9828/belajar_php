<?php
$nilai = 60;
echo "<h3> hasil ujian</h3>";
echo "nilai kamu: " . $nilai . "<br><br>";
 
if ($nilai>= 75) {
    echo "<div style=' color:green, font_weight:bold;'";
    echo "selamat! anda lulus! <br>";
    echo "silahkan ambil ijazah di tu.";
    echo "</div>";
} else {
    echo "<div style='color:red; font_weight:bold;'>";
    echo "x MAAF! Anda belum lulus !<br>";
    echo "silahkan mengikuti ujian perbaikan.";
    echo "</div>";
}
echo "<br><br> semoga sukses!";
?>
