<?php
require 'koneksi.php';
$username = $_POST["username"];
$password = $_POST["password"];

$query_sql = "SELECT * FROM tbl_users
            WHERE username = '$username' AND password = '$password'";

$result = mysqli_query($koneksi, $query_sql);

if(mysqli_num_rows($result) > 0){
    header("Location: dashboard.html");
} else {
    echo"<center><h1>Email atau Passwword Anda Salah. Silahkan Coba Login Kembali.</h1>
    <button><strong><a href='index.html'>Login</a></strong></button></center>";
}