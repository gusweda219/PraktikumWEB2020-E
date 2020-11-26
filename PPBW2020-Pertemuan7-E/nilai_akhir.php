<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="http://localhost/PPBW2020-Pertemuan7-E/css/nilai-akhir.css">
</head>
<body>
    <?php 
        $nama = $_POST['nama'];
        $nim = $_POST['nim'];
        $nilaiTugas = $_POST['tugas'];
        $nilaiUTS = $_POST['uts'];
        $nilaiUAS = $_POST['uas'];
        $nilaiAkhir = $nilaiTugas*0.4 + $nilaiUTS * 0.3 + $nilaiUAS * 0.3;

        if($nilaiAkhir >= 80 && $nilaiAkhir <= 100) {
            $comment = 'Anda lulus dengan predikat A';
        } elseif ($nilaiAkhir >= 70 && $nilaiAkhir < 80) {
            $comment = 'Anda lulus dengan predikat B';
        } elseif ($nilaiAkhir >= 60 && $nilaiAkhir < 70) {
            $comment = 'Anda lulus dengan predikat C';
        } else {
            $comment = 'Anda lulus dengan predikat D';
        }
    ?>
    <div class="card">
        <h3>Nilai Akhir Mahasiswa</h3>
        <div class="text">
            <p>Nama :</p>
            <p class="bold"><?=$nama?></p>
        </div>
        <div class="text">
            <p>NIM :</p>
            <p class="bold"><?=$nim?></p>
        </div>
        <div class="text">
            <p>Nilai Tugas :</p>
            <p class="bold"><?=$nilaiTugas?></p>
        </div>
        <div class="text">
            <p>Nilai UTS</p>
            <p class="bold"><?=$nilaiUTS?></p>    
        </div>
        <div class="text">
            <p>Nilai UAS</p>
            <p class="bold"><?=$nilaiUAS?></p>
        </div>
        <div class="text">
            <p>Nilai Akhir :</p>
            <p class="bold"><?=$nilaiAkhir?></p>
        </div>
        <div class="comment">
            <p><?=$comment?></p>
        </div>
    </div>
</body>
</html>