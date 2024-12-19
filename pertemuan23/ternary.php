<?php 
$nama = "Putri";
$nilai = 75;

//ternary

$keterangan = ($nilai >= 70) ? "Lulus" : "Tidak Lulus";

?>

<?php 
echo "Nama Siswa: $nama";
echo "<br/>";
echo "Nilai: $nilai";
echo "<br/>";
echo "Keterangan: $keterangan";
?>