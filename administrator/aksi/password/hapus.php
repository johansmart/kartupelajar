<?php
    include "../../../config/koneksi.php";
    mysqli_query($koneksi, "DELETE FROM lupa_password WHERE id ='$_GET[id]'");
    header('location:../../data-lupa-password.php');
?>
