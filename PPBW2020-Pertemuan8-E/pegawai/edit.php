<?php
    session_start();
    if(!isset($_SESSION['role'])) {
        header("Location: ../");
    }

    elseif ($_SESSION['role']!="pegawai") {
        header("Location: ../admin/");
    } else {
        $id = $_GET['id'];

        include_once("../conn.php");
        $query = mysqli_query($conn, "SELECT * FROM mahasiswa WHERE NIM='$id'");
        $row = mysqli_fetch_assoc($query);
        $nim = $row['nim'];
        $nama = $row['nama'];
        $alamat = $row['alamat'];

        if(isset($_POST['submit']))
        {
            $id = $_POST['id'];
            $nama=$_POST['nama'];
            $alamat=$_POST['alamat'];

            $result = mysqli_query($conn, "UPDATE mahasiswa SET Nama='$nama',Alamat='$alamat' WHERE NIM='$id'");
            if ($result) {
                echo "<script>alert('Data berhasil diedit');document.location.href='index.php'</script>/n";
            } else {
                echo "<script>alert('Data gagal diedit !!!');</script>/n";
            }
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>edit mahasiswa</title>
    <link rel="stylesheet" href="css/style2.css">
</head>
<body>
    <a href="index.php">&larr; kembali</a>
    <div class="card">    
        <h3>Edit Mahasiswa</h3>
        <form action="edit.php?id=<?=$nim?>" method="post">
            <div class="input">
                <input type="text" name="nim" value="<?=$nim;?>" placeholder="NIM" disabled>
            </div>
           <div class="input">
                <input type="text" name="nama" value="<?=$nama;?>" placeholder="nama" required="required">
            </div>
           <div class="input">
                <input type="text" name="alamat" value="<?=$alamat;?>" placeholder="alamat" required="required">
            </div>
            <td><input type="hidden" name="id" value=<?=$_GET['id'];?>></td>
            <input type="submit" name="submit" value="Edit" class="submit">
        </form>
    </div>
</body>
</html>
