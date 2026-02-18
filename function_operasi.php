<?php
// funvtion operasi matematika
function tambah ($a,$b) {
    return $a + $b;
}
function kurang($a,$b) {
 return $a - $b;
}
function kali($a,$b) {
 return $a * $b;
}
function bagi($a,$b) {
 if($b === 0) {
    return "error: tidak bisa bagi 0!";
 }
 return $a / $b;
}
$angka1 =20;
$angka2 =5;
?>
<h2>kakulator sederhana</h2>
<table border="1" cellpadding="10">
    <tr bgcolor="#0066cc" style="color:white">
        <th>operasi</th>
        <th>hasil</th>
    </tr>
    <tr>
        <td><?php echo "$angka1 + $angka2";?></td>
        <td><b><?php echo tambah($angka1,$angka2);?></b></td>
    </tr>
    <tr>
        <td><?php echo "$angka1 - $angka2";?></td>
        <td><b><?php echo kurang($angka1,$angka2);?></b></td>
        </tr>
        <tr>
        <td><?php echo "$angka1 x $angka2";?></td>
        <td><b><?php echo kali($angka1,$angka2);?></b></td>
        </tr>
        <tr>
        <td><?php echo "$angka1 * $angka2"; ?> </td>
        <td><b><?php echo bagi($angka1,$angka2);?></b></td>
    
    </tr>
</table>