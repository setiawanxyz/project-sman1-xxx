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
			<li class="active"><a href="guru.php">Data Guru</a></li>
			<li><a href="kelas.php">Data Kelas</a></li>
			<li><a href="walikelas.php">Data Wali Kelas</a></li>
		</ul>
	</div>
</nav>

	<div class="container">
	<h2 align="center">Sekolah Menengah Atas Negeri 1 XXX</h2><hr>

		<h3 align="center">Tambah Data Guru</h3><br>
		<form action="guru_add_process.php" method="post">
			<div class="form-group">
				<label for="kode">Kode Guru:</label>
				<input type="text" class="form-control" placeholder="Generate Otomatis" name="txtkode" disabled="">
			</div>
			<div class="form-group">
				<label for="nama">Nama Guru:</label>
				<input type="text" class="form-control" placeholder="Masukkan Nama" name="txtnama" required>
			</div>
			<div class="form-group">
				<label for="alamat">Alamat:</label>
				<input type="text" class="form-control" placeholder="Masukkan Alamat" name="txtalamat" required>
			</div>
			<div class="form-group">
				<label for="telepon">Telepon:</label>
				<input type="text" class="form-control" placeholder="Masukkan No. Telp" name="txttelepon" required>
			</div>
			<button type="submit" class="btn btn-primary">Simpan</button>
			<button type="button" class="btn btn-danger" onclick="history.back(-1)">Batal</button>
		</form>
			<hr>
	<h5 align="center">Budi Setiawan &copy; 2019</h5>	
	</div>
	</body>
</html>