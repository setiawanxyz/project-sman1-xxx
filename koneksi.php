<?php
// koneksi ke mysql
$host = "localhost";
$user = "root";
$pwd = "";
$conn = mysql_connect ($host, $user, $pwd) or die ("Koneksi Gagal, karena " . mysql_error());
mysql_select_db("dbtes_budi",$conn);
?>