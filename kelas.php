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

		<h3 align="center">Master Data Kelas</h3><br>
		<a href="kelas_add.php">
		<button type="button" class="btn btn-success">Tambah Data</button>
		</a><br><br>
		<table class="table" style="text-align:center;">
		<tr bgcolor="#bababa">
			<td><b><font color="#fff">#</font></b></td>
			<td><b><font color="#fff">Kode Kelas</font></b></td>
			<td><b><font color="#fff">Nama Kelas</font></b></td>
			<td><b><font color="#fff">Ruang</font></b></td>
			<td><b><font color="#fff">Aksi</font></b></td>
		</tr>
<?php
	include 'koneksi.php';
	$query = mysql_query("SELECT * FROM tbkelas");
	$no = 1;
	while ($data = mysql_fetch_array($query)) {
?>	
		<tr>
			<td><?php echo $no; ?></td>
			<td><?php echo $data['kode_kelas']; ?></td>
			<td><?php echo $data['nama_kelas']; ?></td>
			<td><?php echo $data['ruang']; ?></td>
			<td>
			<a href="kelas_edit.php?kode=<?php echo $data['kode_kelas']; ?>">
			<button type="button" class="btn btn-primary" style="width:70px;height:30px;">Edit</button>
			</a>&nbsp;&nbsp;
			<a href="kelas_delete.php?kode=<?php echo $data['kode_kelas']; ?>">
			<button type="button" class="btn btn-danger" style="width:70px;height:30px;">Delete</button>
			</a>
			</td>
		</tr>
<?php 
    $no++;
} 
?>
		</table><br>
			<hr>
	<h5 align="center">Budi Setiawan &copy; 2019</h5>	
	</div>
	</body>
</html>