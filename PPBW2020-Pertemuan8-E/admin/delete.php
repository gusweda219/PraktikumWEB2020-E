<?php
    session_start();
    
    if(!isset($_SESSION['role'])) {
        header("Location: ../");
    }elseif ($_SESSION['role']!="admin") {
        header("Location: ../pegawai/");
    } else {
        include_once("../conn.php");
    
        $id = $_GET['id'];
    
        $result = mysqli_query($conn, "DELETE FROM mahasiswa WHERE NIM='$id'");
    
        echo "<script>alert('Data berhasil dihapus');document.location.href='index.php'</script>/n";
    }
?>
