<?php
    $host_koneksi = "localhost";
    $username_koneksi = "root";
    $password_koneksi = "";
    $database_koneksi = "db_portofolio";

    $koneksi = mysqli_connect($host_koneksi, $username_koneksi, $password_koneksi, $database_koneksi);
    if(!$koneksi){
        die("connection failed" . mysqli_connect_error());
    }
