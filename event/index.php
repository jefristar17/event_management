<?php
    include("../koneksi.php");
    session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>event</title>
    <style>
        /* membuat styling pada table */
        table, th, td {
            border: 1px solid black;
            border-collapse: collapse;
            padding: 10px;
        }
    </style>
</head>

<body>
    <header>
    <ul>
        <li><a href="../event/index.php">Data Events</a></li>
        <li><a href="../partisipan/index.php">Data Partisipan</a></li>
    </ul>
    </header>

    <h2>Data Events</h2>
    
    <?php if (isset($_SESSION['notifikasi'])): ?>
    <p><?php echo $_SESSION['notifikasi']; ?></p>
    <?php unset($_SESSION['notifikasi']); ?>
    <?php endif; ?>
<table>
    <thead>
    <tr align="center">
            <th>#</th>
            <th>Nama events</th>
            <th>Tanggal</th>
            <th>Lokasi</th>            <!-- di isi dengan class="btn btn-primary"-->
            <th><a href="tambah_event.php" class="btn btn-primary">Tambah Data</a></th>
    </tr>

    </thead>
    <tbody>
    <?php
        $no = 1;
        $query = $db->query("SELECT * FROM events");
        while ($event = $query->fetch_assoc()) {
        ?>

        <tr>
            <td><?php echo $no++ ?></td>
            <td><?php echo $event['nama_event'] ?></td>
            <td><?php echo $event['tanggal'] ?></td>
            <td><?php echo $event['lokasi'] ?></td>
            <td align="center">
            <a href="edit_event.php?event_id=<?php echo $event['event_id'] ?>">Edit</a>

            <a onclick="return confirm('Anda yakin ingin menghapus data?')"
            href="hapus_event.php?event_id=<?php echo $event['event_id'] ?>">Hapus</a>
            </td>
        </tr>
        <?php
        }
        ?>
    </tbody>
</table>
<!-- menghitung jumlah baris yang ada pada table (event) -->
<P>Total: <?php echo mysqli_num_rows($query) ?></P>
</body>
</html>