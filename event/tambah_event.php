<!DOCTYPE html>
<html>
<head>
    <title>event</title>
</head>
<body>
    <h3>Tambah Data Event</h3>
    <form action="proses_tambah.php" method="POST">
     <table border="0">
        <tr>
            <td>nama event</td>
            <td><input type="text" name="nama_event" required></td>
        </tr>
        <tr>
            <td>tanggal</td>
            <td><input type="date" name="tanggal"
                       style="width: 100%"></td>
        </tr>
        <tr>
            <td>lokasi</td>
            <td><textarea name="lokasi"></textarea></td>
        </tr>
     </table>                               <!--di tambah sama class="btn btn-primary"-->
        <button type="submit" name="simpan" class="btn btn-primary">Simpan</button>
    </form>
</body>
</html>