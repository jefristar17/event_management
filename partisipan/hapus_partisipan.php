<?php
    session_start();
    include("../koneksi.php");

    if (isset($_GET['partisipan_id'])) {

        $partisipan_id = $_GET['partisipan_id'];

        $sql = "DELETE FROM partisipan WHERE partisipan_id =$partisipan_id";
        $query = mysqli_query($db, $sql);

        if ($query) {
            $_SESSION['notifikasi'] = "Data partisipan berhasil dihapus!";
        } else {
            $_SESSION['notifikasi'] = "Data partisipan gagal dihapus!";
        }

        header('Location: index.php');
} else {
    // jika akses langsung tanpa form, tampilkan pesan error
    die("akses ditolak...");
}

?>