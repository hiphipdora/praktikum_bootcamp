<!DOCTYPE html>
<html lang="en">
<body>
    <?php 
        $nama = "Budi Santoso";
        $totalBelanja = 150000;
        $keterangan = '';

        //if-else
        if($totalBelanja > 100000) {
            $keterangan = "Selamat $nama, anda mendapatkan hadiah!";
        } else {
            $keterangan = "Terima kasih sudah berbelanja, $nama";
        }
    ?>

    <?php 
    echo "<h1>$keterangan</h1>"
    ?>

    <h2>Nama: <?= $nama ?></h2>
    <h3>Total Belanja: Rp<?= number_format($totalBelanja,2,',','.') ?></h3>
    <h3>Keterangan: <?=$keterangan?></h3>

</body>
</html>