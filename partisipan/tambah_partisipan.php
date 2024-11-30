<!DOCTYPE html>
<html>
<head>
    <title>partisipan</title>
</head>
<body>
    <h3>Tambah Data Partisipan</h3>
    <form action="proses_tambah.php" method="POST">
     <table border="0">
        <tr>
            <td>nama</td>
            <td><input type="text" name="nama" required></td>
        </tr>
        <tr>
            <td>email</td>
            <td><input type="text" name="email" required></td>
        </tr>
     </table>                               <!--di tambah sama class="btn btn-primary"-->
        <button type="submit" name="simpan" class="btn btn-primary">Simpan</button>
    </form>
</body>
</html>