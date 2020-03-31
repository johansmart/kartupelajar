<?php
    include "../../../config/koneksi.php";
    mysqli_query($koneksi, "DELETE FROM users WHERE id_session ='$_GET[id]'");
    header('location:../../data-users.php');
?>
