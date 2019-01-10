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

		<h3 align="center">Master Data Wali Kelas</h3><br>
		<a href="walikelas_add.php">
		<button type="button" class="btn btn-success">Tambah Data</button>
		</a><br><br>
		<table class="table" style="text-align:center;">
		<tr bgcolor="#bababa">
			<td><b><font color="#fff">#</font></b></td>
			<td><b><font color="#fff">Kode Wali Kelas</font></b></td>
			<td><b><font color="#fff">Nama Guru</font></b></td>
			<td><b><font color="#fff">Kelas</font></b></td>
			<td><b><font color="#fff">Tahun Ajaran</font></b></td>
			<td><b><font color="#fff">Aksi</font></b></td>
		</tr>
<?php
	include 'koneksi.php';
	$query = mysql_query("SELECT * FROM tbwalikelas");
	$no = 1;
	while ($data = mysql_fetch_array($query)) {
?>	
		<tr>
			<td><?php echo $no; ?></td>
			<td><?php echo $data['kode_walikelas']; ?></td>
			<td><?php echo $data['nama_guru']; ?></td>
			<td><?php echo $data['nama_kelas']; ?></td>	
			<td><?php echo $data['tahun_ajaran']; ?></td>
			<td>
			<a href="walikelas_edit.php?kode=<?php echo $data['kode_walikelas']; ?>">
			<button type="button" class="btn btn-primary" style="width:70px;height:30px;">Edit</button>
			</a>&nbsp;&nbsp;
			<a href="walikelas_delete.php?kode=<?php echo $data['kode_walikelas']; ?>">
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