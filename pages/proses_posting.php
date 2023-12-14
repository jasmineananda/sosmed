<?php
include "../config/koneksi.php";

$tx_word = $_POST["txt_word"];
$files = ["file_foto"];
$waktu_post = date("Y-d-m H:i:s");

// ambil ekstensi foto
$rand = rand();
$ekstensi = array('png', 'jpg', 'JPG', 'jpeg', 'gif');
$filename = $_FILES['file_foto']['name'];
$ukuran = $_FILES['file_foto']['size'];
$ext = pathinfo($filename, PATHINFO_EXTENSION);

if (!in_array($ext, $ekstensi)) {
    header("location: dashboard.php?alert=gagal_ekstensi");
} else {
    if ($ukuran < 104407000) {
        $xx = $rand.'_'.$filename;
        move_uploaded_file($_FILES["file_foto"]['tmp_name'], 'foto/' . $rand .'_'. $filename);
        $query = "INSERT INTO t_postingan (word, foto, tgl_post, id_user) VALUES ('$tx_word', '$xx', '$waktu_post', 'anonim')";
        mysqli_query($koneksikan, $query);
        header("location: dashboard.php?alert=berhasil");
    } else {
        header("location: dashboard.php?alert=gagal_ukuran");
    }
}
?>
