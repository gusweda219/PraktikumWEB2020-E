<?php
session_start();
include 'conn.php';

if (isset($_POST['submit']))
{
	$username = addslashes(trim($_POST['username']));
	$password	= md5($_POST['password']);

	$query= mysqli_query($conn, "SELECT * FROM users WHERE username='$username' AND password='$password' ");
	if (mysqli_num_rows($query) == 0)
	{
		echo "<script>alert('Username atau Password yang Anda masukan salah !!!');document.location.href='index.php'</script>/n";
	}else{
		$row = mysqli_fetch_assoc($query);
		$_SESSION['username']	= $row['username'];
		$_SESSION['role']  = $row['role'];

		if($row['role'] == "admin")
		{
			header("Location: admin");
		}
		else if($row['role'] =="pegawai")
		{
			header("Location: pegawai");
		}
		else
		{
			echo "<script>alert('Login Gagal !!!');document.location.href='index.php'</script>/n";
		}
	}
}else{
	echo "<script>alert('Anda belum mengisi Form !!!');document.location.href='index.php'</script>/n";
}
?>
