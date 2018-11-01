<?php
        include "config.php";
        // cek apakah tombol daftar sudah diklik atau blum?
        if(isset($_POST['daftar'])){
            $id = $_POST['id'];
            $nama = $_POST['username'];
            $passwd = $_POST['pass'];
            $lvl = $_POST['level'];
            $fname = $_POST['fullname'];
             
            // buat query
            $sql = "INSERT INTO user (id, username, password, level, fullname) VALUE ('$id', '$nama', '$passwd', '$lvl', '$fname')";
            $query = mysqli_query($connection, $sql);

            // apakah query simpan berhasil?
            if( $query ) {
                // kalau berhasil alihkan ke halaman index.php dengan status=sukses
            header('Location: result.php');
            }
    }
    ?>
<body>
<a href="result.php">Show Data</a>
</body>