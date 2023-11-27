<?php
$servername = "localhost";
$database = "proyek";
$username = "gatsoe";
$password = "gatsoe";

//untuk tulisan bercetak tebal silahkan sesuaikan dengan detail database Anda 
//membuat koneksi
$koneksi = mysqli_connect($servername, $username, $password, $database);
//mengecek koneksi
if (!$koneksi){
    die("konesi gagal:".mysqli_connect_error());
} else{
    echo "Koneksi Berhasil";
}
//mysql_close($koneksi);