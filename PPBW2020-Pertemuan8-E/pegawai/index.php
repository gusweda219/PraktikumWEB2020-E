<?php
session_start();
if(!isset($_SESSION['role'])) {
    header("Location: ../");
} elseif ($_SESSION['role']!="pegawai") {
    header("Location: ../admin/");
} else {
    include '../conn.php';
    $query= mysqli_query($conn, "SELECT * FROM mahasiswa");
    $data = mysqli_fetch_all($query, MYSQLI_ASSOC);
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>pegawai</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <h3>Selamat datang <?= $_SESSION['username']; ?></h3>
    <a class="tambah-data" href="tambah.php">Tambah Data</a>
    <table cellspacing='0'>
		<thead>
			<tr>
				<th>NIM</th>
				<th>Nama</th>
				<th>Alamat</th>
				<th>Opsi</th>
			</tr>
		</thead>
		<tbody>
            <?php
            if (!empty($data)) {
                foreach ($data as $mhs) {
            ?>
                    <tr>
                        <td><?=$mhs['nim'];?></td>
                        <td><?=$mhs['nama'];?></td>
                        <td><?=$mhs['alamat'];?></td>
                        <td class="edit"><a href="edit.php?id=<?=$mhs['nim'];?>">edit</a></td>
                    </tr>
            <?php
                }
            } else {
            ?>
                <tr>
                    <td colspan="4" style="text-align:center;">Tidak ada data</td>
                </tr>
            <?php
            }
            ?>
		</tbody>
	</table>
    <a class="logout" href="logout.php">Logout</a>
</body>
</html>
