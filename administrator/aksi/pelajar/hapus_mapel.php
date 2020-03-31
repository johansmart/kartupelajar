<?php
    include "../../config/koneksi.php";
    mysqli_query($koneksi, "DELETE FROM db_siswa WHERE id ='$_GET[id]'");
    echo "<script>window.alert('Data Berhasil di Hapus.');
                window.location='../datasiswa'</script>";
?>
