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
			<li><a href="kelas.php">Data Kelas</a></li>
			<li class="active"><a href="walikelas.php">Data Wali Kelas</a></li>
		</ul>
	</div>
</nav>

	<div class="container">
	<h2 align="center">Sekolah Menengah Atas Negeri 1 XXX</h2><hr>

		<h3 align="center">Tambah Data Wali Kelas</h3><br>
<?php include 'koneksi.php'; ?>

		<form action="walikelas_add_process.php" method="post">
			<div class="form-group">
				<label for="kode">Kode Wali Kelas:</label>
				<input type="text" class="form-control" placeholder="Generate Otomatis" name="txtkode" disabled="">
			</div>
			<div class="form-group">
				<label for="guru">Nama Guru:</label>
				<select name="cbguru" class="form-control" required>
					<option value="">-- Pilih --</option>
					<?php
					$query=mysql_query("SELECT * FROM tbguru") or die(mysql_error());
					while($data=mysql_fetch_array($query)) { ?>
					<option value="<?php echo $data['nama_guru']; ?>"><?php echo $data['nama_guru']; ?></option>
					<?php
					} ?>
				</select>
			</div>
			<div class="form-group">
				<label for="kelas">Kelas:</label>
				<select name="cbkelas" class="form-control" required>
					<option value="">-- Pilih --</option>
					<?php
					$query2=mysql_query("SELECT * FROM tbkelas") or die(mysql_error());
					while($data2=mysql_fetch_array($query2)) { ?>
					<option value="<?php echo $data2['nama_kelas']; ?>"><?php echo $data2['nama_kelas']; ?></option>
					<?php
					} ?>
				</select>
			</div>
			<div class="form-group">
				<label for="tahun">Tahun Ajaran:</label>
				<input type="text" pattern=".{4,4}" class="form-control" placeholder="Masukkan Tahun Ajaran" name="txttahun" required>
			</div>
			<button type="submit" class="btn btn-primary">Simpan</button>
			<button type="button" class="btn btn-danger" onclick="history.back(-1)">Batal</button>
		</form>
			<hr>
	<h5 align="center">Budi Setiawan &copy; 2019</h5>	
	</div>
	</body>
</html>