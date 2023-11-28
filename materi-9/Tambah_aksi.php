<?php
//koneksi database
include ("Koneksi.php");

//menangkap data yang dikirim dari form
$nama = $_POST['nama'];
$alamat = $_POST['alamat'];
$jk = $_POST['jenis_kelamin'];
$agama = $_POST['agama'];
$mapel = $_POST['mapel'];
$nidn = $_POST['nidn'];

//menginput data ke database
mysqli_query($koneksi,"insert into guru values('','$nama','$alamat','$jk', '$agama', '$mapel', '$nidn')");

//mengalihkan halaman kembali ke index.php
header("location:Index.php");

?>