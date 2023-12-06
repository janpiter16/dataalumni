<?php
$servername = "localhost";
$database = "register";
$username = "gatsoe";
$password = "gatsoe";

//untuk tulisan bercetak tebal silahkan sesuaikan dengan detail database Anda 
//membuat koneksi
$koneksi = mysqli_connect($servername,$database, $username, $password);
//mengecek koneksi
if (!$koneksi){
    die("konesi gagal:".mysqli_connect_error());
} else{
    echo "Koneksi Berhasil";
}
//mysql_close($koneksi);