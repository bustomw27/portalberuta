<?php 
$server="localhost";
$username="root";
$password=""; 
$database="materi_portalberita";
$koneksi = mysqli_connect("$server","$username","$password","$database");
if (!$koneksi) {
	die("gagal, database tidak ditemukan" . mysqli_connect_error());
}
 ?>
