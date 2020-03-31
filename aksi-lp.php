<?php
    include "config/koneksi.php";
    mysqli_query($koneksi, "INSERT INTO lupa_password (nama_perusahaan, email, telp) VALUES ('$_POST[a]', '$_POST[b]', '$_POST[c]')");
    header("location:lp-alert.php");
?>
