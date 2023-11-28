<!DOCTYPE html>
<html>
<head>
    <title></title>
</head>
<body>
    <h2>SEKOLAH | Tambah Data Guru</h2>
    <br/>
    <a href="Index.php">Halaman Utama</a>
    <br>
    <br>
    <h3>Tambah Data Guru</h3>
    <form method="post" action="Tambah_aksi.php">
    <table>
        
        <tr>
            <td>Nama</td>
            <td><input type="text" name = "nama"></td>
        </tr>
        <tr>
            <td>Alamat</td>
            <td><input type="text" name = "alamat"></td>
        </tr>
        <tr>
            <td>Jenis Kelamin</td>
            <td><input type="text" name = "jenis_kelamin"></td>
        </tr>
        <tr>
            <td>AGAMA</td>
            <td><input type="text" name = "agama"></td>
        </tr>
        <tr>
            <td>Mata Pelajaran</td>
            <td><input type="text" name = "mapel"></td>
        </tr>
        <tr>
            <td>NIDN</td>
            <td><input type="number" name = "nidn"></td>
        </tr>
        <tr>
            <td></td>
            <td><input type="submit" value = "SIMPAN"></td>
        </tr>
    </table>
    </form>
</body>
</html>