<?php
include "../config/koneksi.php"; 

$nama   = $_POST['et_nama'];
$email  = $_POST['et_email'];
$password  = MD5($_POST['et_password']);

$query = "INSERT INTO t_user (nama,foto,email,password,status) VALUES ('$nama', 'png', '$email', '$password', 'Y')";
  $result = mysqli_query($koneksikan, $query);
  if(!$result){
    die ("Query gagal dijalankan: ".mysqli_errno($koneksikan).
      " - ".mysqli_error($koneksikan));
  } else {
      echo "<script>alert('Data berhasil ditambah.');window.location='sign-in.php';</script>";
  }
?>