<?php
//koneksi database
include 'Koneksi.php';

//menangkap data yang dikirim dari form
$id = $_POST['id'];
$nama = $_POST['nama'];
$alamat = $_POST['alamat'];
$jk = $_POST['jenis_kelamin'];
$agama = $_POST['agama'];
$mapel = $_POST['mapel'];
$nidn = $_POST['nidn'];


//update data ke database
mysqli_query($koneksi,"update guru set nama='$nama',
alamat='$alamat', jenis_kelamin='$jk', agama='$agama', mapel='$mapel', nidn='$nidn', where id = '$id'");

//mengalihkan halaman kembali ke index.php
header("location:Index.php");

?>