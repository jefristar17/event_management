<?php
    include("../koneksi.php");
    
    $event_id = $_GET['event_id'];

    $query = $db->query("SELECT * FROM events WHERE event_id ='$event_id'");
    // 1 disini salah karena nama nya nama id nya harusnya $event_id
    $evnt = $query->fetch_assoc();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Document</title>
</head>
<body>
    <h3>Edit Data Event</h3>
    <form action="proses_edit.php" method="POST">
      <input type="hidden" name="event_id" value="<?php echo $evnt['event_id']; ?>">
        <table border="0">
            <tr>
                <td>Nama event</td>
                <td>
                 <input type="text" name="nama_event"
                 value="<?php echo $evnt['nama_event']; ?>" required>
                </td>
            </tr>
            <tr>
                <td>Tanggal</td>
                <td>
                 <input type="date" name="tanggal"
                 value="<?php echo $evnt['tanggal']; ?>" style="width: 100%">
                </td>
            </tr>
            <tr>
                <td>Lokasi</td>
                <td>
                 <textarea name="lokasi"><?php echo $evnt['lokasi']; ?></textarea>
                </td>
            </tr>
        </table>
        <button type="submit" name="simpan">Simpan</button>
    </form>
</body>
</html>