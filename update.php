<?php 
// koneksi database
include 'config.php';
 
// menangkap data yang di kirim dari form
$id = $_POST['id'];
$nama = $_POST['username'];
$passwd = $_POST['pass'];
$fname = $_POST['fullname'];
 
// update data ke database
mysqli_query($connection,"update user set username='$nama', password='$passwd', fullname='$fname' where id='$id'");
 
// mengalihkan halaman kembali ke index.php
header("location:result.php");
 
?>