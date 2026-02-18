<?php
//data siswa
$data =[
    ["nis" =>"2101", "nama" =>"ahmad","kelas" =>"x rpl 1", "nilai" => 85],
    ["nis" =>"2102", "nama" =>"budi","kelas" =>"x rpl 1", "nilai" =>78],
    ["nis" =>"2103", "nama" =>"citra","kelas" =>"x rpl 2", "nilai" =>92],
    ["nis" =>"2104", "nama" =>"dina","kelas" =>"x rpl 2", "nilai" =>88],
    ];
?>
<h2>data siswa</h2>
<table border="1" cellpadding ="10">
    <tr> bgcolor= "0066cc" style="color:white">
        <th>no</th>
        <th>nis</th>
        <th>nama</th>
        <th>kelas</th>
        <th>nilai</th>
        <th>status</th>
        </tr>
        <?php
        $no =1;
        foreach($data as $siswa) {
            //tentukan status
            $status = (siswa)["nilai"]  >=75) ? "lulus" : "tidak lulus";
            $warna = ($siswa)["nilai"]

        }
        ?>

    

?>

?>

?>