<?php

include('koneksi.php');

$id = $_POST['id_mahasiswa'];
$nim = $_POST['nim_mahasiswa'];
$nama = $_POST['nama_mahasiswa'];
$gender = $_POST['jenis_kelamin'];
$agama = $_POST['agama'];
$tgl = $_POST['tanggal_lahir'];
$tlp = $_POST['no_telepon'];
$alamat = $_POST['alamat'];

//insert
mysqli_query ($conn, "UPDATE mahasiswa set  nim_mahasiswa = '$nim', nama_mahasiswa ='$nama', jenis_kelamin= '$gender',
                                            agama = '$agama',
                                            tanggal_lahir= '$tgl',
                                            no_telepon = '$tlp',
                                            alamat = '$alamat'
                                            WHERE id_mahasiswa = '$id' ");

echo"<script> alert('Data Berhasil Diubah')</script>";
echo"<meta http-equiv='refresh' content='0; URL=mahasiswa.php'>";

?>