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
				alert("Data Wali Kelas akan di Hapus, Lanjutkan?");
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
			<li><a href="kelas.php">Data Kelas</a></li>
			<li class="active"><a href="walikelas.php">Data Wali Kelas</a></li>
		</ul>
	</div>
</nav>

	<div class="container">
	<h2 align="center">Sekolah Menengah Atas Negeri 1 XXX</h2><hr>

		<h3 align="center">Hapus Data Wali Kelas</h3><br>
<?php
include 'koneksi.php';
$query = mysql_query("SELECT * FROM tbwalikelas WHERE kode_walikelas='$_GET[kode]'") or die(mysql_error());
$data = mysql_fetch_array($query);
?>
		<form action="walikelas_delete_process.php" method="post">
			<div class="form-group">
				<label for="kode">Kode Wali Kelas:</label>
				<input type="text" class="form-control" value="<?php echo $data['kode_walikelas'];?>" name="txtkode" readonly>
			</div>
			<div class="form-group">
				<label for="guru">Nama Guru:</label>
				<input type="text" class="form-control" value="<?php echo $data['nama_guru'];?>" name="txtguru" readonly>
			</div>
			<div class="form-group">
				<label for="kelas">Nama Kelas:</label>
				<input type="text" class="form-control" value="<?php echo $data['nama_kelas'];?>" name="txtkelas" readonly>
			</div>
			<div class="form-group">
				<label for="tahun">Tahun Ajaran:</label>
				<input type="text" class="form-control" value="<?php echo $data['tahun_ajaran'];?>" name="txttahun" readonly>
			</div>
			<button type="submit" class="btn btn-danger" onclick="yakinhapus()">Hapus</button>
			<button type="button" class="btn btn-info" onclick="history.back(-1)">Batal</button>
		</form>
			<hr>
	<h5 align="center">Budi Setiawan &copy; 2019</h5>	
	</div>
	</body>
</html>