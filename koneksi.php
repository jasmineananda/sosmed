<?php
$server="localhost";
$database="db_sosmed";
$user="root";
$pass="";
$koneksikan=mysqli_connect($server,$user,$pass,$database);
if(!$koneksikan){
    die("Koneksi gagal :".mysqli_connect_error());
}
?>