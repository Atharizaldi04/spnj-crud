<?php

include('koneksi.php');

$nim = $_POST['nim_mahasiswa'];
$nama = $_POST['nama_mahasiswa'];
$gender = $_POST['jenis_kelamin'];
$agama = $_POST['agama'];
$tgl = $_POST['tanggal_lahir'];
$tlp = $_POST['no_telepon'];
$alamat = $_POST['alamat'];

//insert
mysqli_query ($conn, "INSERT INTO mahasiswa VALUES('','$nim','$nama','$gender','$agama','$tgl','$tlp','$alamat')");

echo"<script> alert('Data Berhasil ditambah')</script>";
echo"<meta http-equiv='refresh' content='0; URL=mahasiswa.php'>";

?>