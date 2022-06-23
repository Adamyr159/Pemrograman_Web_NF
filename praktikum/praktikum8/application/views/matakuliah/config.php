<?php 

$server = "localhost";
$username = "root";
$password = "";
$database = "dbelen";
// koneksi ke database agar dapat menggunakan query select di dalam view
$conn = mysqli_connect($server, $username, $password, $database) or die ("Gagal");

?>