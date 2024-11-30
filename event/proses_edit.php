<?php

    session_start();
    include("../koneksi.php");

    if(isset($_POST['simpan'])) {
        $event_id = $_POST['event_id'];
        $nama_event = $_POST['nama_event'];
        $tanggal = $_POST['tanggal'];
        $lokasi = $_POST['lokasi'];

        $sql = "UPDATE events SET
        nama_event='$nama_event',
        tanggal='$tanggal',
        lokasi='$lokasi'
        WHERE event_id=$event_id";

        $query = mysqli_query($db, $sql);

        if ($query) {
            $_SESSION['notifikasi'] = "Data siswa berhasil ditambahkan!";
        } else {
            $_SESSION['notifikasi'] = "Data siswa gagal ditambahkan!";
        }

        header('Location: index.php');
} else {
    // jika akses langsung tanpa form, tampilkan pesan error
    die("akses ditolak...");
}

?>