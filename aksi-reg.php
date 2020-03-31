<?php
    include "config/koneksi.php";
    mysqli_query($koneksi, "INSERT INTO permintaan_akun (nama_perusahaan, nama_pemilik, email, telp) VALUES ('$_POST[a]', '$_POST[b]', '$_POST[c]', '$_POST[d]')");
    header("location:reg-alert.php");
?>
