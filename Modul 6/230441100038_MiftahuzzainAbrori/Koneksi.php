<?php

$server = "127.0.0.1:3307";
$username = "root";
$password = "";
$database = "universitas";

$connect = mysqli_connect($server, $username, $password, $database) or die("koneksi gagal");
?>
