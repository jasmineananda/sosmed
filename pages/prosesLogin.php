<?php
include "../config/koneksi.php";

$email=$_POST["et_email"];
$password=MD5($_POST["et_password"]);

$sqlperintah = mysqli_query($koneksikan,"SELECT * FROM t_user WHERE email='$email' AND password='$password'");
$baris= mysqli_fetch_array($sqlperintah);
if($baris['status']==='Y'){
    header('location: dashboard.php');
}else{
    echo "<script>alert('Periksa kembali email dan password anda!');</script>";
    echo "<script>location='sign-in.php';</script>";
}
?>