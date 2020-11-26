<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="http://localhost/PPBW2020-Pertemuan7-E/css/style.css">
</head>
<body>
    <div class="card">    
        <h3>Input Nilai Mahasiswa</h3>
        <form action="http://localhost/PPBW2020-Pertemuan7-E/nilai_akhir.php" method="post">
            <div class="input">
                <input type="text" name="nama" placeholder="Nama" required="required">
            </div>
            <div class="input">
                <input type="text" name="nim" placeholder="NIM" required="required">
            </div>
            <div class="input">
                <input type="number" name="tugas" placeholder="Nilai Tugas" required="required" max="100" min="0">
            </div>
            <div class="input">
                <input type="number" name="uts" placeholder="Nilai UTS" required="required" max="100" min="0">
            </div>
            <div class="input">
                <input type="number" name="uas" placeholder="Nilai UAS" required="required" max="100" min="0">
            </div>
            <input type="submit" value="Submit" class="submit">
        </form>
    </div>
</body>
</html>