<?php
//koneksi database
include ("Koneksi.php");

//menangkap data yang dikirim dari url
$id = $_GET['id'];

//hapus data ke database
mysqli_query($koneksi,"delete from guru where id ='$id'");

//mengalihkan halaman kembali ke index.php
header("location:Index.php");
?>