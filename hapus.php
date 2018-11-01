<?php 
// koneksi database
include 'config.php';
 
// menangkap data id yang di kirim dari url
$id = $_GET['id'];
 
 
// menghapus data dari database
mysqli_query($connection,"delete from user where id='$id'");
 
// mengalihkan halaman kembali ke index.php
header("location:result.php");
 
?>