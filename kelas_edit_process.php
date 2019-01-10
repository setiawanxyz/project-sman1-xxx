<!DOCTYPE html>
<html lang="en">
	<head>
		<title>CRUD test Budi Setiawan</title>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="Bootstrap\bootstrap.min.css">
		<script src="Bootstrap\jquery.min.js"></script>
		<script src="Bootstrap\bootstrap.min.js"></script>
	</head>
	<body>

<nav class="navbar navbar-inverse">
	<div class="container-fluid">
		<div class="navbar-header">
			<a class="navbar-brand" href="index.php">Beranda</a>
		</div>
		<ul class="nav navbar-nav">
			<li><a href="guru.php">Data Guru</a></li>
			<li class="active"><a href="kelas.php">Data Kelas</a></li>
			<li><a href="walikelas.php">Data Wali Kelas</a></li>
		</ul>
	</div>
</nav>

	<div class="container">
	<h2 align="center">Sekolah Menengah Atas Negeri 1 XXX</h2><hr>
<?php
include 'koneksi.php';
$kode = $_POST['txtkode'];
$nama = $_POST['txtnama'];
$ruang = $_POST['txtruang'];
//simpan data ke database
$query = mysql_query("UPDATE tbkelas SET nama_kelas='$nama', ruang='$ruang' WHERE kode_kelas='$kode'") or die(mysql_error());
if ($query) { ?>
<script language="JavaScript">alert('Data Kelas Berhasil DiUpdate'); document.location='kelas.php'</script>
<?php }
else{ ?>
<script language="JavaScript">alert('Data Gagal DiUpdate'); document.location='JavaScript:history.back(-1)'</script>
<?php }
?>
	<hr><h5 align="center">Budi Setiawan &copy; 2019</h5>	
	</div>
	</body>
</html>