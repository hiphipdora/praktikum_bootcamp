<?php 

$nama = "Fay";
$nilai = 89;
$grade = "";

if ($nilai >= 85 & $nilai <= 100){
    $grade = "A";
} else if ($nilai >= 75 & $nilai < 85){
    $grade = "B";
} else if ($nilai >= 60 & $nilai < 75){
    $grade = "C";
} else if ($nilai >= 30 & $nilai < 60){
    $grade = "D";
} else if ($nilai >= 0 & $nilai < 30){
    $grade = "E";
} else {
    $grade = "Tidak Valid";
}


switch($grade){
    case 'A': 
        $predikat = "Memuaskan";
        break;

    case 'B':
        $predikat = "Bagus";
        break;

    case 'C':
        $predikat = "Cukup";
        break;

    case 'D':
        $predikat = "Kurang";
        break;

    case 'E':
        $predikat = "Buruk";
        break;

    default:
        $predikat = "Tidak Valid";
        break;

} 

echo "Nama: $nama";
echo "<br/>";
echo "Nilai: $nilai";
echo "<br/>";
echo "Grade: $grade";
echo "<br/>";
echo "Predikat: $predikat";

?>