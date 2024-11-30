<?php

session_start(); 
include("../koneksi.php");

if(isset($_POST['simpan'])) {
 $nama_event = $_POST['nama_event'];
 $tanggal = $_POST['tanggal'];
 $lokasi = $_POST['lokasi'];

 $sql = "INSERT INTO events
        (nama_event, tanggal, lokasi)
        VALUES ('$nama_event','$tanggal','$lokasi')";


$query = mysqli_query($db, $sql);

if ($query) {
    $_SESSION['notifikasi'] = "Data siswa berhasil ditambahkan!";
} else {
    $_SESSION['notifikasi'] = "Data siswa gagal ditambahkan!";
}

header('Location: index.php');
} else {
    
    die("akses ditolak...");
}
?>