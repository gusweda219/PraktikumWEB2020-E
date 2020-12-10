<?php
    session_start();
    if(!isset($_SESSION['role'])) {
        header("Location: ../");
    }

    elseif ($_SESSION['role']!="admin") {
        header("Location: ../pegawai/");
    } else {
        if(isset($_POST['submit'])) {
            $nim = $_POST['nim'];
            $nama = $_POST['nama'];
            $alamat = $_POST['alamat'];

            include("../conn.php");

            $result = mysqli_query($conn, "INSERT INTO mahasiswa(NIM,Nama,Alamat) VALUES('$nim','$nama','$alamat')");
            if ($result) {
                echo "<script>alert('Data berhasil ditambahkan');document.location.href='index.php'</script>/n";
            } else {
                echo "<script>alert('Data gagal ditambahkan !!!');document.location.href='tambah.php'</script>/n";
            }

        }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>tambah mahasiswa</title>
    <link rel="stylesheet" href="css/style2.css">
</head>
<body>
    <a href="index.php">&larr; kembali</a>
    <div class="card">    
        <h3>Tambah Mahasiswa</h3>
        <form action="tambah.php" method="post">
            <div class="input">
                <input type="text" name="nim" placeholder="NIM" required="required">
            </div>
           <div class="input">
                <input type="text" name="nama" placeholder="nama" required="required">
            </div>
           <div class="input">
                <input type="text" name="alamat" placeholder="alamat" required="required">
            </div>
            <input type="submit" name="submit" value="Tambah" class="submit">
        </form>
    </div>
</body>
</html>