<?php
    session_start();
    include("../koneksi.php");

    if (isset($_GET['event_id'])) {

        $event_id = $_GET['event_id'];

        $sql = "DELETE FROM events WHERE event_id =$event_id";
        $query = mysqli_query($db, $sql);

        if ($query) {
            $_SESSION['notifikasi'] = "Data events berhasil dihapus!";
        } else {
            $_SESSION['notifikasi'] = "Data events gagal dihapus!";
        }

        header('Location: index.php');
} else {
    // jika akses langsung tanpa form, tampilkan pesan error
    die("akses ditolak...");
}

?>