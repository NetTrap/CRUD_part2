<!DOCTYPE html>
<html>
<head>
    <title></title>
</head>
<body>
    <h2>GURU SEKOLAH | Edit Data Guru</h2>
    <br/>
    <a href="Index.php">Kembali</a>
    <br/>
    <h3>Edit Data Guru</h3>
    
    <?php
    include 'Koneksi.php' ;
    $id = $_GET['id'];
    $query = mysqli_query($koneksi, "select * from guru where id='$id'");
    while ($data = mysqli_fetch_array($query)) {
        ?>
        <form method="post" action= "Edit_aksi.php">
        <table>
        <tr>
            <td>Nama</td>
            <td>
                <input type="hidden" name ="id" value="<?php echo $data['id'];?>">
                <input type="text" name = "nama" value="<?php echo $data['nama'];?>">
        </td>
        </tr>
        <tr>
            <td>Alamat</td>
            <td><input type="text" name = "alamat" value="<?php echo $data['alamat'];?>"></td>
        </tr>
        <tr>
            <td>Jenis Kelamin</td>
            <td><input type="text" name = "jenis_kelamin" value="<?php echo $data['jenis_kelamin'];?>"></td>
        </tr>
        <tr>
            <td>Agama</td>
            <td><input type="text" name = "agama" value="<?php echo $data['agama'];?>"></td>
        </tr>
        <tr>
            <td>Mata Pelajaran</td>
            <td><input type="text" name = "mapel" value="<?php echo $data['mapel'];?>"></td>
        </tr>
        <tr>
            <td>NIDN</td>
            <td><input type="number" name = "nidn" value="<?php echo $data['nidn'];?>"></td>
        </tr>
        <tr>
            <td></td>
            <td><input type="submit" value = "SIMPAN"></td>
        </tr>
    </table>
    </form>
    <?php
    }
    ?>
</body>
</html>