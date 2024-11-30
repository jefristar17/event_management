<?php

session_start(); 
include("../koneksi.php");

if(isset($_POST['simpan'])) {
 $nama = $_POST['nama'];
 $email = $_POST['email'];

 $sql = "INSERT INTO partisipan
        (nama, email)
        VALUES ('$nama','$email')";


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