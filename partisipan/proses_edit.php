<?php

    session_start();
    include("../koneksi.php");

    if(isset($_POST['simpan'])) {
        $partisipan_id = $_POST['partisipan_id'];
        $nama = $_POST['nama'];
        $email = $_POST['email'];

        $sql = "UPDATE partisipan SET
        nama='$nama',
        email='$email'
        WHERE partisipan_id=$partisipan_id";

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