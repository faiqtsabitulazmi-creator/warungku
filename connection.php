<?php

$hostname = "localhost";
$username = "root";
$password = "";
$db = "pos_warungsaya";

$conn = mysqli_connect($hostname, $username, $password, $db);

if ($conn) {
    // echo "koneksi berhasil";
}else{
    echo "koneksi gagal";
}

?>