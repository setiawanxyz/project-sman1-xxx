<!DOCTYPE html>
<html lang="en">
	<head>
		<title>CRUD test Budi Setiawan</title>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="Bootstrap\bootstrap.min.css">
		<script src="Bootstrap\jquery.min.js"></script>
		<script src="Bootstrap\bootstrap.min.js"></script>
		<script>
			function yakinhapus() {
				alert("Data Kelas akan di Hapus, Lanjutkan?");
			}
		</script>
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

		<h3 align="center">Hapus Data Kelas</h3><br>
<?php
include 'koneksi.php';
$query = mysql_query("SELECT * FROM tbkelas WHERE kode_kelas='$_GET[kode]'") or die(mysql_error());
$data = mysql_fetch_array($query);
?>
		<form action="kelas_delete_process.php" method="post">
			<div class="form-group">
				<label for="kode">Kode Kelas:</label>
				<input type="text" class="form-control" value="<?php echo $data['kode_kelas'];?>" name="txtkode" readonly>
			</div>
			<div class="form-group">
				<label for="nama">Nama Kelas:</label>
				<input type="text" class="form-control" value="<?php echo $data['nama_kelas'];?>" name="txtnama" readonly>
			</div>
			<div class="form-group">
				<label for="ruang">Ruang:</label>
				<input type="text" class="form-control" value="<?php echo $data['ruang'];?>" name="txtruang" readonly>
			</div>
			<button type="submit" class="btn btn-danger" onclick="yakinhapus()">Hapus</button>
			<button type="button" class="btn btn-info" onclick="history.back(-1)">Batal</button>
		</form>
			<hr>
	<h5 align="center">Budi Setiawan &copy; 2019</h5>	
	</div>
	</body>
</html>