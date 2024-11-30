<?php
    $hostname = "localhost";
    $username = "root";
    $password = "";
    $nama_database = "event_management";

    $db = mysqli_connect($hostname, $username, $password, $nama_database);

    if ( !$db ) {
        die("gagal terhubung dengan database: " . mysqli_connect_error());
    }
?>