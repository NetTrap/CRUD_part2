<!DOCTYPE html>
<html>
<head>
        <meta></title>
</head>
<body>
    <h2>GURU SEKOLAH | Data Guru</h2>
    <br/>
    <a href="Tambah_aksi.php">Tambah Data Guru</a>
    <br/>
    <table border="1">
        <tr>
            <th>No</th>
            <th>Nama Guru</th>
            <th>Alamat</th>
            <th>Jenis Kelamin</th>
            <th>Agama</th>
            <th>Mata Pelajaran</th>
            <th>NIDN</th>
            <th>Opsi</th>
</tr>
<?php
include 'Koneksi.php';
$no =1;
$query = mysqli_query($koneksi, "SELECT * FROM guru");
while($data = mysqli_fetch_array($query)) {
    ?>
    <tr>
        <td><?php echo $no++;?></td>
        <td><?php echo $data ['nama']?></td>
        <td><?php echo $data ['alamat']?></td>
        <td><?php echo $data ['jenis_kelamin']?></td>
        <td><?php echo $data ['agama']?></td>
        <td><?php echo $data ['mapel']?></td>
        <td><?php echo $data ['nidn']?></td>
        <td>
            <a href="Edit.php?id=<?php echo $data['id']; ?>">EDIT</a>
            <a href="Hapus.php?id=<?php echo $data['id']; ?>">HAPUS</a>
        </td>
    </tr>

<?php

}
?>
    </table>
</body>
</html>